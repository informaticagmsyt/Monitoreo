<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_registro_agro extends CI_Controller {

	  function __construct(){
            parent::__construct();
            $this->load->database();  

            $this->load->Model('m_agro');
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
			$stado = $this->m_listado->get_estados();
			$listar = $this->m_listado->listado_tipo_usuario();
			$this->load->view('v_registro_agro',compact('listar','stado'));
			$this->load->view('layout/footer_2');
		}
		public function registar(){
			/*Datos que van a la tabla personas*/
			$param['cedula']       = $this->input->post('cedula');
			$param['apellido']     = $this->input->post('apellido');
			$param['nombre']       = $this->input->post('nombre');
			$param['sexo']         = $this->input->post('sexo');
			$param['f_nacimiento'] = $this->input->post('f_nacimiento');
			/*Datos que van a la tabla contacto*/
			$param_1['tlf']   = $this->input->post('tlf');
			$param_1['email'] = $this->input->post('email');
		    $this->m_agro->registrar($param,$param_1);
		}
}

	