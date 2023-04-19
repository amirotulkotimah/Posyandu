<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Jenis_Vitamin extends CI_Controller{ //membuat controller Jenis Vitamin
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_Jenis_Vitamin_model');
		//untuk mengakses file model 'Data_Jenis_Vitamin_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['base_url'] = site_url('Jenis_Vitamin');
		$data['user'] = $this->Data_Jenis_Vitamin_model->getAll()->result();
		$this->template->views('Admin2/pages-jenis-vitamin',$data);
			//untuk mengakses file views 'Admin2/pages-jenis-vitamin' pada halaman template
	}
	public function tambah_data() { //function untuk tambah data
		$this->load->model('Data_Jenis_Vitamin_model');
		$this->template->views('Admin2/form-add-jenis-vitamin');
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}
	public function input_data() { //function input untuk memasukkan proses inputan data ke database
		$jenis_vitamin = $this->input->post('jenis_vitamin');
		$umur = $this->input->post('umur');
		
		$data = array( //array data untuk menampung inputan data
			'jenis_vitamin' => $jenis_vitamin,
			'umur' => $umur,
		);
		$this->Data_Jenis_Vitamin_model->input_data($data, 'jenis_vitamin'); 
		//untuk mengakses file model 'Data_Jenis_Vitamin_model' dan data tersimpan pada tabel jenis_vitamin
		redirect('Jenis_Vitamin');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}
	public function detail_data($id_jenis_vitamin) {
		$id_jenis_vitamin = $id_jenis_vitamin;
		$data['user'] = $this->Data_Jenis_Vitamin_model->detail_data($id_jenis_vitamin, 'jenis_vitamin')->row_array();
		$this->template->views('Admin2/view-jenis-vitamin', $data);

	}
	public function edit_data($id_jenis_vitamin) {
		$where = array('id_jenis_vitamin' => $id_jenis_vitamin);
		$data['user'] = $this->Data_Jenis_Vitamin_model->edit_data($where, 'jenis_vitamin')->row_array();
		$this->template->views('Admin2/edit-jenis-vitamin', $data);
	}
	public function update() {
		$id_jenis_vitamin = $this->input->post('id_jenis_vitamin');
		$jenis_vitamin = $this->input->post('jenis_vitamin');
		$umur = $this->input->post('umur');

		$data = array( //array data untuk menampung inputan data
			'jenis_vitamin' => $jenis_vitamin,
			'umur' => $umur,
		);

		$where = array(
			'id_jenis_vitamin' => $id_jenis_vitamin
		);
		$this->Data_Jenis_Vitamin_model->update_data($where,$data, 'jenis_vitamin');
		redirect('Jenis_Vitamin');
	}
	public function hapus_data($id_jenis_vitamin) {
		$where = array('id_jenis_vitamin' => $id_jenis_vitamin);
		$this->Data_Jenis_Vitamin_model->hapus_data($where, 'jenis_vitamin');
		redirect('Jenis_Vitamin');
	}

}
?>