<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CestadoMunParr extends CI_Controller {

	  function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->Model('EstadoMunParr');
          
        }

        public function index()
		{

        }
		public function estado()
		{
            
            $listado = $this->EstadoMunParr->get();
			
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode($listado));
		}

		public function municipio()
		{
            $id_estado= $this->input->get('id_estado');
            $listado = $this->EstadoMunParr->getMunicipio($id_estado);
			
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode($listado));;
		}

		
		public function parroquia()
		{
            $id_municipio= $this->input->get('id_parroquia');
            $listado = $this->EstadoMunParr-> getParroquia($id_municipio);
			
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode($listado));;
		}
}
