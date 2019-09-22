<?php
class M_productor extends CI_Model
{
    function _construct(){
        parent::__construct();

    }   
    public function guardar($param){
  
        $campos = array(
            'nacionalidad' => $param['nacionalidad'],  
            'cedula_productor' => $param['cedula_productor'],
            'nombre_productor'=> $param['nombre_productor'],
		'telefono_productor'=>$param['telefono_productor'],
		'sexo'=> $param['sexo'],
            'f_nacimiento'=>$param['f_nacimiento'],
            'email_productor' => $param['email_productor'],
            'cargo_productor' => $param['cargo_productor'],
            'estado'=>$param['estado'],
            'municipio'=>$param['municipio'],
            'parroquia'=>$param['parroquia'],
            'direccion_productor'=>$param['direccion_productor'],
            'p_carnet'=>$param['p-carnet'],
            'v_social'=>$param['v_social'],
            'c_carnet'=>$param['c-carnet'],
            'profesion'=>$param['profesion'],
		'pertenece'=>$param['pertenece'],
		'facebook'=>$param['facebook'],
            'instagram'=>$param['instagram'],
		'twitter'=>$param['twitter'],
		'especialidad'=>$param['especialidad']
		
        );
        $this->db->insert('productor',$campos);
        echo ' <script>  
						alert("Productor  Registrado con Exito");
						document.location.href = "'.base_url().'index.php/c_productor"; 
				</script>';
     }
     public function listar_productor(){
        $this->db->select("productor.id_productor, 
  productor.nacionalidad, 
  productor.cedula_productor, 
  productor.nombre_productor, 
  productor.telefono_productor, 
  productor.email_productor, 
  productor.cargo_productor, 
  productor.estado, 
  productor.especialidad, 
  productor.municipio, 
  productor.parroquia, 
  personas.id_persona,

  productor.direccion_productor, 
  productor.p_carnet, 
  productor.v_social, 
  productor.c_carnet, 
  productor.profesion, 
  productor.pertenece, 
  proyecto.id_proyecto, 
  proyecto.nombre_proyecto, 
  proyecto.descripcion_proyecto, 
  proyecto.estatus_proyecto, 
  proyecto.tipo_proyecto, 
  proyecto.categoria_proyecto, 
  estados.estado, 
  estados.id_estado, 
  municipios.id_municipio, 
  municipios.municipio, 
  parroquias.id_parroquia, 
  parroquias.parroquia");
        $this->db->from('public.productor, 
  public.proyecto, 
  public.estados, 
  public.municipios, 
  public.parroquias');
        $this->db->where('proyecto.id_proyecto = productor.pertenece AND
  estados.id_estado = productor.estado AND
  municipios.id_municipio = productor.municipio AND
  parroquias.id_parroquia = productor.parroquia');
        $listar = $this->db->get();
        return $listar->result();
     }
     public function get_productor($id){
        $this->db->select("productor.id_productor, 
  productor.nacionalidad, 
  productor.cedula_productor, 
  productor.nombre_productor, 
  productor.telefono_productor, 
  productor.email_productor, 
  productor.cargo_productor, 
  productor.estado, 
  productor.municipio, 
  productor.parroquia, 
  productor.direccion_productor, 
  productor.p_carnet, 
  productor.v_social, 
  productor.c_carnet, 
  productor.profesion, 
  productor.pertenece, 
  proyecto.id_proyecto, 
  proyecto.nombre_proyecto, 
  proyecto.descripcion_proyecto, 
  proyecto.estatus_proyecto, 
  proyecto.tipo_proyecto, 
  proyecto.categoria_proyecto, 
  estados.estado, 
  estados.id_estado, 
  municipios.id_municipio, 
  municipios.municipio, 
  parroquias.id_parroquia, 
  parroquias.parroquia");
        $this->db->from('public.productor, 
  public.proyecto, 
  public.estados, 
  public.municipios, 
  public.parroquias');
        $this->db->where("proyecto.id_proyecto = productor.pertenece AND
  estados.id_estado = productor.estado AND
  municipios.id_municipio = productor.municipio AND
  parroquias.id_parroquia = productor.parroquia
  AND id_productor = '$id' ");
        $listar = $this->db->get();
        return $listar->result();
     }
     public function edit_productor($id,$campos){
        $this->db->where('id_productor',$id);
        $sql= $this->db->update('productor',$campos);
           if ($sql) {
               echo ' <script>  
        alert("Tutor a sido Editado con Exito");
        document.location.href = "'.base_url('index.php/C_listado_productor').'"; 
       </script>';
           } }

     
}
?>
