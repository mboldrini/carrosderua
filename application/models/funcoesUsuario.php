<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class FuncoesUsuario extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function infosDoUsuario($id){

		$this->db->where('idUsuario',$id);
		$query = $this->db->get('meuPerfil');

		if($query->num_rows() == 1){
			return $query->row();
		}else{
			$this->session->set_flashdata('perfilNaoExiste','O perfil desse usuário não existe!');
			//redirect(base_url().'login','refresh');
		}
	}




}