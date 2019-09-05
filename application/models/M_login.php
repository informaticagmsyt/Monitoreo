<?php
class m_login extends CI_Model
{
    function _construct(){
        parent::__construct(); 
        $this->load->library('encryption');
    }
       public function ingresar($usuarios,$password){
        $this->db->query("SELECT '*'");
        $this->db->from("usuarios");
        $this->db->where("n_usuario= '$usuarios' AND password = '$password' AND key_estatus='1'");
        $resp = $this->db->get('');
        if ($resp->num_rows() ==1) {
            $r = $resp->row();
            $data = array(
                'id_usuario' => $r->id_usuarios,
                'n_usuario' => $r->n_usuario,
                'nombre' => $r->nombre.",".$r->apellido,
                'nivel_usuario' => $r->key_tipo_usuario,
                'login'=> TRUE);          
           $this->session->set_userdata($data);
            return 1;  
        }else {
          return 0;  
        }  
    }
}
?>