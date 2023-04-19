<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Menu_PMT extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_Menu_PMT_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['base_url'] = site_url('Data_Menu_PMT');
		$this->load->model('Data_Menu_PMT_model');
		$data['user'] = $this->Data_Menu_PMT_model->getAll()->result();
		//$data['user'] = $this->Data_Menu_PMT_model->getAll()->result();
		$this->template->views('Admin2/menu_pmt_perid',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function tambah_data() { //function untuk tambah data
		$this->load->model('Data_Menu_PMT_model');
		$this->template->views('Admin2/form-add-menu-pmt');
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}
	public function input_data() { //function input untuk memasukkan proses inputan data ke database
		$tanggal = $this->input->post('tanggal');
		$nama_menu = $this->input->post('nama_menu');
		$ket = $this->input->post('ket');
		
		$data = array( //array data untuk menampung inputan data
			'tanggal' => $tanggal,
			'nama_menu' => $nama_menu,
			'ket' => $ket
		);
		$this->Data_Menu_PMT_model->input_data($data, 'menu_pmt'); 
		//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
		redirect('Data_Menu_PMT/lihat_data/');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}
	public function detail_data($id_menu_pmt) {
		$id_menu_pmt = $id_menu_pmt;
		$data['user'] = $this->Data_Menu_PMT_model->detail_data($id_menu_pmt, 'menu_pmt')->row_array();
		$this->template->views('Admin2/view-menu-pmt', $data);

	}
	public function edit_data($id_menu_pmt) {
		$where = array('id_menu_pmt' => $id_menu_pmt);
		$data['user'] = $this->Data_Menu_PMT_model->edit_data($where, 'menu_pmt')->row_array();
		$this->template->views('Admin2/edit-menu-pmt', $data);
	}
	public function update() {
		$id_menu_pmt = $this->input->post('id_menu_pmt');
		$tanggal = $this->input->post('tanggal');
		$nama_menu = $this->input->post('nama_menu');
		$ket = $this->input->post('ket');
		$data = array( //array data untuk menampung inputan data
			'tanggal' => $tanggal,
			'nama_menu' => $nama_menu,
			'ket' => $ket
		);

		$where = array(
			'id_menu_pmt' => $id_menu_pmt
		);
		$this->Data_Menu_PMT_model->update_data($where,$data, 'menu_pmt');
		redirect('Data_Menu_PMT/lihat_data/');
	}
	public function hapus_data($id_menu_pmt) {
		$where = array('id_menu_pmt' => $id_menu_pmt);
		$this->Data_Menu_PMT_model->hapus_data($where, 'menu_pmt');
		redirect('Data_Menu_PMT/lihat_data/');
	}

	public function filter(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal'),
		];
		$data['user'] = $this->Data_Menu_PMT_model->getByDate($data['date_from'], $data['date_to'])->result();
		$this->template->views('Admin2/menu_pmt_perid',$data);
	}

public function lihat_data() {
		$data['user'] = $this->Data_Menu_PMT_model->getAll()->result();
		$this->template->views('Admin2/menu_pmt_perid', $data);

	}

	public function forward($id)
	{
		$id = $id;
		$data = [
			'status' => 'sudah diberikan'
		];
		$this->Data_Menu_PMT_model->update_file($id, $data);
		redirect('Data_Menu_PMT');
	}

	public function aktif($id)
	{
		$id = $id;
		$data = [
			'status' => 'belum diberikan'
		];
		$this->Data_Menu_PMT_model->update_file($id, $data);
		redirect('Data_Menu_PMT');
	}
}
?>