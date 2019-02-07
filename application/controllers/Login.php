<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function act_login() {
		$this->sikp = $this->load->database('sikp',TRUE);
		$this->eis  = $this->load->database('eis',TRUE);
		$t 		      = $this->input;
		$username   = $t->post('username');
		$password   = $t->post('password');
		if(isset($_POST['username']) && isset($_POST['password'])){
				$user = $this->sikp->query("SELECT * FROM sikp.p_app_user WHERE app_user_name = '".$username."' ");
				if($user->num_rows()>0){
					$d_usr = $user->row_array();
					$pwd = str_replace(' ','',$d_usr['user_pwd']);
					if($pwd == md5($password)){
						$token = md5(sha1($username.date('ymdhis')));
						$ins['username'] = $username;
						$ins['token'] = $token;
						$ins['date_access'] = date('Y-m-d H:i:s');
						$sv = $this->eis->insert('log_user',$ins);
						$data_session = array(
							// 'id' 	=> $id,
							'nama' 	=> $username,
							'token' => $token,
							'status'=> "login"
						);
						$this->session->set_userdata($data_session);
						redirect(base_url("index.php/dashboard"));
					}
				}
				else{
					echo " <script>alert('Username dan password salah!');history.go(-1);</script>";
				}
		}
	}

	public function aksi_login(){
		$t 		  = $this->input;
		$username = $t->post('username');
		$password = $t->post('password');
		$where	  = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if ($cek>0) {
			$data =  $this->m_login->cek_login("user",$where)->result();
			foreach ($data as $val) {
				$id = $val->id_user;
			}
			$data_session = array(
				'id' 	=> $id,
				'nama' 	=> $username,
				'status'=> "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/dashboard"));
		}
		else{
			echo " <script>alert('Username dan password salah!');history.go(-1);</script>";
			//echo "Username dan password salah !";
		}
	}

	public function aksi_logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
}
