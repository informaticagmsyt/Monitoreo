<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_editar_usuario extends CI_Controller
{
        function __construct(){
            parent::__construct();
            $this->load->Model('m_usuario'); 
            $this->load->Model('m_listado'); 
            $this->load->library('encryption'); 
             if ($this->session->userdata('login') ==FALSE) {
            redirect(base_url('index.php/c_login'));
            }
        }
    public function edit_usuario($id){ 
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/aside');
        $respuesta = $this->m_usuario->get_usuario($id);
        $contar = $this->m_listado->listado_tipo_usuario();
        $estatus = $this->m_listado->listado_estatus();
        $this->load->view('v_edit_usuario', compact('respuesta','contar','estatus'));
        $this->load->view('layout/footer_2'); 
    } 
    public function editar(){
        $param['nombre']   = $this->input->post('nombre');
        $param['apellido'] = $this->input->post('apellido');
        $param['tipo_usuario']  = $this->input->post('tipo_usuario');
        $param['n_usuario'] = $this->input->post('n_usuario');       
        $param['estatus_usuario'] = $this->input->post('estatus_usuario');
        $param['password'] = $this->input->post('password');

        $id= $this->input->post('id_usuarios');

        $campos = array(
            'nombre' => $param['nombre'],  
            'apellido' => $param['apellido'],
            'key_tipo_usuario'=> $param['tipo_usuario'],
            'n_usuario'=>$param['n_usuario'],
            'password'=>md5($param['password']),
            'key_estatus'=>$param['estatus_usuario']  
        );
        $this->m_usuario->editar_usuario($id,$campos);
    }
}
?>