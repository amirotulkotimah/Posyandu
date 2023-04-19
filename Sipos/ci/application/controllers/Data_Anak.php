<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Anak extends CI_Controller{ //membuat controller Data_Anak
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_Anak_model'); //untuk mengakses file model 'Data_Anak_model'
		$this->load->library('imageuploader'); //untuk mengakses file library 'imageuploader'
		 $this->load->helper('Usia'); //untuk mengakses file helper 'Usia'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['base_url'] = site_url('Data_Anak'); //merupakan alamat url 
		$this->load->model('Data_Anak_model'); //untuk mengakses file model 'Data_Anak_model'
		$data['user'] = $this->Data_Anak_model->getAll()->result(); //untuk memanggil function getAll pada file model 'Data_Anak_model' 
		$data['baru'] = $this->Data_Anak_model->data_terbaru()->result(); //untuk memanggil function data_terbaru pada file model 'Data_Anak_model' 
		$this->template->views('Admin2/pages-data-anak',$data);
			//untuk mengakses file views 'Admin2/pages-data-anak' pada halaman template
	}
	public function tambah_data() { //function untuk tambah data
		$this->load->model('Role_Anak_model'); //untuk mengakses file model 'Role_Anak_model'
		$this->load->model('Anak_model'); //untuk mengakses file model 'Anak_model'
		$data['role'] = $this->Role_Anak_model->getAll()->result(); //untuk memanggil function getAll pada file model 'Role_Anak_model' 
		$this->template->views('Admin2/form-add-data-anak', $data);
		//untuk mengakses file views 'Admin2/form-add-data-anak' pada halaman template
	}
	public function input_data() { //function input untuk memasukkan data ke database
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$anak_ke = $this->input->post('anak_ke');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		//$umur = $this->input->post('umur');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nama_ortu = $this->input->post('id_ortu');
		$alamat = $this->input->post('alamat');
		$status = $this->input->post('status');
		$foto_anak = $this->imageuploader->checkAndUploadImage($_FILES['foto_anak'], './assets/upload/fotoanak/');

		$data = array( //array data untuk menampung inputan data
			'nik' => $nik,
			'nama' => $nama,
			'anak_ke' => $anak_ke,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			//'umur' => $umur,
			'jenis_kelamin' => $jenis_kelamin,
			'nama_ortu' => $nama_ortu,
			'alamat' => $alamat,
			'status' => $status,
			'foto_anak' => $foto_anak
		);
		$this->Data_Anak_model->input_data($data, 'data_anak'); 
		//untuk mengakses file model 'Data_Anak_model' dan data tersimpan pada tabel data_anak
		redirect('Data_Anak');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}
	public function detail_data($id_anak) { //function detail_data untuk melihat detail data anak
		$id_anak = $id_anak; //berdasarkan id_anak
		$data['user'] = $this->Data_Anak_model->detail_data($id_anak, 'data_anak')->row_array();
		//untuk memanggil function detail_data pada file model Data_Anak_model berdasarkan id_anak dari tabel 'data_anak'
		$this->template->views('Admin2/view-data-anak', $data); 
		//untuk mengakses file views 'Admin2/view-data-anak' pada halaman template

	}
	public function edit_data($id_anak) { //function edit_data untuk menampilkan halaman edit data anak
		$this->load->model('Role_Anak_model'); //untuk mengakses file model 'Role_Anak_model'
		$this->load->model('Anak_model'); //untuk mengakses file model 'Anak_model'
		$data['role'] = $this->Role_Anak_model->getAll()->result(); //untuk memanggil function getAll pada file model 'Role_Anak_model' 
		$where = array('id_anak' => $id_anak); //berdasarkan id_anak
		$data['user'] = $this->Data_Anak_model->edit_data($where, 'data_anak')->row_array(); 
		//untuk mengakses function edit_data dari file model 'Data_Anak_model' 
		$this->template->views('Admin2/edit-data-anak', $data);
		//untuk mengakses file views 'Admin2/edit-data-anak' pada halaman template
	}
	public function update() { //function update untuk mengubah data anak
		$id_anak = $this->input->post('id_anak');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$anak_ke = $this->input->post('anak_ke');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$umur = $this->input->post('umur');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		//$nama_ortu = $this->input->post('nama_ortu');
		$alamat = $this->input->post('alamat');
		$foto_anak = $this->imageuploader->checkAndUploadImage($_FILES['foto_anak'], './assets/upload/fotoanak/');

		$data = array( //array data untuk menampung inputan data
			'nik' => $nik,
			'nama' => $nama,
			'anak_ke' => $anak_ke,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'umur' => $umur,
			'jenis_kelamin' => $jenis_kelamin,
			//'nama_ortu' => $nama_ortu,
			'alamat' => $alamat,
			'foto_anak' => '',
		);
		$fotolama = $this->input->post('fotolama');

		if ($_FILES['foto_anak']['error'] === 4) {
			$data['foto_anak'] = $fotolama;
		} else {
			$data['foto_anak'] = $this->imageuploader->checkAndUploadImage($_FILES['foto_anak'], $this->img_path);
			if (file_exists($this->img_path . $fotolama)) unlink($this->img_path . $fotolama);
		}

		// echo json_encode($data); die;

		$where = array(
			'id_anak' => $id_anak
		);
		$this->Data_Anak_model->update_data($where,$data, 'data_anak');
		//untuk mengakses function update_data dari file model 'Data_Anak_model' 
		redirect('Data_Anak');
		//setelah data berhasil diubah, halaman web otomatis beralih ke halaman pada function index
	}
	public function hapus($id_anak) { //function untuk hapus data anak
		$where = array('id_anak' => $id_anak); //berdasarkan id_anak
		$this->Data_Anak_model->hapus_data($where, 'data_anak');
		//untuk mengakses function hapus_data dari file model 'Data_Anak_model'
		redirect('Data_Anak'); //setelah data berhasil dihapus, halaman web otomatis beralih ke halaman pada function index
	}

	public function lihat_semua_data(){ //function untuk melihat semua data anak
		
		$data['user'] = $this->Data_Anak_model->lihat_semua()->result();
		//untuk mengakses function lihat_semua dari file model 'Data_Anak_model'
		$this->template->views('Admin2/view-semua-data-anak',$data);
		//untuk mengakses file views 'Admin2/view-semua-data-anak' pada halaman template
	}


}
?>