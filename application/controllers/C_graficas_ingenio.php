<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_graficas_ingenio extends CI_Controller {

	  function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->Model('m_graficas_ingenio');  
             if ($this->session->userdata('login') ==FALSE) {
            redirect(base_url('index.php/c_login'));
            }
        }
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('layout/aside');
			//$contar    = $this->m_listado->listado_total();p_atomotriz_refrigeracion(
	        $tecnologico = $this->m_graficas_ingenio->p_tecnologico();
	        $industrial  = $this->m_graficas_ingenio->p_industrial();
	        $p_alimenticio  = $this->m_graficas_ingenio->p_alimenticio();
	        $administrativo = $this->m_graficas_ingenio->p_administrativo();
	        $p_atomotriz = $this->m_graficas_ingenio->p_atomotriz();
	        $p_electrico = $this->m_graficas_ingenio->p_electrico();
	        $p_refrigeracion = $this->m_graficas_ingenio->p_refrigeracion();
	        $p_petroquimico = $this->m_graficas_ingenio->p_petroquimico();
	        $p_hidraulica = $this->m_graficas_ingenio->p_hidraulica();
	    /************************************************************************/    
	        $genero_f  = $this->m_graficas_ingenio->genero_f();
	        $genero_m  = $this->m_graficas_ingenio->genero_m();	
	    /************************************************************************/    
	        $personal  = $this->m_graficas_ingenio->lista_personal();
	        $upf  = $this->m_graficas_ingenio->lista_upf();	
	        $eps  = $this->m_graficas_ingenio->lista_eps();
	        $coop = $this->m_graficas_ingenio->lista_coop();	
	        $ca   = $this->m_graficas_ingenio->lista_ca();
			//$listar = $this->m_jornadas->getPersonas();
			$this->load->view('v_graficas_ingenio',compact('p_hidraulica','p_petroquimico','p_refrigeracion','p_electrico','p_atomotriz','administrativo','p_alimenticio','tecnologico','industrial','personal','upf','eps','ca','coop','genero_f','genero_m'));
			$this->load->view('layout/footer');
		}

}
