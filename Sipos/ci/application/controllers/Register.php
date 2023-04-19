<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Register extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Data_Pengguna_model');
	}

	public function index() {
		$this->load->view('Admin2/pages-register');
	}
	public function tambah_data() { //function input untuk memasukkan proses inputan data ke database
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array( //array data untuk menampung inputan data
			'nama' => $nama,
			'email' => $email,
			'username' => $username,
			'password' => $password
		);
		$this->Data_Pengguna_model->input_data($data, 'data_pengguna'); 
		//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
		redirect('Login');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}
}
?>