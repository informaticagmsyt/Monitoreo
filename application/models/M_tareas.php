<?php
class M_tareas extends CI_Model
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
            'estado'=>$param['estado'],
            'municipio'=>$param['municipio'],
            'parroquia'=>$param['parroquia'],
            'direccion_responsable'=>$param['direccion_responsable']
        );
        $this->db->insert('responsable',$campos);
        echo ' <script>  
						alert("Responsable de Proyecto Registrado con Exito");
						document.location.href = "'.base_url('index.php/C_asignacion_proyecto').'"; 
				</script>';
     }
     public function asignar_tareas($parametros){
        $campos = array(
            'titulo_tarea' => $parametros['titulo_tarea'], 
            'tipo_tarea' => $parametros['tipo_tarea'],   
            'descripcion_tarea' => $parametros['descripcion_tarea'], 
            'fi_tarea' => $parametros['fi_tarea'],   
            'ff_tarea' => $parametros['ff_tarea'],  
            'id_proyecto_tarea' => $parametros['id_proyecto'],  
            'id_tutor_tarea' => $parametros['id_tutor']  
        );
        $this->db->insert('tareas',$campos);
        echo ' <script>  
						alert("Tarea a sido Creada y Asignada c con Exito");
						document.location.href = "'.base_url('index.php/C_asignacion_tareas').'"; 
				</script>';
     }
     public function guardar_observaciones($param,$estatus,$id){
        $param = array(
            'observaciones' => $param['observaciones'], 
            'recomendaciones' => $param['recomendaciones'],   
            'fecha_ejecucion' => $param['fe_tarea'], 
            'id_tareas_obs' => $param['id_tarea_obs']    
        );
        $this->db->insert('observaciones',$param);
        $this->db->where('id_tarea',$id);
        $this->db->set('estatus_tarea', $estatus);
        $sql= $this->db->update('tareas');
        if ($sql != FALSE) {
            echo ' <script>  
            alert("Observaciones y Recomendaciones Registradas Exito");
            document.location.href = "'.base_url('index.php/C_asignacion_tareas').'"; 
            </script>';
        }
       
     }
     public function get_tareas($tarea){
        $this->db->select("tareas.id_tarea, 
        tareas.titulo_tarea, 
        tareas.tipo_tarea, 
        tareas.descripcion_tarea, 
        tareas.fi_tarea, 
        tareas.ff_tarea, 
        tareas.id_proyecto_tarea, 
        tareas.id_tutor_tarea,
        proyecto.id_proyecto, 
        proyecto.nombre_proyecto, 
        proyecto.estatus_proyecto, 
        proyecto.descripcion_proyecto, 
        responsable.id_responsable, 
        responsable.cedula_responsable, 
        responsable.nombre_responsable, 
        responsable.telefono_responsable, 
        responsable.email_responsable, 
        responsable.direccion_responsable");
        $this->db->from('public.tareas, 
        public.proyecto, 
        public.responsable');
        $this->db->where("tareas.id_proyecto_tarea = proyecto.id_proyecto AND
        tareas.id_tutor_tarea = responsable.id_responsable AND tareas.id_tarea = '$tarea' ");
        $get_tarea = $this->db->get();
        return $get_tarea->result();
     }

      public function proyecto_tareas($proyecto){
        $this->db->select("tareas.id_tarea, 
        tareas.titulo_tarea, 
        tareas.tipo_tarea, 
        tareas.descripcion_tarea, 
        tareas.fi_tarea, 
        tareas.ff_tarea, 
        tareas.id_proyecto_tarea, 
        tareas.id_tutor_tarea,
        proyecto.id_proyecto, 
        proyecto.nombre_proyecto, 
        proyecto.estatus_proyecto, 
        proyecto.descripcion_proyecto, 
        responsable.id_responsable, 
        responsable.cedula_responsable, 
        responsable.nombre_responsable, 
        responsable.telefono_responsable, 
        responsable.email_responsable, 
        responsable.direccion_responsable");
        $this->db->from('public.tareas, 
        public.proyecto, 
        public.responsable');
        $this->db->where("tareas.id_proyecto_tarea = proyecto.id_proyecto AND
        tareas.id_tutor_tarea = responsable.id_responsable AND tareas.id_tarea = '$tarea' ");
        $proyecto_tareas = $this->db->get();
        return $proyecto_tareas->result();
     }
     public function edit_tareas($id,$campos){
         $this->db->where('id_tarea',$id);
        $sql= $this->db->update('tareas',$campos);

            if ($sql) {
                echo ' <script>  
         alert("Tarea a sido Editada y con Exito");
         document.location.href = "'.base_url('index.php/C_asignacion_tareas').'"; 
        </script>';
            }  
     }
     public function tareas_activas(){
        $this->db->query("SELECT COUNT(*)");
        $this->db->from('tareas');
       $this->db->where('estatus_tarea','activa');
      $activas = $this->db->get();
        return $activas->result();
    }
    public function tareas_canceladas(){
        $this->db->query("SELECT COUNT(*)");
        $this->db->from('tareas');
       $this->db->where('estatus_tarea','cancelada');
        $canceladas = $this->db->get();
        return $canceladas->result();
    }
    public function tareas_finalizadas(){
        $this->db->query("SELECT COUNT(*)");
        $this->db->from('tareas');
       $this->db->where('estatus_tarea','finalizada');
        $finalizada = $this->db->get();
        return $finalizada->result();
    }
    public function contar_tareas(){
        $this->db->query("SELECT COUNT(*)");
        $this->db->from('tareas');
     //  $this->db->where('estatus_tarea','activa');
      $activas = $this->db->get();
        return $activas->result();
    }
     public function listar_proyecto($parametro){
        return  $this->db->query("SELECT * FROM usuarios")->result();
 }


}
?>