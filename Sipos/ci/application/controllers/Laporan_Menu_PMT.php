<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Laporan_Menu_PMT extends CI_Controller{ //membuat controller Laporan_Menu_PMT
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_Menu_PMT_model');
		//untuk mengakses file model 'Data_Menu_PMT_model'
		$this->load->library('imageuploader');
		$this->load->helper('Usia');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Data_Menu_PMT_model->getAll()->result();
		$this->template->views('Admin2/laporan-menu-pmt',$data);
			//untuk mengakses file views 'Admin2/laporan-menu-pmt' pada halaman template
	}
	
	public function filter(){ //function untuk menampilkan filter tanggal
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal'),
		];
		$data['user'] = $this->Data_Menu_PMT_model->getByDate($data['date_from'], $data['date_to'])->result();
		$this->template->views('Admin2/print-menu-pmt',$data);
	}
	public function print_laporan(){ //function untuk mencetak laporan
		$data['user'] = $this->Data_Menu_PMT_model->getAll('menu_pmt')->result();
		$this->template->views('Admin2/print-menu-pmt',$data);
			//untuk mengakses file views 'Admin2/print-menu-pmt' pada halaman template
	}

}
?>