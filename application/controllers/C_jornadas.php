<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_jornadas extends CI_Controller {

	  function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->Model('m_jornadas');
            $this->load->Model('m_asesorate');
            $this->load->Model('m_listado');
            $this->load->Model('m_agro');
            $this->load->Model('m_brigadas');
            $this->load->Model('m_ingenio');
            $this->load->Model('m_emprende');
            if ($this->session->userdata('login') ==FALSE) {
            redirect(base_url('index.php/c_login'));
            }
        }
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('layout/aside');
			//$contar    = $this->m_listado->listado_total();
	        $agro      = $this->m_listado->listado_agro();
	        $asesorate = $this->m_listado->listado_asesorate();	
	        $brigadas  = $this->m_listado->listado_brigadas();
	        $emprende  = $this->m_listado->listado_emprende();
	        $ingenio   = $this->m_listado->listado_ingenio();
	        $genero_f   = $this->m_jornadas->genero_f();
	        $genero_m   = $this->m_jornadas->genero_m();	
			//$listar = $this->m_jornadas->getPersonas();
			$this->load->view('v_jornadas',compact('agro','asesorate','brigadas','emprende','ingenio','genero_f','genero_m'));
			$this->load->view('layout/footer');
		}

}
