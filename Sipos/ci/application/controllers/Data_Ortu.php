<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Ortu extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_Ortu_model');
		//untuk mengakses file model 'Data_Ortu_model'
		$this->load->library('imageuploader');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['base_url'] = site_url('Data_Ortu'); //untuk mengakses url Data_Ortu
		$data['user'] = $this->Data_Ortu_model->getAll()->result(); //untuk memanggil model Data_Ortu_model dengan function getAll
		$this->template->views('Admin2/pages-data-ortu',$data); //untuk mengakses file views 'Admin2/pages-data-ortu' pada halaman template
	}
	public function tambah_data() { //function untuk tambah data
		$this->load->model('Data_Ortu_model'); //untuk mengakses file model Data_Ortu_model
		$this->template->views('Admin2/form-add-data-ortu'); //untuk mengakses file views 'Admin2/form-add-data-ortu' pada halaman template
	}
	public function input_data() { //function input untuk memasukkan proses inputan data ke database
		$nik = $this->input->post('nik_ortu');
		$nama_ortu = $this->input->post('nama_ortu');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat = $this->input->post('alamat_ortu');
		$no_hp = $this->input->post('no_hp');
		$foto = $this->imageuploader->checkAndUploadImage($_FILES['foto'], './assets/upload/fotopengguna/');

		$data = array( //array data untuk menampung inputan data
			'nik_ortu' => $nik,
			'nama_ortu' => $nama_ortu,
			'pekerjaan' => $pekerjaan,
			'alamat_ortu' => $alamat,
			'no_hp' => $no_hp,
			'foto' => $foto
		);
		$this->Data_Ortu_model->input_data($data, 'data_ortu'); 
		//untuk mengakses file model 'Data_Ortu_model' dan data tersimpan pada tabel data_ortu
		redirect('Data_Ortu');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}
	public function detail_data($id_ortu) { //function detail_data untuk menampilkan detail data orang tua
		$id_ortu = $id_ortu;
		$data['user'] = $this->Data_Ortu_model->detail_data($id_ortu, 'data_ortu')->row_array();
		$this->template->views('Admin2/view-data-ortu', $data);

	}

	public function edit_data($id_ortu) { //function edit_data untuk menampilkan halaman edit data orang tua
		$where = array('id_ortu' => $id_ortu);
		$data['user'] = $this->Data_Ortu_model->edit_data($where, 'data_ortu')->row_array();
		$this->template->views('Admin2/edit-data-ortu', $data);
	}
	public function update() { //function update berfungsi untuk mengubah data
		$id_ortu = $this->input->post('id_ortu');
		$nik = $this->input->post('nik_ortu');
		$nama_ortu = $this->input->post('nama_ortu');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat = $this->input->post('alamat_ortu');
		$no_hp = $this->input->post('no_hp');
		$foto = $this->imageuploader->checkAndUploadImage($_FILES['foto'], './assets/upload/fotopengguna/');

		$data = array( //array data untuk menampung inputan data
			'nik_ortu' => $nik,
			'nama_ortu' => $nama_ortu,
			'pekerjaan' => $pekerjaan,
			'alamat_ortu' => $alamat,
			'no_hp' => $no_hp,
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
			'id_ortu' => $id_ortu
		);
		$this->Data_Ortu_model->update_data($where,$data, 'data_ortu'); //untuk mengubah data pada database dan pada tabel 'data_ortu'
		redirect('Data_Ortu'); //setelah data berhasil diubah, halaman web otomatis beralih ke halaman pada function index
	}
	public function hapus_data($id_ortu) { //function hapus_data untuk menghapus data orang tua
		$where = array('id_ortu' => $id_ortu); //menghapus data berdasarkan id_ortu
		$this->Data_Ortu_model->hapus_data($where, 'data_ortu'); //menghapus data pada tabel data_ortu
		redirect('Data_Ortu'); //setelah data berhasil diubah, halaman web otomatis beralih ke halaman pada function index
	}
}

?>