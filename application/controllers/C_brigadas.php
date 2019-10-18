<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_brigadas extends CI_Controller {

	  function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->Model('m_brigadas');
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
				$listado = $this->m_brigadas->listar_brigadas();
			}
	
	
			$this->load->view('v_brigadas',compact('listado'));
			$this->load->view('layout/footer');
		}

		public function brigadas()
		{
	
			$listar = $this->m_brigadas->listar_brigadas();
			
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode($listar));
		}
}
