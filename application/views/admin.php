<?php 

	$this ->load-> view('base/header-admin');
	$this->load->view('base/sidebar-admin');


	if($tela != ''){
		 $this -> load -> view('admin/'.$tela);
	}


	$this->load->view('base/footer');