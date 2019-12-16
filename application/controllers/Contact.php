<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['title']="Contact";
		$data['menu']="contact";
		$this->load->view('layout/header', $data);
		$this->load->view('contact');
		$this->load->view('layout/footer');
	}
}
