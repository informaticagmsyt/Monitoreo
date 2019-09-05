<?php
class M_proyecto extends CI_Model
{
    function _construct(){
        parent::__construct(); 
        $this->load->database(); 
    }   
    public function guardar($param_proyecto,$param,$infr_proyecto,$serv_publicos, $datos_operativos){

        $datos=array(
            'nombre_proyecto'=>$param_proyecto['nombre_proyecto'],  
            'estatus_proyecto'=>$param_proyecto['estatus_proyecto'],
            'descripcion_proyecto'=>$param_proyecto['descripcion_proyecto'],
            'tipo_proyecto'=>$param_proyecto['tipo_proyecto'],
            'categoria_proyecto'=>$param_proyecto['categoria_proyecto']  
        );
       $this->db->insert('proyecto',$datos);
       $lastId = $this->db->insert_id();
        //echo $lastId;   
       
       if ($lastId > 0) {
            $campos = array(
                'tipo' => $param['tipo'],
                'rif_empresa' => $param['rif_empresa'],
                'nombre_empresa' => $param['nombre_empresa'],
                'telefono_empresa'=> $param['telefono_empresa'],
                'direccion_empresa'=>$param['direccion_empresa'],
                'estado'=>$param['estado'],
                'municipio'=>$param['municipio'],
                'parroquia'=>$param['parroquia'],
                'ciudad'=>$param['ciudad'],
                'registrada'=>$param['registrada'],
                'codigo_situr'=>$param['codigo_situr'],
                'codigo_sunagro'=>$param['codigo_sunagro'],
				'inst_responsable'=>$param['inst_responsable'],
				'f_creacion'=>$param['f_creacion'],
                'id_proyecto_empresa '=> $param['id_proyecto_empresa '] = $lastId 
           );

           $datos_infr=array(
            'edificacion'=>$infr_proyecto['edificacion'],
            'obs_infraestructura'=>$infr_proyecto['obs_infraestructura'],
            'm2_terreno'=>$infr_proyecto['m2_terreno'],
            'm2_construccion'=>$infr_proyecto['m2_construccion'],
            'condicion_bano'=>$infr_proyecto['condicion_baño'],
            'id_proyecto_infra '=> $param['id_proyecto_infra'] = $lastId 
             );
            
             $datos_serv= array(
               'aguas_blancas'=>$serv_publicos['aguas_blancas'],
                'aguas_servidas'=>$serv_publicos['aguas_servidas'],
                'servicio_gas'=>$serv_publicos['servicio_gas'],
                'serv_electrico'=>$serv_publicos['serv_electrico'],
                'vialidad'=>$serv_publicos['vialidad'],
                'aceo_urbano'=>$serv_publicos['aceo_urbano'],
                'id_proyecto_serv'=> $param['id_proyecto'] = $lastId 
             );                 
           
            $datos_operat=array(
                'fnto_operativo'=>$datos_operativos['fnto-operativo'],
                'obsv_operativas'=>$datos_operativos['obsv_operativas'],
                'produccion_inst'=>$datos_operativos['produccion-inst'],
                'produccion_act' =>$datos_operativos['produccion-act'],
                'unid_medida'=>$datos_operativos['unid-medida'],
                'id_proyecto_opera'=> $param['id_proyecto'] = $lastId 
                             );   

         $insert   =  $this->db->insert('empresa',$campos);
         $insert_1 =  $this->db->insert('infraestructura',$datos_infr);
         $insert_2 =  $this->db->insert('servicios',$datos_serv);
         $insert_3 =  $this->db->insert('operatividad',$datos_operat);
          
            if (!$insert_3) {
            echo ' <script>  
                        alert(" Error al Registrar Proyecto");
                        document.location.href = "'.base_url().'c_proyecto"; 
                     </script>';
           }else{
            echo ' <script>  
                        alert(" Proyecto Registrado con Exito");
                        document.location.href = "'.base_url().'index.php/c_proyecto"; 
                    </script>';
           }
       }   
    }
public function get_proyecto($id){
    $this->db->select(" proyecto.id_proyecto, 
        proyecto.nombre_proyecto, 
        proyecto.estatus_proyecto, 
        proyecto.descripcion_proyecto, 
        proyecto.tipo_proyecto, 
        proyecto.categoria_proyecto, 
        empresa.id_empresa, 
        empresa.tipo, 
        empresa.rif_empresa, 
        empresa.nombre_empresa, 
        empresa.telefono_empresa, 
        empresa.direccion_empresa, 
        empresa.estado, 
        empresa.municipio, 
        empresa.parroquia, 
        empresa.ciudad, 
        empresa.registrada, 
        empresa.codigo_situr, 
        empresa.codigo_sunagro, 
        empresa.inst_responsable, 
        empresa.id_proyecto_empresa, 
        infraestructura.id_infraestructura, 
        infraestructura.obs_infraestructura, 
        infraestructura.condicion_bano, 
        infraestructura.id_proyecto_infra, 
        infraestructura.edificacion, 
        infraestructura.m2_terreno, 
        infraestructura.m2_construccion, 
        servicios.id_servicios, 
        servicios.id_proyecto_serv, 
        servicios.aguas_blancas, 
        servicios.aguas_servidas, 
        servicios.servicio_gas, 
        servicios.serv_electrico, 
        servicios.vialidad, 
        servicios.aceo_urbano, 
        operatividad.id_operatividad, 
        operatividad.fnto_operativo, 
        operatividad.obsv_operativas, 
        operatividad.id_proyecto_opera, 
        operatividad.unid_medida, 
        operatividad.produccion_inst, 
        operatividad.produccion_act, 
        estados.id_estado, 
        estados.estado, 
        municipios.id_municipio, 
        municipios.municipio, 
        parroquias.id_parroquia, 
        parroquias.parroquia");
    $this->db->from(' public.proyecto, 
        public.empresa, 
        public.infraestructura, 
        public.servicios, 
        public.operatividad, 
        public.estados, 
        public.municipios, 
        public.parroquias');
    $this->db->where(" proyecto.id_proyecto = empresa.id_proyecto_empresa AND
        proyecto.id_proyecto = infraestructura.id_proyecto_infra AND
        proyecto.id_proyecto = servicios.id_proyecto_serv AND
        proyecto.id_proyecto = operatividad.id_proyecto_opera AND
        empresa.municipio = municipios.id_municipio AND
        empresa.parroquia = parroquias.id_parroquia AND
        estados.id_estado = empresa.estado
        AND id_proyecto = '$id' ");
        $proyecto = $this->db->get();
        return $proyecto->result();
     }

      public function edit_proyecto($id,$dato,$campos,$datos_infr,$datos_serv,$datos_operat){
        $this->db->where('id_proyecto',$id);
        $sql= $this->db->update('proyecto',$dato);
            if ($sql) {
                $this->db->where('id_proyecto_empresa',$id);
                $sql1= $this->db->update('empresa',$campos);
                    if ($sql1) {
                       $this->db->where('id_proyecto_infra',$id);
                       $sql2= $this->db->update('infraestructura',$datos_infr);
                            if ($sql2) {
                                $this->db->where('id_proyecto_serv',$id);
                                $sql3= $this->db->update('servicios',$datos_serv);
                                    if ($sql3) {
                                        $this->db->where('id_proyecto_opera',$id);
                                        $sql4= $this->db->update('operatividad',$datos_operat); 
                                            if ($sql4) {
                                                    echo ' <script>  
                                                                alert(" Proyecto Editado Proyecto");
                                                                document.location.href = "'.base_url().'index.php/C_listado_proyectos"; 
                                                            </script>';
                                                  }   else{
                                                    echo ' <script>  
                                                        alert(" Error al Editar Proyecto");
                                                        document.location.href = "'.base_url().'index.php/C_listado_proyectos"; 
                                                        </script>';
                                                  }   
                                    }
                        }
                    }

            }



         /*  if ($sql) {
               echo ' <script>  
        alert("Tutor a sido Editado con Exito");
        document.location.href = "'.base_url('index.php/C_listado_proyectos').'"; 
       </script>';
           } */




       }

   
}
?>
