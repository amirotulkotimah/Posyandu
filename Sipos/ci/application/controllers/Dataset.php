<?php 

defined ('BASEPATH') OR exit ('No direct script access allowed');
class Dataset extends CI_Controller{ //membuat controller Dataset
	function __construct(){
		parent:: __construct();
		$this->load->model('Dataset_model');
	}

	public function index(){
		$config['base_url'] = site_url('Dataset');

		$data['user'] = $this->Dataset_model->getAll()->result();
		$this->template->views('Admin2/pages-dataset', $data);
	}

	public function tambah_data(){
		$this->template->views('Admin2/form-add-dataset_baru');
	}

	public function input_data(){

		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$umur = $this->input->post('umur');
		$bb = $this->input->post('bb');
		$tb = $this->input->post('tb');
		$status_gizi = $this->input->post('status_gizi');

		$data = array( 
			'jenis_kelamin' => $jenis_kelamin,
			'umur' => $umur,
			'bb' => $bb,
			'tb' => $tb,
			'status_gizi' => $status_gizi
		);
		$this->Dataset_model->input_data($data, 'dataset');
		redirect('Dataset'); 
	}

	public function edit_data($id_dataset) {
		$where = array('id_dataset' => $id_dataset);
		$data['user'] = $this->Dataset_model->edit($where, 'dataset')->row_array();
		$this->template->views('Admin2/edit-dataset', $data);
	}
	public function update() {
		$id_dataset = $this->input->post('id_dataset');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$umur = $this->input->post('umur');
		$bb = $this->input->post('bb');
		$tb = $this->input->post('tb');
		$status_gizi = $this->input->post('status_gizi');

		$data = array( //array data untuk menampung inputan data
			'jenis_kelamin' => $jenis_kelamin,
			'umur' => $umur,
			'bb' => $bb,
			'tb' => $tb,
			'status_gizi' => $status_gizi
		);

		$where = array(
			'id_dataset' => $id_dataset
		);
		$this->Dataset_model->update($where,$data, 'dataset');
		redirect('SPK');
	}
	public function hapus_data($id_dataset) {
		$where = array('id_dataset' => $id_dataset);
		$this->Dataset_model->hapus($where, 'dataset');
		redirect('SPK');
	}
}
?>