<?php
class m_emprende  extends CI_Model
{
  public $desde;
  public $hasta;
    function _construct(){
        parent::__construct();
        $this->desde=null;
        $this->hasta=null;  
    }
   /*
 public function contar_proyectos(){
    $this->db->query("SELECT COUNT(*)");
    $this->db->from('proyecto');
    $this->db->where('estatus_proyecto','Paralizado');
    $paralizado = $this->db->get();
    return $paralizado->result();
}
*/
public function setDesdeHasta($desde, $hasta){
  $this->desde=$desde;
  $this->hasta=$hasta;
}    
public function emprende_amazonas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='1'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function emprende_anzoategui(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='2'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function emprende_apure(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='3'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }

  public function emprende_aragua(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='4'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 } 
  public function emprende_barinas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='5'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_bolivar(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='6'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_carabobo(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='7'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_cojedes(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='8'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_delta(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='9'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_distrito(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='24'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_falcon(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='10'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_guarico(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='11'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_lara(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='12'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_merida(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='13'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_miranda(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='14'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_monagas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='15'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_esparta(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='16'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_portuguesa(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='17'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_sucre(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='18'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_tachira(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='19'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_trujillo(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='20'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_vargas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='21'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_yaracuy(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='22'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function emprende_zulia(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='4' and estados.id_estado='23'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
public function listar_emprende(){
$this->db->select("planes.planes, 
  personas.cedula, 
  personas.nombre,
  personas.id_persona,
 
  personas.apellido, 
  personas.sexo, 
  personas.f_nacimiento, 
  contacto.telefono, 
  contacto.email, 
  direccion.localidad, 
  direccion.nombre_localidad, 
  direccion.direccion_exacta, 
  estados.estado, 
  municipios.municipio, 
  parroquias.parroquia, 
  planes_personas.fecha_registro, 
  espacio_politico.e_social, 
  espacio_politico.n_social, 
  espacio_politico.movimiento, 
  proyecto.t_proyecto, 
  proyecto.d_proyecto, 
  produccion.produce, 
  produccion.nivel, 
  produccion.esp_productivo, 
  figura_juridica.r_social, 
  laboral.grado_instruccion, 
  laboral.profesion_oficio, 
  laboral.trabaja, 
  figura_juridica.id_persona_figura, 
  solicitud.t_asesoramiento, 
  solicitud.t_solicitud, 
  planes.id_planes");
  $this->db->from('public.personas, 
  public.planes, 
  public.planes_personas, 
  public.contacto, 
  public.direccion, 
  public.estados, 
  public.municipios, 
  public.parroquias, 
  public.espacio_politico, 
  public.produccion, 
  public.proyecto, 
  public.figura_juridica, 
  public.laboral, 
  public.solicitud');
  $this->db->where( "personas.id_persona = planes_personas.key_id_personas AND
  personas.id_persona = direccion.id_persona_direccion AND
  personas.id_persona = proyecto.id_proyecto_personas AND
  personas.id_persona = produccion.id_persona_produccion AND
  personas.id_persona = laboral.id_persona_laboral AND
  personas.id_persona = figura_juridica.id_persona_figura AND
  personas.id_persona = solicitud.id_persona_solicitud AND
  planes.id_planes = planes_personas.key_id_planes AND
  contacto.id_persona_contacto = personas.id_persona AND
  direccion.estado = estados.id_estado AND
  direccion.municipio = municipios.id_municipio AND
  direccion.parroquia = parroquias.id_parroquia AND
  direccion.id_persona_direccion = espacio_politico.id_persona_espacio AND planes.id_planes='4'");
  $listado = $this->db->get();
    return $listado->result();
}
}
?>
