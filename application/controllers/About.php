<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['title']="About";
		$data['menu']="about";
		$this->load->view('layout/header', $data);
		$this->load->view('about');
		$this->load->view('layout/footer');
	}
}
