<?php 
	$this->load->view('admin/template/header');
	$this->load->view('admin/template/navbar');
	$this->load->view('admin/template/sidebar');
	$this->load->view($content);
	$this->load->view('admin/template/footer');


?>