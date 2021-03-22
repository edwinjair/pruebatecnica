<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	private $listapaises = array(
      array('id' => 0, 'nombre' => 'Perú'),
      array('id' => 1, 'nombre' => 'Chile'),
      array('id' => 2, 'nombre' => 'Estados Unidos'),
      array('id' => 3, 'nombre' => 'México'),
      array('id' => 4, 'nombre' => 'Colombia'),
      array('id' => 5, 'nombre' => 'Brasil'),
      array('id' => 6, 'nombre' => 'Ecuador'),
      array('id' => 7, 'nombre' => 'Bolivia')
   );

	private $listaTipo = array(
      array('id' => 0, 'nombre' => 'DNI'),
      array('id' => 1, 'nombre' => 'Carné Ext.'),
      array('id' => 2, 'nombre' => 'RUC'),
      array('id' => 3, 'nombre' => 'Pasaporte')
   );

	public function __construct(){
		parent::__construct();
		$this->load->model("usersModel");
		$this->load->helper(['form','url']);
	}

	public function index()
	{
		$consulta = $this->usersModel->consultar_usuarios();
		$data['consulta'] = $consulta;

		$this->load->helper('url');
		$this->load->view('users/index',$data);
	}

	public function registrar(){
		$nacionalidad = $this->listapaises[$this->input->post('nacionalidad')]['nombre'];
		$tipo_documento = $this->listaTipo[$this->input->post('tipo_documento')]['nombre'];
		$numero_documento = $this->input->post('numero_documento');
		$nombres = $this->input->post('nombres');
		$apellido_paterno = $this->input->post('apellido_paterno');
		$apellido_materno = $this->input->post('apellido_materno');
		$contraseña = $this->input->post('contraseña');

		$this->usersModel->registro($nombres,$apellido_paterno,$apellido_materno,$tipo_documento,$numero_documento,$nacionalidad,$contraseña);

		redirect('registro');
	}

	public function login(){
		$user = $this->input->post('user');
		$password = $this->input->post('password');
		$login = $this->usersModel->consulta_login($user,$password);
		if(!empty($login)){
			echo "usuario correcto";
		}else {
			echo "usuario no existe";

		}
	}
}