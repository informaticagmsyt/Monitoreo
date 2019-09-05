<?php
class m_listado extends CI_Model
{
    function _construct(){
        parent::__construct();  
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
    $this->db->query("SELECT COUNT('*')");
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
  $agro = $this->db->get();
    return $agro->result();
 }
  public function listado_asesorate(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '2'");
  $agro = $this->db->get();
    return $agro->result();
 }
  public function listado_brigadas(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '3'");
  $brigadas = $this->db->get();
    return $brigadas->result();
 }
  public function listado_emprende(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '4'");
  $emprende = $this->db->get();
    return $emprende->result();
 }
  public function listado_ingenio(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '5'");
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
  $amazonas = $this->db->get();
    return $amazonas->result();
 }
 public function listado_apure(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='3'");
  $amazonas = $this->db->get();
    return $amazonas->result();
 }
 public function listado_aragua(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='4'");
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
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_bolivar(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='6'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_carabobo(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='7'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function listado_cojedes(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='8'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
    public function listado_delta(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='9'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_distrito(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='10'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_falcon(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='11'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function listado_guarico(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='12'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_lara(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='13'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_merida(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='14'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_miranda(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='15'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_monagas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='16'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_esparta(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='17'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_portuguesa(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='18'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_sucre(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='19'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_tachira(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='20'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_trujillo(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='21'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_vargas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='22'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_yaracuy(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='23'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_zulia(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='24'");
  $aragua = $this->db->get();
    return $aragua->result();
 }}
?>
