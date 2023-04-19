<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Dashboard extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		
		$this->load->model('Data_Pengguna_model');
		$this->load->model('Data_Anak_model');
		$this->load->model('Data_Vitamin_model');
		$this->load->model('Data_Penimbangan_model');
		$this->load->model('Data_Menu_PMT_model');

	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['base_url'] = site_url('Dashboard');

		$data['user'] = $this->Data_Pengguna_model->getAll()->result();
		$data['total_data_anak'] = $this->Data_Anak_model-> count_all_anak();
		$data['total_data_vitamin'] = $this->Data_Vitamin_model->count_all_vitamin();
		$data['total_data_penimbangan'] = $this->Data_Penimbangan_model->count_all_penimbangan();
		$data['total_menu_pmt'] = $this->Data_Menu_PMT_model->count_all_menu_pmt();
		$data['terbaru'] = $this->Data_Penimbangan_model->data_terbaru()->result();
		$data['baru'] = $this->Data_Anak_model->data_terbaru()->result();
		
		$this->template->views('Admin2/dashboard',$data);
		
	}

}
?>