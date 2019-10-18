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
			$this->load->Model('MbuscarPorFecha');
			if(isset($_REQUEST['desde'] ) && isset($_REQUEST['hasta'] ) && isset($_REQUEST['id'] )){
				$desde=date("Y-m-d", strtotime($_REQUEST['desde'])); 
				$hasta=date("Y-m-d", strtotime($_REQUEST['hasta'])); 
				$listado =	$this->MbuscarPorFecha->listar($desde,$hasta,$_REQUEST['id']);
			}else{
				$listado = $this->m_asesorate->listar_asesorate();
			}
	
			
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
	

			
			$movimiento=$_POST['movimiento'];
			$espacio=$_POST['espacio'];
			$this->m_asesorate->updatePersona(array("nombre"=>$nombre,"apellido"=>$apellido,"sexo"=>
										$sexo,"f_nacimiento"=>$fecha_nac),$id);

			$this->m_asesorate->updateContacto(array("telefono"=>$telefono,"email"=>$email),$id);
		
			$this->m_asesorate->updateDireccion(array(
				"estado"=>$_POST['id_estado'],
				"municipio"=>$_POST['id_municipio'],
				"parroquia"=>$_POST['id_parroquia'],
				"nombre_localidad"=>$_POST['localidad'],
													"direccion_exacta"=>$_POST['direccion']),$id);
			$this->m_asesorate->updateEspacio(array("movimiento"=>$movimiento,
													"e_social"=>$espacio),$id);

		$this->m_asesorate->updateProfesion(array(
		"grado_instruccion"=>$_POST['grado'],"trabaja"=>$_POST['trabaja'],"profesion_oficio"=>$_POST['profesion']),$id);

		$this->m_asesorate->updatePlanes(['key_id_planes'=>$_POST['id_planes']],$id);

				
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode(array("response"=>"Datos guardados")));										

		}

		public function eliminar(){

			$this->m_asesorate->eliminar($_POST['id']);

							
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode(array("response"=>"Registro eliminado")));	
		}
}
