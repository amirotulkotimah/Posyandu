<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Data_Pengguna_model');
	}

	public function index() {
		$this->load->view('Admin2/pages-login');
	}

	public function cek_log() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->Data_Pengguna_model->login($username, $password,'data_pengguna')->result();
		if($cek != FALSE) {
			foreach ($cek as $row) {
				$username = $row->username;
				$foto = $row->foto;
				$nama = $row->nama;
				$email = $row->email;
				$password = $row->password;
				$id_pengguna = $row->id_pengguna;
				
			}
			$this->session->set_userdata('session_username', $username);
			$this->session->set_userdata('session_foto', $foto);
			$this->session->set_userdata('session_nama', $nama);
			$this->session->set_userdata('session_email', $email);
			$this->session->set_userdata('session_password', $password);
			$this->session->set_userdata('session_id_pengguna', $id_pengguna);
			$this->session->set_userdata('session_id_role', $id_role);
			redirect('Dashboard');
		} else {
			$this->load->view('Admin2/pages-login');
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}
?>