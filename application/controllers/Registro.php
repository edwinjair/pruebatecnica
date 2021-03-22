<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

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



	public function index()
	{
		$data = array();
		$data['nacionalidades'] = $this->listapaises;
		$data['tipo_documentos'] = $this->listaTipo;
		$this->load->helper('url');
		$this->load->view('registro',$data);
	}
}