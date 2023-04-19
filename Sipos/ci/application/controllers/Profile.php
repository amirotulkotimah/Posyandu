<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Profile extends CI_Controller{ //membuat controller Profile
	function __construct(){
		parent:: __construct();
		$this->load->model('Profile_model');
		//untuk mengakses file model 'Profile_model'
		$this->load->library('imageuploader');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['base_url'] = site_url('Profile');
		$data['user'] = $this->db->get_where('data_pengguna',['email'=>$this->session->userdata('session_email')])->row_array();
		$this->template->views('Admin2/pages-profile',$data);
			//untuk mengakses file views 'Admin2/pages-profile' pada halaman template
	}
  public function edit_profile() {
		$data['user'] = $this->db->get_where('data_pengguna',['id_pengguna'=>$this->session->userdata('session_id_pengguna')])->row_array();

			$this->template->views('Admin2/edit-profile',$data);
	}
	public function update() {
		//$id_role = $this->input->post('id_role');
		
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$foto = $this->imageuploader->checkAndUploadImage($_FILES['foto'], './assets/upload/fotopengguna/');

		$data = array( //array data untuk menampung inputan data
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'foto' => '',
		);
		$fotolama = $this->input->post('fotolama');

		if ($_FILES['foto']['error'] === 4) {
			$data['foto'] = $fotolama;
		} else {
			$data['foto'] = $this->imageuploader->checkAndUploadImage($_FILES['foto'], $this->img_path);
			if (file_exists($this->img_path . $fotolama)) unlink($this->img_path . $fotolama);
		}

		// echo json_encode($data); die;

		$where = array(
			'email' => $email
		);
		$this->Profile_model->update_data($where,$data, 'data_pengguna');
		redirect('Profile');
	}
}
?>