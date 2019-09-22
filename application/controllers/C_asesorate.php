<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_asesorate extends CI_Controller {

	  function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->Model('m_asesorate');
             if ($this->session->userdata('login') ==FALSE) {
            redirect(base_url('index.php/c_login'));
            }
        }
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('layout/aside');
			$listado = $this->m_asesorate->listar_asesorate();
			
			$this->load->view('v_asesorate',compact('listado'));
			$this->load->view('layout/footer');
		}

		public function asesorate()
		{
	
			$listado = $this->m_asesorate->listar_asesorate();
			
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode($listado));
		}

		public function guardar(){

			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$sexo=$_POST['sexo'];
			$fecha_nac=$_POST['fecha_nac'];
			$id=$_POST['id'];
			$telefono=$_POST['telefono'];
			$email=$_POST['email'];
			$localidad=$_POST['localidad'];
			$direccion=$_POST['direccion'];

			$movimiento=$_POST['movimiento'];
			$espacio=$_POST['espacio'];
			$this->m_asesorate->updatePersona(array("nombre"=>$nombre,"apellido"=>$apellido,"sexo"=>
										$sexo,"f_nacimiento"=>$fecha_nac),$id);

			$this->m_asesorate->updateContacto(array("telefono"=>$telefono,"email"=>$email),$id);
		
			$this->m_asesorate->updateDireccion(array("nombre_localidad"=>$localidad,
													"direccion_exacta"=>$direccion),$id);
			$this->m_asesorate->updateEspacio(array("movimiento"=>$movimiento,
													"e_social"=>$espacio),$id);

		$this->m_asesorate->updateProfesion(array(
		"grado_instruccion"=>$_POST['grado'],"trabaja"=>$_POST['trabaja'],"profesion_oficio"=>$_POST['profesion']),$id);


				
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode(array("response"=>"Datos guardados")));										

		}
}
