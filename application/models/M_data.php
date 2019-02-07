<?php 
 
class M_data extends CI_Model{	
	
	// All view
	function view_berita($table){
		$q = "SELECT * FROM $table ORDER By id_berita DESC";		
		return $this->db->query($q)->result();
	}
	function view_menu($table){
		$q = "SELECT * FROM $table ORDER By urutan DESC";		
		return $this->db->query($q)->result();
	}
	function view_menu_edit($table,$id){
		$q = "SELECT * FROM $table WHERE id_menu = '$id'";		
		return $this->db->query($q)->result();
	}
	function view_web($table){
		$q = "SELECT * FROM $table";		
		return $this->db->query($q)->result();
	}
	function view_web_edit($table,$id){
		$q = "SELECT * FROM $table WHERE id_web = '$id'";		
		return $this->db->query($q)->result();
	}
	function view_slide($table){
		$q = "SELECT * FROM $table";		
		return $this->db->query($q)->result();
	}

	// All Read
	function read_berita($table,$where){
		$q = "SELECT * FROM $table WHERE id_berita = '$where'";		
		return $this->db->query($q)->result();
	}
	function read_slide($table,$where){
		$q = "SELECT * FROM $table WHERE id_slide = '$where'";		
		return $this->db->query($q)->result();
	}

	// All add
	function add_berita($table,$data){
		$this->db->insert($table,$data);
	}
	function add_menu($table,$data){
		$this->db->insert($table,$data);
	}

	// All edit
	function edit_berita($table,$data,$where){
		$this->db->where('id_berita',$where);
      	$this->db->update($table,$data);
	}
	function edit_menu($table,$data,$where){
		$this->db->where('id_menu',$where);
      	$this->db->update($table,$data);
	}
	function edit_web($table,$data,$where){
		$this->db->where('id_web',$where);
      	$this->db->update($table,$data);
	}

	// All delete
	function hapus_berita($table,$where){
		$this->db->where('id_berita',$where);
      	$this->db->delete($table);
	}
	function hapus_menu($table,$id){
		$this->db->where('id_menu',$id);
      	$this->db->delete($table);
	}
}