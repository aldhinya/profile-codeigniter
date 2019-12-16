<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title']="Home";
		$data['menu']="home";
		$this->load->view('layout/header', $data);
		$this->load->view('home');
		$this->load->view('layout/footer');
	}
}
