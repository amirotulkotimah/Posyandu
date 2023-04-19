<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Petugas extends CI_Controller{ //membuat controller Data_Petugas
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_Petugas_model');
		//untuk mengakses file model 'Data_Petugas_model'
		$this->load->library('imageuploader');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['base_url'] = site_url('Data_Petugas'); //merupakan alamat url 
		$data['user'] = $this->Data_Petugas_model->getAll()->result(); //untuk mengakses function getAll dari file model 'Data_Petugas_model'
		$this->template->views('Admin2/pages-data-petugas',$data);
			//untuk mengakses file views 'Admin2/pages-data-petugas' pada halaman template
	}
	public function tambah_data() { //function untuk tambah data
		$this->load->model('Data_Petugas_model'); //untuk mengakses file model 'Data_Petugas_model'
		$this->template->views('Admin2/form-add-data-petugas');
		//untuk mengakses file views 'Admin2/form-add-data-petugas' pada halaman template
	}
	public function input_data() { //function input untuk memasukkan data ke dalam database
		$nik = $this->input->post('nik');
		$nama_petugas = $this->input->post('nama_petugas');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$foto = $this->imageuploader->checkAndUploadImage($_FILES['foto'], './assets/upload/fotopengguna/');

		$data = array( //array data untuk menampung inputan data
			'nik' => $nik,
			'nama_petugas' => $nama_petugas,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'foto' => $foto
		);
		$this->Data_Petugas_model->input_data($data, 'data_petugas'); 
		//untuk mengakses file model 'Data_Petugas_model' dan data tersimpan pada tabel data_petugas
		redirect('Data_Petugas');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}
	public function detail_data($id_petugas) { //function untuk melihat detail data petugas
		$id_petugas = $id_petugas; //berdasarkan id_petugas
		$data['user'] = $this->Data_Petugas_model->detail_data($id_petugas, 'data_petugas')->row_array();
		//untuk mengakses function detail_data dari file model 'Data_Petugas_model' berdasarkan kolom id_petugas dari tabel 'data_petugas'
		$this->template->views('Admin2/view-data-petugas', $data);

	}
	public function edit_data($id_petugas) { //function untuk menampilkan halaman edit data petugas
		$where = array('id_petugas' => $id_petugas); //berdasarkan id_petugas
		$data['user'] = $this->Data_Petugas_model->edit_data($where, 'data_petugas')->row_array();
		//untuk mengakses function edit_data dari file model 'Data_Petugas_model' dari tabel 'data_petugas'
		$this->template->views('Admin2/edit-data-petugas', $data); //untuk mengakses file views 'Admin2/edit-data-petugas' pada halaman template
	}
	public function update() { //function update berfungsi untuk mengubah data
		$id_petugas = $this->input->post('id_petugas');
		$nik = $this->input->post('nik');
		$nama_petugas = $this->input->post('nama_petugas');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$foto = $this->imageuploader->checkAndUploadImage($_FILES['foto'], './assets/upload/fotopengguna/');

		$data = array( //array data untuk menampung inputan data
			'nik' => $nik,
			'nama_petugas' => $nama_petugas,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
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
			'id_petugas' => $id_petugas
		);
		$this->Data_Petugas_model->update_data($where,$data, 'data_petugas');
		//untuk mengubah data pada database dan pada tabel 'data_petugas'
		redirect('Data_Petugas'); //setelah data berhasil diubah, halaman web otomatis beralih ke halaman pada function index
	}
	public function hapus_data($id_petugas) { //function hapus_data untuk menghapus data petugas
		$where = array('id_petugas' => $id_petugas); //berdarkan id_petugas
		$this->Data_Petugas_model->hapus_data($where, 'data_petugas'); //menghapus data pada tabel data_petugas
		redirect('Data_Petugas'); //setelah data berhasil diubah, halaman web otomatis beralih ke halaman pada function index
	}

}
?>