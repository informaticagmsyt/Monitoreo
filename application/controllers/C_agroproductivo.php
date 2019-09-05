<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_agroproductivo extends CI_Controller {

	  function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->Model('m_agro');
             if ($this->session->userdata('login') ==FALSE) {
            redirect(base_url('index.php/c_login'));
            }
      
        }
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('layout/aside');
		
			$listar = $this->m_agro->listar_agro();
			$this->load->view('v_agroproductivo',compact('listar'));
			$this->load->view('layout/footer');
		}
}
