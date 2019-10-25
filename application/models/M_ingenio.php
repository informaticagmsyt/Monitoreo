<?php
class m_ingenio  extends CI_Model
{
  public $desde;
  public $hasta;
    function _construct(){
        parent::__construct();
        $this->desde=null;
        $this->hasta=null;  
    }   /*
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
public function ingenio_amazonas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='1'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
public function ingenio_anzoategui(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='2'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
public function ingenio_apure(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='3'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function ingenio_aragua(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='4'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 } 
  public function ingenio_barinas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='5'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_bolivar(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='6'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_carabobo(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='7'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_cojedes(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='8'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_delta(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='9'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_distrito(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='24'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_falcon(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='10'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_guarico(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='11'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_lara(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='12'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_merida(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='13'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_miranda(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='14'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_monagas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='15'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_esparta(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='16'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_portuguesa(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='17'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_sucre(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='18'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_tachira(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='19'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_trujillo(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='20'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_vargas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='21'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_yaracuy(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='22'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function ingenio_zulia(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='5' and estados.id_estado='23'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
public function listar_ingenio(){
$this->db->select("personas.cedula, 
  personas.nombre, 
  personas.apellido, 
  personas.id_persona, 
  personas.sexo, 
  personas.f_nacimiento, 
  personas.key_estatus, 
  direccion.estado, 
  direccion.municipio, 
  direccion.parroquia, 
  direccion.localidad, 
  direccion.nombre_localidad, 
  direccion.direccion_exacta, 
  planes_personas.fecha_registro, 
  planes.planes, 
  contacto.telefono, 
  contacto.email, 
  contacto.id_contacto, 
  figura_juridica.r_social, 
  figura_juridica.id_figura, 
  estatus.estatus, 
  laboral.grado_instruccion, 
  laboral.profesion_oficio, 
  laboral.trabaja, 
  estados.estado, 
  municipios.municipio, 
  parroquias.parroquia, 
  espacio_politico.e_social, 
  espacio_politico.n_social, 
  espacio_politico.movimiento, 
  proyecto.t_proyecto, 
  proyecto.d_proyecto, 
  solicitud.t_asesoramiento, 
  solicitud.t_solicitud, 
  produccion.produce, 
  produccion.nivel, 
  produccion.esp_productivo, 
  brigadas_persona.brigadas, 
  brigadas_persona.id_brigada");
  $this->db->from('public.personas, 
  public.direccion, 
  public.planes_personas, 
  public.planes, 
  public.contacto, 
  public.figura_juridica, 
  public.estatus, 
  public.laboral, 
  public.estados, 
  public.municipios, 
  public.parroquias, 
  public.espacio_politico, 
  public.proyecto, 
  public.solicitud, 
  public.produccion, 
  public.brigadas_persona');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.id_persona_direccion = planes_personas.key_id_personas AND
  direccion.id_persona_direccion = contacto.id_persona_contacto AND
  direccion.estado = estados.id_estado AND
  direccion.municipio = municipios.id_municipio AND
  direccion.parroquia = parroquias.id_parroquia AND
  direccion.id_persona_direccion = brigadas_persona.id_persona_brigada AND
  planes_personas.key_id_personas = figura_juridica.id_persona_figura AND
  planes.id_planes = planes_personas.key_id_planes AND
  estatus.id_estatus = personas.key_estatus AND
  laboral.id_persona_laboral = figura_juridica.id_persona_figura AND
  laboral.id_persona_laboral = proyecto.id_proyecto_personas AND
  espacio_politico.id_persona_espacio = contacto.id_persona_contacto AND
  proyecto.id_proyecto_personas = solicitud.id_persona_solicitud AND
  solicitud.id_persona_solicitud = produccion.id_persona_produccion AND planes.id_planes='5'");
  $listado = $this->db->get();
    return $listado->result();
}
}
?>
