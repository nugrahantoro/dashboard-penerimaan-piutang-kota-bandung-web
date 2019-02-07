<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_data');
	}
	
	public function index(){
		$data['tampil'] = $this->m_data->view_menu("ref_menu");
		$this->load->view('panel_head');
		$this->load->view('panel_sidebar');
		$this->load->view('panel_menu',$data);
		$this->load->view('panel_foot');
	}

	public function aksi_tambah(){
		$t    	= $this->input;
		$id 	= $t->post('id_user');
		$menu 	= $t->post('nama_menu');
		$icon	= "menu-icon icon-tasks";
		$urutan = $t->post('urutan');
		$status = $t->post('status');
		$tgl	= date("Y-m-d");
		$pisah  = explode(" ", $menu);
		$data   = array(
			'id_user' 	=> $id,
			'nama_menu' => $menu,
			'url'		=> $pisah[0],
			'icon'		=> $icon,
			'urutan'	=> $urutan,
			'status'	=> $status,
			'created_at'=> $tgl
		);
		$this->m_data->add_menu("ref_menu",$data);
		echo " <script>alert('Menu berhasil ditambah!');history.go(-1);</script>";
	}

	public function edit($id){
		$data['tampil'] = $this->m_data->view_menu_edit("ref_menu",$id);
		$this->load->view('panel_head');
		$this->load->view('panel_sidebar');
		$this->load->view('panel_menu_edit',$data);
		$this->load->view('panel_foot');
	}

	public function aksi_edit(){
		$t 		= $this->input;
		$where 	= $t->post('id_user');
		$menu 	= $t->post('nama_menu');
		$urutan = $t->post('urutan');
		$status = $t->post('status');
		$data 	= array(
			'nama_menu' => $menu,
			'urutan'	=> $urutan,
			'status'	=> $status
		);
		$this->m_data->edit_menu("ref_menu",$data,$where);
		echo " <script>alert('Menu berhasil diedit!');history.go(-2);</script>";
	}

	public function aksi_hapus($id){
		$this->m_data->hapus_menu("ref_menu",$id);
		echo " <script>alert('Menu berhasil dihapus!');history.go(-1);</script>";
	}
}
