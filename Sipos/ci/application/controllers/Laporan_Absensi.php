<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Laporan_Absensi extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Absensi_model');
		//untuk mengakses file model 'Data_Penimbangan_model'
		$this->load->library('imageuploader');
		$this->load->helper('Usia');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Absensi_model->lihat_semua()->result();
		$this->template->views('Admin2/laporan-absensi1',$data);
			//untuk mengakses file views 'Admin2/laporan-penimbangan' pada halaman template
	}
	public function lihat(){ //function untuk menampilkan halaman laporan penimbangan
		$data['user'] = $this->Absensi_model->lihat_semua()->result();
		$this->template->views('Admin2/laporan-absensi1',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	
	public function filter(){ //function untuk menampilkan filter tanggal
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal')
		];
		$data['lihat'] = $this->Absensi_model->getByDate($data['date_from'], $data['date_to'])->result();
		$this->template->views('Admin2/print-absensi',$data);
	}
	public function print_laporan(){ //function untuk mencetak laporan 
		
		$data['lihat'] = $this->Absensi_model->lihat_semua('absen')->result();
		$this->template->views('Admin2/print-absensi',$data);
			//untuk mengakses file views 'Admin2/print-penimbangan' pada halaman template
	}
	public function cari(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data = [
			'nm_ortu'=>$this->input->get('nm_ortu')
		];
		$data['lihat'] = $this->Absensi_model->cari($data['nm_ortu'])->result();
		$this->template->views('Admin2/data-absensi-per-ortu',$data);
	}
	public function print_laporan_perid($nm_ortu){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['nm_ortu'] = $nm_ortu;
		$data['lihat'] = $this->Absensi_model->lihat_perid($data['nm_ortu'], 'absen')->result();
		$this->template->views('Admin2/print-absensi',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	

}
?>
