<?php
class m_listado extends CI_Model
{

  public $desde;
  public $hasta;
    function _construct(){
        parent::__construct();  

        $this->desde=false;
        $this->hasta=false;
    } 

    public function setDesdeHasta($desde, $hasta){
      $this->desde=$desde;
      $this->hasta=$hasta;
    }
public function get_estados(){
    $this->db->query("SELECT '*'");
    $this->db->from('estados');
    $stado = $this->db->get();
      return $stado->result();
 }
public function get_municipio_query($id_estado){
       $this->db->query("SELECT '*'");
        $this->db->from('municipios');
        $this->db->where("id_estado='$id_estado'");
        $stado = $this->db->get();
        return $stado->result();
}
public function listado_estatus(){
    $this->db->query("SELECT COUNT(*)");
    $this->db->from('estatus');
    $contar = $this->db->get();
      return $contar->result();
 }
 public function listado_tipo_usuario(){
  $this->db->query("SELECT ('*') ");
  $this->db->from('tipo_usuario');
  $contar = $this->db->get();
    return $contar->result();
 }  
public function listado_total(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('personas');
  $contar = $this->db->get();
    return $contar->result();
 }
 public function listado_agro(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '1'");
   if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }

  $agro = $this->db->get();
    return $agro->result();
 }
  public function listado_asesorate(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '2'");
  if(isset($this->desde))
  if(isset($this->desde) && $this->desde && $this->hasta  ){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $agro = $this->db->get();
    return $agro->result();
 }
  public function listado_brigadas(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '3'");
  
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $brigadas = $this->db->get();
    return $brigadas->result();
 }
  public function listado_emprende(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '4'");

  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $emprende = $this->db->get();
    return $emprende->result();
 }
  public function listado_ingenio(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '5'");

  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $ingenio = $this->db->get();
    return $ingenio->result();
 }
public function listado_amazonas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='1'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $amazonas = $this->db->get();
    return $amazonas->result();
 }
public function listado_anzoategui(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='2'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $anzoategui = $this->db->get();
    return $anzoategui->result();
 }
 public function listado_apure(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='3'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $apure = $this->db->get();
    return $apure->result();
 }
 public function listado_aragua(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='4'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_barinas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='5'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $barinas = $this->db->get();
    return $barinas->result();
 }
  public function listado_bolivar(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='6'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $bolivar = $this->db->get();
    return $bolivar->result();
 }
  public function listado_carabobo(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='7'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $carabobo = $this->db->get();
    return $carabobo->result();
 }
   public function listado_cojedes(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='8'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $cojedes = $this->db->get();
    return $cojedes->result();
 }
    public function listado_delta(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='9'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $delta = $this->db->get();
    return $delta->result();
 }
  public function listado_distrito(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='24'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $distrito = $this->db->get();
    return $distrito->result();
 }
  public function listado_falcon(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='10'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $falcon = $this->db->get();
    return $falcon->result();
 }
   public function listado_guarico(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='11'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $guarico = $this->db->get();
    return $guarico->result();
 }
 public function listado_lara(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='12'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $lara = $this->db->get();
    return $lara->result();
 }
 public function listado_merida(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='13'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $merida = $this->db->get();
    return $merida->result();
 }
  public function listado_miranda(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='14'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $miranda = $this->db->get();
    return $miranda->result();
 }
 public function listado_monagas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='15'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $monagas = $this->db->get();
    return $monagas->result();
 }
  public function listado_esparta(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='16'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $esparta = $this->db->get();
    return $esparta->result();
 }
  public function listado_portuguesa(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='17'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $portuguesa = $this->db->get();
    return $portuguesa->result();
 }
  public function listado_sucre(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='18'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $sucre = $this->db->get();
    return $sucre->result();
 }

 

 public function listado_tachira(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='19'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $sucre = $this->db->get();
    return $sucre->result();
   }




 
 public function listado_trujillo(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='20'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $sucre = $this->db->get();
    return $sucre->result();
 }

 

 public function listado_vargas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='21'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $vargas = $this->db->get();
    return $vargas->result();
 }
 public function listado_yaracuy(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='22'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $yaracuy = $this->db->get();
    return $yaracuy->result();
 }
 public function listado_zulia(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='23'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $zulia = $this->db->get();
    return $zulia->result();
 }}
?>
