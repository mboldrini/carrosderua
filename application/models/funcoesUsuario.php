<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *	essa aqui é uma função padrão BASICA para TODOSS os usuários, então, manere e tenha bom uso!
 */
class FuncoesUsuario extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function infosDoUsuario($id){

		$this->db->where('idUsuario',$id);
		$query = $this->db->get('meuPerfil');

		/* se APENAS um registro estiver o que quer, retorna ele, (o row não precisa de colocar no controller, só aqui pra facilitar)
		*  e se der erro, retorna uma flashdata */
		if($query->num_rows() == 1){
			return $query->row();
		}else{
			$this->session->set_flashdata('perfilNaoExiste','O perfil desse usuário não existe!');
			//redirect(base_url().'login','refresh');
		}
		
	}




}