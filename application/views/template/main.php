<?php 
	$this->load->view('template/header');
	$this->load->view('template/navbar');
	$this->load->view('template/sidebar');
	$this->load->view($content);
	$this->load->view('template/footer');


?>