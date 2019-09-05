<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_usuario extends CI_Controller {

	  function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->Model('m_usuario');
            $this->load->library('encryption');
             if ($this->session->userdata('login') ==FALSE) {
            redirect(base_url('index.php/c_login'));
            }
             if ($this->session->userdata('nivel_usuario') =='1') {
            redirect(base_url('index.php/c_login'));
            }
        }
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('layout/aside');
			$listar = $this->m_usuario->listar_usuario();
			$this->load->view('v_usuario',compact('listar'));
			$this->load->view('layout/footer');
		}
		public function edit_usuario($id){ 
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
       // $resp = $this->m_usuario->get_usuario($id);
        //$this->load->view('v_edit_usuario', compact('resp'));
        $this->load->view('layout/footer'); 
    } 
}
