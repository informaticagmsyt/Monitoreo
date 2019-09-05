<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_asesorate extends CI_Controller {

	  function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->Model('m_asesorate');

        }
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$listar = $this->m_asesorate->listado_amazonas();
			$this->load->view('v_asesorate',compact('listar'));
			$this->load->view('layout/footer');
		}
}
