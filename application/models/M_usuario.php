<?php
class M_usuario extends CI_Model
{
    function _construct(){
        parent::__construct(); 
        $this->load->library('encryption');
    }   
 public function listar_usuario(){
  $this->db->select("usuarios.id_usuarios,usuarios.nombre, 
  usuarios.apellido, 
  usuarios.password, 
  usuarios.n_usuario, 
  estatus.estatus, 
  tipo_usuario.tipo");
  $this->db->from('public.usuarios, 
  public.estatus, 
  public.tipo_usuario');
  $this->db->where("usuarios.key_estatus = estatus.id_estatus AND
  tipo_usuario.id_tipo_usuario = usuarios.key_tipo_usuario");
  $aragua = $this->db->get();
    return $aragua->result();
 }
/*****************************************************************************************************/
    public function registrar($param){
        $campos = array(
            'nombre'   => $param['nombre'],  
            'apellido' => $param['apellido'],
            'n_usuario'=> $param['n_usuario'],
            'key_tipo_usuario'=>$param['tipo_usuario'],
            'password'   => $param['password'],
            'key_estatus' => 1   
        );
        $insert= $this->db->insert('usuarios',$campos);
                if (!$insert) {
                    echo ' <script>  
                            alert("Erro al Registar Usuario");
                            document.location.href = "'.base_url().'"; 
                        </script>';
                } else {
                    echo ' <script>  
                            alert("Usuario Registrado con Exito");
                            document.location.href = "'.base_url('index.php/C_usuario').'"; 
                            </script>';
                }
     }
     public function get_usuario($id){
        $this->db->select("*");
        $this->db->from('public.tipo_usuario, 
              public.estatus, 
              public.usuarios');
        $this->db->where("tipo_usuario.id_tipo_usuario = usuarios.key_tipo_usuario AND
              estatus.id_estatus = usuarios.key_estatus AND usuarios.id_usuarios='$id' ");
        $resp = $this->db->get();
        return $resp->result();
     }
     public function editar_usuario($id,$campos){
        $this->db->where('id_usuarios',$id);
        $sql= $this->db->update('usuarios',$campos);
           if ($sql) {
               echo '<script>  
                        alert("Usuario a sido editado con Exito");
                        document.location.href = "'.base_url('index.php/c_usuario').'"; 
                    </script>';
           } 
        }
}
?>