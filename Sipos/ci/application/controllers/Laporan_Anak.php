<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Laporan_Anak extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_Anak_model');
		//untuk mengakses file model 'Mahasiswa_model'
		$this->load->library('imageuploader');
		$this->load->helper('Usia');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Data_Anak_model->lihat_semua()->result();
		$this->template->views('Admin2/laporan-anak',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	
	public function print_laporan(){ //function untuk menampilkan halaman awal yang ditampilkan
		
		$data['lihat'] = $this->Data_Anak_model->lihat_semua('data_anak')->result();
		$this->template->views('Admin2/print-anak',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}

}
?>
