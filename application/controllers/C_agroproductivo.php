<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_agroproductivo extends CI_Controller {

	  function __construct(){
            parent::__construct();
            $this->load->database();
			$this->load->Model('m_agro');
			$this->load->Model('MbuscarPorFecha');
             if ($this->session->userdata('login') ==FALSE) {
            redirect(base_url('index.php/c_login'));
            }
      
        }
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('layout/aside');
		
			if(isset($_REQUEST['desde'] ) && isset($_REQUEST['hasta'] ) && isset($_REQUEST['id'] )){
				$desde=date("Y-m-d", strtotime($_REQUEST['desde'])); 
				$hasta=date("Y-m-d", strtotime($_REQUEST['hasta'])); 
				$listado =	$this->MbuscarPorFecha->listar($desde,$hasta,$_REQUEST['id']);
			}else{
				$listado = $this->m_agro->listar_agro();
			}
			
			$lista=$listado;
			$this->load->view('v_agroproductivo',compact('listado','listar'));
			$this->load->view('layout/footer');
		}

		public function agro()
		{
	
			$listado = $this->m_agro->listar_agro();
			
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode($listado));
		}

		
		public function editar()
		{
			$id = $this->uri->segment(3);
			$listado = $this->m_agro->buscar($id);
		
			$lista=$listado;
			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('layout/aside');
	
		 
			
			$this->load->view('editar',compact('listado'));
			$this->load->view('layout/footer');
		}

			
		public function getPlanes()
		{
			$listado = $this->m_agro->getPlanes();
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode($listado));
		}

		
}
