<?php
class m_estados extends CI_Model
{
    function _construct(){
        parent::__construct();  
    }   
 public function estados(){
        return  $this->db->query("SELECT * FROM estados")->result();
 
    } 
   
}
?>