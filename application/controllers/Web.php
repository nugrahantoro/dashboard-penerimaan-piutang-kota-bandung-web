<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_data');
	}
	
	public function index(){
		$data['tampil'] = $this->m_data->view_web("ref_web");
		$this->load->view('panel_head');
		$this->load->view('panel_sidebar');
		$this->load->view('panel_web',$data);
		$this->load->view('panel_foot');
	}

	public function edit($id){
		$data['tampil'] = $this->m_data->view_web_edit("ref_web",$id);
		$this->load->view('panel_head');
		$this->load->view('panel_sidebar');
		$this->load->view('panel_web_edit',$data);
		$this->load->view('panel_foot');
	}

	public function aksi_edit(){
		$t 		= $this->input;
		$where  = $t->post('id_web');
		$web 	= $t->post('nama_web');
		$email	= $t->post('email');
		$telp	= $t->post('telp');
		$alamat = $t->post('alamat');
		$data 	= array(
			'nama_web'  => $web,
			'email'		=> $email,
			'telp'		=> $telp,
			'alamat'	=> $alamat
		);
		$this->m_data->edit_web("ref_web",$data,$where);
		echo " <script>alert('Web berhasil diedit!');history.go(-2);</script>";
	}
}
