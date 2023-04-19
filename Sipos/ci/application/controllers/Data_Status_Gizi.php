<?php 

defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Status_Gizi extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_Status_Gizi_model');
		$this->load->helper('Usia');
	}

	public function index(){
		$config['base_url'] = site_url('Data_Status_Gizi');

		$data['user'] = $this->Data_Status_Gizi_model->getAll()->result();
		$this->template->views('Admin2/pages-data-status-gizi', $data);
	}

	public function tambah_data(){
		$this->load->model('Data_Status_Gizi_model');
		$data['lihat'] = $this->Data_Status_Gizi_model->tambah()->result();
		$this->template->views('Admin2/form-add-status-gizi');
	}

	public function detail_data($id_status_gizi) {
		$id_status_gizi = $id_status_gizi;
		$data['user'] = $this->Data_Status_Gizi_model->detail_data($id_status_gizi, 'status_gizi')->row_array();
		$this->template->views('Admin2/view-status-gizi', $data);

	}
	public function hapus_data($id_status_gizi) {
		$where = array('id_status_gizi' => $id_status_gizi);
		$this->Data_Status_Gizi_model->hapus_data($where, 'status_gizi');
		redirect('Data_Status_Gizi');
	}
	public function filter(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal'),
		];
		$data['user'] = $this->Data_Status_Gizi_model->getByDate($data['date_from'], $data['date_to'])->result();
		$this->template->views('Admin2/pages-data-status-gizi',$data);
	}




	
	

}
?>