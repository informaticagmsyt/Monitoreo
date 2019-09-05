<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_crear_usuario extends CI_Controller {

	  function __construct(){
            parent::__construct();
            $this->load->database();  

            $this->load->Model('m_usuario');
            $this->load->Model('m_listado');
             if ($this->session->userdata('login') ==FALSE) {
            redirect(base_url('index.php/c_login'));
            }
        }
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('layout/aside');
			$listar = $this->m_listado->listado_tipo_usuario();
			$this->load->view('v_crear_usuario',compact('listar'));
			$this->load->view('layout/footer_2');
		}
		public function registar(){
			$param['nombre']       = $this->input->post('nombre');
			$param['apellido']     = $this->input->post('apellido');
			$param['tipo_usuario'] = $this->input->post('tipo_usuario');
			$param['n_usuario']    = $this->input->post('n_usuario');
			$param['password']     = $this->input->post('password');
		    $this->m_usuario->registrar($param);
		}
}

	