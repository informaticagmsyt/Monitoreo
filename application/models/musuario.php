<?php
class m_usuario extends CI_Model
{
    function _construct(){
        parent::__construct();  
    }   
    
    
    public function insertar(){


    }/*
    public function guardar($param){
  
        $campos = array(
            'nombre_usuario' => $param['nombre_usuario'],  
            'contraseña' => $param['contraseña'],
            'nivel_usuario'=> $param['nivel_usuario'],
            'estatus_usuario'=>$param['estatus_usuario']
          
        );

         $insert =  $this->db->insert('usuarios',$campos);
            if ($insert) {
                echo ' <script>  
                alert("Error al Registrar Usuario");
                    document.location.href = "'.base_url().'"; 
                </script>';
            }else {
                echo ' <script>  
                        alert("Usuario Registrado con Exito");
                            document.location.href = "'.base_url().'"; 
                    </script>';
            }
       
     }*/
}
?>