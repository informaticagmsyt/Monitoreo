<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	  function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->Model('m_login');
            
            
        }
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('v_login');
			$this->load->view('layout/footer');
		}
		 public function ingresar(){
			$usuario= $this->input->post('login');
			$password= $this->input->post('password'); 
			$resp = $this->m_login->ingresar($usuario,$password);
			if ($resp ==1) {
				//$this->load->view('v_jornadas');
			redirect(base_url('index.php/c_jornadas'));
			}else{
				echo '<script>  
                         alert("Error de Autentificacion Verifique Usuario y Contraseña de Intente de Nuevo");
                        document.location.href = "'.base_url('index.php/c_login').'"; 
                    </script>';
				//redirect(base_url('index.php/c_login'));
			}
	}
		public function salir(){
		$q =$this->session->sess_destroy();
			redirect(base_url());
	}

}
