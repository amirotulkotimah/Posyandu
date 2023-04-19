<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Laporan_Penimbangan extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_Penimbangan_model');
		//untuk mengakses file model 'Data_Penimbangan_model'
		$this->load->library('imageuploader');
		$this->load->helper('Usia');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$this->load->model('Role_Anak_Dan_Penimbangan_model');
		$data['role'] = $this->Role_Anak_Dan_Penimbangan_model->getAll()->result();
		
		$this->template->views('Admin2/laporan-penimbangan',$data);
			//untuk mengakses file views 'Admin2/laporan-penimbangan' pada halaman template
	}
	public function lihat(){ //function untuk menampilkan halaman laporan penimbangan
		$data['user'] = $this->Data_Penimbangan_model->lihat_semua()->result();
		$this->template->views('Admin2/laporan-penimbangan1',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	
	public function filter(){ //function untuk menampilkan filter tanggal
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal')
		];
		$data['lihat'] = $this->Data_Penimbangan_model->getByDate($data['date_from'], $data['date_to'])->result();
		$this->template->views('Admin2/print-penimbangan',$data);
	}
	public function print_laporan(){ //function untuk mencetak laporan 
		
		$data['lihat'] = $this->Data_Penimbangan_model->lihat_semua('data_penimbangan')->result();
		$this->template->views('Admin2/print-penimbangan',$data);
			//untuk mengakses file views 'Admin2/print-penimbangan' pada halaman template
	}
	public function cari_nama(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data = [
			'id_anakk'=>$this->input->get('id_anak')
		];
		$data['lihat'] = $this->Data_Penimbangan_model->cari($data['id_anakk'])->result();
		$this->template->views('Admin2/penimbangan_peranak',$data);
	}
	public function print_laporan_perid($id_anakk){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['id_anakk'] = $id_anakk;
		$data['lihat'] = $this->Data_Penimbangan_model->lihat_perid($data['id_anakk'], 'data_penimbangan')->result();
		$this->template->views('Admin2/print-penimbangan',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}

}
?>
