<?php
class M_responsable extends CI_Model
{
    function _construct(){
        parent::__construct();  
    }   
    public function guardar($param){
        $campos = array(
            'nacionalidad' => $param['nacionalidad'],  
            'cedula_responsable' => $param['cedula_responsable'],
            'nombre_responsable'=> $param['nombre_responsable'],
            'telefono_responsable'=>$param['telefono_responsable'],
            'email_responsable' => $param['email_responsable'],
            'profesion'=> $param['profesion'],
            'oficio'=>$param['oficio'],
            'inst_pertenece' => $param['institucion_pertenece'],
            'estado'=>$param['estado'],
            'municipio'=>$param['municipio'],
            'parroquia'=>$param['parroquia'],
            'direccion_responsable'=>$param['direccion_responsable']
        );
        $this->db->insert('responsable',$campos);
        echo ' <script>  
						alert("Tutor de Proyecto Registrado con Exito");
						document.location.href = "'.base_url('index.php/C_asignacion_proyecto').'"; 
				</script>';
     }
     public function get_responsable($id){
        $this->db->select('responsable.id_responsable, 
            responsable.nacionalidad, 
            responsable.cedula_responsable, 
            responsable.nombre_responsable, 
            responsable.telefono_responsable, 
            responsable.email_responsable, 
            responsable.estado, 
            responsable.municipio, 
            responsable.parroquia, 
            responsable.direccion_responsable, 
            responsable.profesion, 
            responsable.oficio, 
            responsable.inst_pertenece, 
            estados.estado, 
            estados.id_estado, 
            municipios.municipio, 
            municipios.id_municipio, 
            parroquias.id_parroquia, 
            parroquias.parroquia');
        $this->db->from('public.responsable, 
            public.estados, 
            public.municipios, 
            public.parroquias');
        $this->db->where("responsable.estado = estados.id_estado AND
            responsable.parroquia = parroquias.id_parroquia AND
            municipios.id_municipio = responsable.municipio AND id_responsable = '$id' ");
        $resp = $this->db->get();
        return $resp->result();
     }

     public function edit_responsable($id,$campos){
        $this->db->where('id_responsable',$id);
        $sql= $this->db->update('responsable',$campos);
           if ($sql) {
               echo ' <script>  
        alert("Tutor a sido Editado con Exito");
        document.location.href = "'.base_url('index.php/C_listado_responsable').'"; 
       </script>';
           } 
    }

     public function pro_tutor($parametros){
        $campos = array(
             
            'id_proyect' => $parametros['id_proyecto'],  
            'id_tutorr' => $parametros['id_tutor']
        );
        $this->db->insert('proyecto-tutor',$campos);
        echo ' <script>  
						alert("Tutor a sido Asignado con Exito");
						document.location.href = "'.base_url('index.php/C_asignacion_proyecto').'"; 
				</script>';
     }


}
?>