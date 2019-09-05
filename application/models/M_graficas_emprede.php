<?php
class m_graficas_emprende extends CI_Model
{
    function _construct(){
        parent::__construct();  
    }
/*********************************************************Grafica Genero******************************************************************/    
      public function genero_f(){
  $this->db->query("SELECT count ('*')");
  $this->db->from('public.personas, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='5' AND  personas.sexo='F'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function genero_m(){
  $this->db->query("SELECT count ('*')");
  $this->db->from('public.personas, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='5' AND  personas.sexo='M'");
  $aragua = $this->db->get();
    return $aragua->result();
 }   
/************************************************************Graficas tipos de Proyectos *************************************************/
public function p_industrial(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from('  public.proyecto, public.planes_personas');
      $this->db->where("planes_personas.key_id_personas = proyecto.id_proyecto_personas AND planes_personas.key_id_planes='5' AND proyecto.t_proyecto='INDUSTRIAL'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
public function p_tecnologico(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from('  public.proyecto, public.planes_personas');
      $this->db->where("planes_personas.key_id_personas = proyecto.id_proyecto_personas AND planes_personas.key_id_planes='5' AND proyecto.t_proyecto='TECNOLOGICO'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
 public function p_alimenticio(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from('  public.proyecto, public.planes_personas');
      $this->db->where("planes_personas.key_id_personas = proyecto.id_proyecto_personas AND planes_personas.key_id_planes='5' AND proyecto.t_proyecto='ALIMENTICIO'");
        $aragua = $this->db->get();
        return $aragua->result();//"ADMISNISTRATIVA "AUTOMOTRIZ""
 }
  public function p_administrativo(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from('  public.proyecto, public.planes_personas');
      $this->db->where("planes_personas.key_id_personas = proyecto.id_proyecto_personas AND planes_personas.key_id_planes='5' AND proyecto.t_proyecto='ADMISNISTRATIVA'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
 public function p_atomotriz(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from('  public.proyecto, public.planes_personas');
      $this->db->where("planes_personas.key_id_personas = proyecto.id_proyecto_personas AND planes_personas.key_id_planes='5' AND proyecto.t_proyecto='AUTOMOTRIZ'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
 public function p_electrico(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.proyecto, public.planes_personas');
      $this->db->where("planes_personas.key_id_personas = proyecto.id_proyecto_personas AND planes_personas.key_id_planes='5' AND proyecto.t_proyecto='ELECTRICO'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
 public function p_refrigeracion(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.proyecto, public.planes_personas');
      $this->db->where("planes_personas.key_id_personas = proyecto.id_proyecto_personas AND planes_personas.key_id_planes='5' AND proyecto.t_proyecto='REFRIGERACION'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
 public function p_petroquimico(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.proyecto, public.planes_personas');
      $this->db->where("planes_personas.key_id_personas = proyecto.id_proyecto_personas AND planes_personas.key_id_planes='5' AND proyecto.t_proyecto='PETROQUIMICO'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
 public function p_hidraulica(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.proyecto, public.planes_personas');
      $this->db->where("planes_personas.key_id_personas = proyecto.id_proyecto_personas AND planes_personas.key_id_planes='5' AND proyecto.t_proyecto='HIDRAULICO'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
/*******************************************************************************************************************************************/
public function lista_personal(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from(' public.planes_personas, public.figura_juridica');
      $this->db->where("planes_personas.key_id_personas = figura_juridica.id_persona_figura AND figura_juridica.r_social = 'PERSONAL' AND planes_personas.key_id_planes='5'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
 public function lista_upf(){
  $this->db->query("SELECT COUNT ('*')");
      $this->db->from(' public.planes_personas, public.figura_juridica');
      $this->db->where("planes_personas.key_id_personas = figura_juridica.id_persona_figura AND figura_juridica.r_social = 'UPF' AND planes_personas.key_id_planes='5'");
        $aragua = $this->db->get();
        return $aragua->result();
  $aragua = $this->db->get();
    return $aragua->result();
 }
public function lista_eps(){
  $this->db->query("SELECT COUNT ('*')");
      $this->db->from(' public.planes_personas, public.figura_juridica');
      $this->db->where("planes_personas.key_id_personas = figura_juridica.id_persona_figura AND figura_juridica.r_social = 'EPS' AND planes_personas.key_id_planes='5'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
 public function lista_coop(){
  $this->db->query("SELECT COUNT ('*')");
      $this->db->from(' public.planes_personas, public.figura_juridica');
      $this->db->where("planes_personas.key_id_personas = figura_juridica.id_persona_figura AND figura_juridica.r_social = 'COOPERATIVA' AND planes_personas.key_id_planes='5'");
        $aragua = $this->db->get();
        return $aragua->result();
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function lista_ca(){
  $this->db->query("SELECT COUNT ('*')");
      $this->db->from(' public.planes_personas, public.figura_juridica');
      $this->db->where("planes_personas.key_id_personas = figura_juridica.id_persona_figura AND figura_juridica.r_social = 'COMPAÑIA ANONIMA' AND planes_personas.key_id_planes='5'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
  public function lista_tecnologico(){
  $this->db->query("SELECT COUNT ('*')");
      $this->db->from(' public.planes_personas, public.figura_juridica');
      $this->db->where("planes_personas.key_id_personas = figura_juridica.id_persona_figura AND figura_juridica.r_social = 'COMPAÑIA ANONIMA' AND planes_personas.key_id_planes='5'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
}
?>
