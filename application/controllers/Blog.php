<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
	}

	function _remap($slug) {
		$this->index($slug);
	}

	public function index($slug='')
	{
		$data['menu']="blog";
		if($slug=="7-cara-mudah-mencegah-radiasi-ponsel-yang-berbahaya") {
			$data['title']="7 Cara Mudah Mencegah Radiasi Ponsel yang Berbahaya";
			$this->load->view('layout/header', $data);
			$this->load->view('blog/blog-detail-1');
			$this->load->view('layout/footer');
		} else if ($slug=="penjelasan-tentang-routing-lengkap") {
			$data['title']="Penjelasan Tentang Routing Lengkap";
			$this->load->view('layout/header', $data);
			$this->load->view('blog/blog-detail-2');
			$this->load->view('layout/footer');
		} else {
			$data['title']="Blog";
			$this->load->view('layout/header', $data);
			$this->load->view('blog/blog', $data);
			$this->load->view('layout/footer');
		}
	}


}
