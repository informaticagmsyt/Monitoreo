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
			$listar = $this->m_asesorate->listar_asesorate();
			$this->load->view('v_asesorate',compact('listar'));
			$this->load->view('layout/footer');
		}
}
