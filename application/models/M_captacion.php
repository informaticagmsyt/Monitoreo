<?php
class m_captacion extends CI_Model
{
    function _construct(){
        parent::__construct();  
    }   /*
 public function contar_proyectos(){
    $this->db->query("SELECT COUNT(*)");
    $this->db->from('proyecto');
    $this->db->where('estatus_proyecto','Paralizado');
    $paralizado = $this->db->get();
    return $paralizado->result();
}
*/
public function listar_captacion(){
$this->db->select(" estados.estado, 
personas.id_persona,

  parroquias.parroquia, 
  municipios.municipio, 
  captacion.id_captacion, 
  captacion.cedula, 
  captacion.nombre, 
  captacion.apellido, 
  captacion.telefono, 
  captacion.email, 
  captacion.sexo, 
  captacion.profesion, 
  captacion.oficio");
  $this->db->from(' public.estados, 
  public.municipios, 
  public.parroquias, 
  public.captacion');
  $this->db->where( "captacion.estado = estados.id_estado AND
  captacion.municipio = municipios.id_municipio AND
  captacion.parroquia = parroquias.id_parroquia");
  $listado = $this->db->get();
    return $listado->result();

}
}
?>
