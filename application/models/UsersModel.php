<?php
class usersModel extends CI_model{

	public function __construct(){
		$this->load->database();
	}

	public function registro($nombres,$apellido_paterno,$apellido_materno,$tipo_documento,$numero_documento,$nacionalidad,$contraseña){
		$fecha_registro = date('Y-m-d H:i');
		return $this->db->insert("users",['nombres'=>$nombres,'apellido_paterno'=>$apellido_paterno,'apellido_materno'=>$apellido_materno,'tipo_documento'=>$tipo_documento,'numero_documento'=>$numero_documento,'nacionalidad'=>$nacionalidad,'contraseña'=>$contraseña,'fecha_registro'=>$fecha_registro]);
	}

	public function consultar_usuarios(){
		$consulta = $this->db->get('users');
		$resultado = $consulta->result();
		return $resultado;
	}

	public function consulta_login($user,$contraseña){
		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('numero_documento',$user);
		$this->db->where('contraseña',$contraseña);
		$consulta = $this->db->get();
		$resultado = $consulta->result();
		return $resultado;
	}

}
?>