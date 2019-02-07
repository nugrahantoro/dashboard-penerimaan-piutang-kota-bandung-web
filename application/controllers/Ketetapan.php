<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketetapan extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		};
	}

	public function index(){
		$this->load->view('panel_head');
		$this->load->view('panel_sidebar');
		$this->load->view('panel_ketetapan');
		$this->load->view('panel_foot');
	}
}
