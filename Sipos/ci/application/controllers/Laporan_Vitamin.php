<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Laporan_Vitamin extends CI_Controller{ //membuat controller Laporan_Vitamin
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_Vitamin_model');
		//untuk mengakses file model 'Data_Vitamin_model'
		$this->load->library('imageuploader');
		$this->load->helper('Usia');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$this->load->model('Role_Anak_Dan_Penimbangan_model');
		$data['role'] = $this->Role_Anak_Dan_Penimbangan_model->getAll()->result();
		
		$this->template->views('Admin2/laporan-vitamin',$data);
			//untuk mengakses file views 'Admin2/laporan-vitamin' pada halaman template
	}
	public function lihat(){ //function untuk menampilkan halaman laporan vitamin
		$data['user'] = $this->Data_Vitamin_model->lihat_semua()->result();
		$this->template->views('Admin2/laporan-vitamin1',$data);
			//untuk mengakses file views 'Admin2/laporan-vitamin1' pada halaman template
	}
	
	public function filter(){ //function untuk menampilkan filter tanggal
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal'),
		];
		$data['user'] = $this->Data_Vitamin_model->getByDate($data['date_from'], $data['date_to'])->result();
		$this->template->views('Admin2/print-vitamin',$data);
	}
	public function print_laporan(){ //function untuk menampilkan halaman print laporan
		
		$data['user'] = $this->Data_Vitamin_model->lihat_semua('data_vitamin')->result();
		$this->template->views('Admin2/print-vitamin',$data);
			//untuk mengakses file views 'Admin2/print-vitamin' pada halaman template
	}
	public function cari_nama(){ //function untuk menampilkan halaman data bersarkan nama
		$data = [
			'id_anakk'=>$this->input->get('id_anak')
		];
		$data['user'] = $this->Data_Vitamin_model->cari($data['id_anakk'])->result();
		$this->template->views('Admin2/vitamin_peranak',$data);
	}
	public function print_laporan_perid($id_anakk){ //function untuk mencetak laporan vitamin
		$data['id_anakk'] = $id_anakk;
		$data['user'] = $this->Data_Vitamin_model->lihat_perid($data['id_anakk'], 'data_vitamin')->result();
		$this->template->views('Admin2/print-vitamin',$data);
			//untuk mengakses file views 'Admin2/print-vitamin' pada halaman template
	}

}
?>