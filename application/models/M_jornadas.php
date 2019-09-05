<?php
class m_jornadas  extends CI_Model
{
    function _construct(){
        parent::__construct();  
    }
  public function getPersonas(){
    $this->db->select('*');
    $this->db->from('personas');
    $query = $this->db->get();
    return $query->result();
  }
  public function genero_f(){
  $this->db->query("SELECT count ('sexo')");
  $this->db->from('personas');
  $this->db->where("sexo='F'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function genero_m(){
  $this->db->query("SELECT count ('sexo')");
  $this->db->from('personas');
  $this->db->where("sexo='M'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
}
?>
