<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
	}
	
	public function index(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');

		$data = array(
			'titulo' => 'Empresa - Painel',
			'ondeesta' => 'Painel',
			'descricao' => 'Você está no painel Principal!',
			'tela' => 'painel-admin'

		);

		$this->load->view('admin',$data);


	}



}