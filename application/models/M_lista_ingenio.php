<?php
class m_lista_ingenio  extends CI_Model
{
  public $desde;
  public $hasta;
    function _construct(){
        parent::__construct();
        $this->desde=null;
        $this->hasta=null;  
    }
    public function setDesdeHasta($desde, $hasta){
      $this->desde=$desde;
      $this->hasta=$hasta;
    }     
public function amazonas_total(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','1');
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $listado = $this->db->get();
    return $listado->result();
}
public function amazonas_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','1');
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $listado = $this->db->get();
    return $listado->result();
}
public function amazonas_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','1');
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $listado = $this->db->get();
    return $listado->result();
}
public function amazonas_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','1');
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $listado = $this->db->get();
    return $listado->result();
}

public function amazonas_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','1');
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $listado = $this->db->get();
    return $listado->result();
}
public function amazonas_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','1');
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function anzoategui_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','2');
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $listado = $this->db->get();
    return $listado->result();
}

public function anzoategui_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','2');
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $listado = $this->db->get();
    return $listado->result();
}

public function anzoategui_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','2');
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $listado = $this->db->get();
    return $listado->result();
}
public function anzoategui_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','2');
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $listado = $this->db->get();
    return $listado->result();
}
public function anzoategui_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','2');
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function apure_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','3');
  $listado = $this->db->get();
    return $listado->result();
}
public function apure_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','3');
  $listado = $this->db->get();
    return $listado->result();
}
public function apure_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','3');
  $listado = $this->db->get();
    return $listado->result();
}
public function apure_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','3');
  $listado = $this->db->get();
    return $listado->result();
}
public function apure_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','3');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function aragua_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','4');
  $listado = $this->db->get();
    return $listado->result();
}

public function aragua_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','4');
  $listado = $this->db->get();
    return $listado->result();
}
public function aragua_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','4');
  $listado = $this->db->get();
    return $listado->result();
}
public function aragua_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','4');
  $listado = $this->db->get();
    return $listado->result();
}
public function aragua_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','4');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function barinas_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','5');
  $listado = $this->db->get();
    return $listado->result();
}
public function barinas_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','5');
  $listado = $this->db->get();
    return $listado->result();
}
public function barinas_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','5');
  $listado = $this->db->get();
    return $listado->result();
}
public function barinas_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','5');
  $listado = $this->db->get();
    return $listado->result();
}
public function barinas_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','5');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function bolivar_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','6');
  $listado = $this->db->get();
    return $listado->result();
}
public function bolivar_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','6');
  $listado = $this->db->get();
    return $listado->result();
}
public function bolivar_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','6');
  $listado = $this->db->get();
    return $listado->result();
}
public function bolivar_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','6');
  $listado = $this->db->get();
    return $listado->result();
}
public function bolivar_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','6');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function carabobo_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','7');
  $listado = $this->db->get();
    return $listado->result();
}
public function carabobo_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','7');
  $listado = $this->db->get();
    return $listado->result();
}
public function carabobo_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','7');
  $listado = $this->db->get();
    return $listado->result();
}
public function carabobo_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','7');
  $listado = $this->db->get();
    return $listado->result();
}
public function carabobo_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','7');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function cojedes_emprede(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','8');
  $listado = $this->db->get();
    return $listado->result();
}
public function cojedes_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','8');
  $listado = $this->db->get();
    return $listado->result();
}
public function cojedes_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','8');
  $listado = $this->db->get();
    return $listado->result();
}
public function cojedes_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','8');
  $listado = $this->db->get();
    return $listado->result();
}
public function cojedes_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','8');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function delta_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','9');
  $listado = $this->db->get();
    return $listado->result();
}
public function delta_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','9');
  $listado = $this->db->get();
    return $listado->result();
}
public function delta_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','9');
  $listado = $this->db->get();
    return $listado->result();
}
public function delta_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','9');
  $listado = $this->db->get();
    return $listado->result();
}
public function delta_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','9');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function falcon_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','10');
  $listado = $this->db->get();
    return $listado->result();
}
public function falcon_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','10');
  $listado = $this->db->get();
    return $listado->result();
}
public function falcon_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','10');
  $listado = $this->db->get();
    return $listado->result();
}
public function falcon_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','10');
  $listado = $this->db->get();
    return $listado->result();
}
public function falcon_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','10');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function guarico_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','11');
  $listado = $this->db->get();
    return $listado->result();
}
public function guarico_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','11');
  $listado = $this->db->get();
    return $listado->result();
}
public function guarico_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','11');
  $listado = $this->db->get();
    return $listado->result();
}
public function guarico_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','11');
  $listado = $this->db->get();
    return $listado->result();
}
public function guarico_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','11');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function lara_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','12');
  $listado = $this->db->get();
    return $listado->result();
}
public function lara_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','12');
  $listado = $this->db->get();
    return $listado->result();
}
public function lara_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','12');
  $listado = $this->db->get();
    return $listado->result();
}
public function lara_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','12');
  $listado = $this->db->get();
    return $listado->result();
}
public function lara_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','12');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function merida_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','13');
  $listado = $this->db->get();
    return $listado->result();
}
public function merida_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','13');
  $listado = $this->db->get();
    return $listado->result();
}
public function merida_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','13');
  $listado = $this->db->get();
    return $listado->result();
}
public function merida_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','13');
  $listado = $this->db->get();
    return $listado->result();
}
public function merida_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','13');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function miranda_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','14');
  $listado = $this->db->get();
    return $listado->result();
}
public function miranda_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','14');
  $listado = $this->db->get();
    return $listado->result();
}
public function miranda_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','14');
  $listado = $this->db->get();
    return $listado->result();
}
public function miranda_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','14');
  $listado = $this->db->get();
    return $listado->result();
}
public function miranda_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','14');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function monagas_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','15');
  $listado = $this->db->get();
    return $listado->result();
}
public function monagas_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','15');
  $listado = $this->db->get();
    return $listado->result();
}
public function monagas_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','15');
  $listado = $this->db->get();
    return $listado->result();
}
public function monagas_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','15');
  $listado = $this->db->get();
    return $listado->result();
}
public function monagas_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','15');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function esparta_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','16');
  $listado = $this->db->get();
    return $listado->result();
}
public function esparta_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','16');
  $listado = $this->db->get();
    return $listado->result();
}
public function esparta_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','16');
  $listado = $this->db->get();
    return $listado->result();
}
public function esparta_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','16');
  $listado = $this->db->get();
    return $listado->result();
}
public function esparta_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','16');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function portuguesa_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','17');
  $listado = $this->db->get();
    return $listado->result();
}
public function portuguesa_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','17');
  $listado = $this->db->get();
    return $listado->result();
}
public function portuguesa_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','17');
  $listado = $this->db->get();
    return $listado->result();
}
public function portuguesa_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','17');
  $listado = $this->db->get();
    return $listado->result();
}
public function portuguesa_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','17');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function sucre_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','18');
  $listado = $this->db->get();
    return $listado->result();
}
public function sucre_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','18');
  $listado = $this->db->get();
    return $listado->result();
}
public function sucre_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','18');
  $listado = $this->db->get();
    return $listado->result();
}
public function sucre_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','18');
  $listado = $this->db->get();
    return $listado->result();
}
public function sucre_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','18 ');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function tachira_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','19');
  $listado = $this->db->get();
    return $listado->result();
}
public function tachira_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','19');
  $listado = $this->db->get();
    return $listado->result();
}
public function tachira_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','19');
  $listado = $this->db->get();
    return $listado->result();
}
public function tachira_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','19');
  $listado = $this->db->get();
    return $listado->result();
}
public function tachira_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','19 ');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function trujillo_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','20');
  $listado = $this->db->get();
    return $listado->result();
}
public function trujillo_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','20');
  $listado = $this->db->get();
    return $listado->result();
}
public function trujillo_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','20');
  $listado = $this->db->get();
    return $listado->result();
}
public function trujillo_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','20');
  $listado = $this->db->get();
    return $listado->result();
}
public function trujillo_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','20');
  $listado = $this->db->get();
    return $listado->result();
}/****************************************/
public function vargas_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','21');
  $listado = $this->db->get();
    return $listado->result();
}
public function vargas_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','21');
  $listado = $this->db->get();
    return $listado->result();
}
public function vargas_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','21');
  $listado = $this->db->get();
    return $listado->result();
}
public function vargas_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','21');
  $listado = $this->db->get();
    return $listado->result();
}
public function vargas_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','21');
  $listado = $this->db->get();
    return $listado->result();
}

/****************************************/
public function yaracuy_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','22');
  $listado = $this->db->get();
    return $listado->result();
}
public function yaracuy_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','22');
  $listado = $this->db->get();
    return $listado->result();
}
public function yaracuy_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','22');
  $listado = $this->db->get();
    return $listado->result();
}
public function yaracuy_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','22');
  $listado = $this->db->get();
    return $listado->result();
}
public function yaracuy_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','22');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function zulia_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','23');
  $listado = $this->db->get();
    return $listado->result();
}
public function zulia_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','23');
  $listado = $this->db->get();
    return $listado->result();
}
public function zulia_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','23');
  $listado = $this->db->get();
    return $listado->result();
}
public function zulia_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','23');
  $listado = $this->db->get();
    return $listado->result();
}
public function zulia_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','23');
  $listado = $this->db->get();
    return $listado->result();
}
/****************************************/
public function distrito_emprende(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('emprendimiento');
  $this->db->where('estado','24');
  $listado = $this->db->get();
    return $listado->result();
}
public function distrito_brigadas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('brigadas');
  $this->db->where('estado','24');
  $listado = $this->db->get();
    return $listado->result();
}
public function distrito_ingenio(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('ingenio');
  $this->db->where('estado','24');
  $listado = $this->db->get();
    return $listado->result();
}
public function distrito_asesorate(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('asesorate');
  $this->db->where('estado','24');
  $listado = $this->db->get();
    return $listado->result();
}
public function distrito_agro(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('agroproductivo');
  $this->db->where('estado','24');
  $listado = $this->db->get();
    return $listado->result();
}
}
?>
