<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Absensi extends CI_Controller{ //membuat controller Data_Anak
	function __construct(){
		parent:: __construct();
		$this->load->model('Absensi_model'); //untuk mengakses file model 'Data_Anak_model'
		$this->load->library('imageuploader');
		//untuk mengakses file library 'imageuploader'
		
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['base_url'] = site_url('Absensi'); //merupakan alamat url 

		$jumlah = 0; // set default = 0
		if ($this->input->post('jumlah')) {
			$jumlah = $this->input->post('jumlah'); // replace default value
		}

		$data = [
			'judul' => 'Tambah Absen',
			'jmlReq' => $jumlah,
		];
		$this->load->model('Role_Ortu_model'); //untuk mengakses file model 'Anak_model'
		$data['role'] = $this->Role_Ortu_model->getAll()->result();
		$this->load->model('Absensi_model'); //untuk mengakses file model 'Data_Anak_model'
		$this->load->model('Data_Ortu_model'); //untuk mengakses file model 'Anak_model'
		$data['total_data_ortu'] = $this->Data_Ortu_model->count_all_ortu();
		$data['terbaru'] = $this->Absensi_model->data_terbaru()->result();
		$data['user'] = $this->Absensi_model->getAll()->result(); //untuk memanggil function getAll pada file model 'Data_Anak_model' 
		$this->template->views('Admin2/pages-absen',$data);
			//untuk mengakses file views 'Admin2/pages-data-anak' pada halaman template
	}
	public function per_orang_tua($id_orang_tua) { //function untuk menampilkan data per anak
		$this->load->model('Absensi_model'); //untuk mengakses file model 'Data_Anak_model'
		$this->load->model('Data_Ortu_model');
		if (isset($_GET['mulai_tanggal']) && isset($_GET['sampai_tanggal'])) {
			$data = [
				'date_from'=>$this->input->get('mulai_tanggal'),
				'date_to'=>$this->input->get('sampai_tanggal'),
				'id_orang_tua' => $this->input->get('id_orang_tua')
			];

			$data['user'] = $this->Absensi_model->Tanggal($id_anakk, $data['date_from'], $data['date_to'])->result();
			$data['lihat'] = $this->Absensi_model->tampil_nama($data['id_orang_tua'])->row_array();
		} else {
			$data['id_orang_tua'] = $id_orang_tua;
			$data['lihat'] = $this->Data_Ortu_model->tampil_nama($data['id_orang_tua'])->row_array();
			$data['user'] = $this->Absensi_model->lihat_data_ortu($id_orang_tua)->result();
		}
		//$user['user'] = $data;
		$this->template->views('Admin2/pages-absen-per-ortu', $data);
		//untuk mengakses file views 'Admin2/data-penimbangan-perid' pada halaman template
	}
	public function input($id_orang_tua) //function input untuk memasukkan data ke database
	{
			$tanggal_absen = $this->input->post('tanggal_absen');
			$status_absen = $this->input->post('status_absen');
			$id_orang_tua = $this->input->post('id_orang_tua');
			$nama_ortu = $this->input->post('nm_ortu');

		$data = array( //array data untuk menampung inputan data
			'tanggal_absen' => $tanggal_absen,
			'status_absen' => $status_absen,
			'id_orang_tua' => $id_orang_tua,
			'nm_ortu' => $nama_ortu
		);
		

		$this->Absensi_model->input_data($data,'absen');

		redirect('Absensi/absen_orang_tua/' . $id_orang_tua);
	}
	public function absen_orang_tua($id_orang_tua) { //function untuk menampilkan data per anak
		$this->load->model('Data_Ortu_model'); //untuk mengakses file model 'Data_Anak_model'
		if (isset($_GET['mulai_tanggal']) && isset($_GET['sampai_tanggal'])) {
			$data = [
				'date_from'=>$this->input->get('mulai_tanggal'),
				'date_to'=>$this->input->get('sampai_tanggal'),
				'id_orang_tua' => $this->input->get('id_orang_tua')
			];

			$data['user'] = $this->Absensi_model->Tanggal($id_orang_tua, $data['date_from'], $data['date_to'])->result();
			$data['lihat'] = $this->Data_Ortu_model->tampil_nama($data['id_orang_tua'])->row_array();
		} else {
			$data['id_orang_tua'] = $id_orang_tua;
			$data['lihat'] = $this->Data_Ortu_model->tampil_nama($data['id_orang_tua'])->row_array();
			$data['user'] = $this->Absensi_model->lihat_data_ortu($id_orang_tua)->result();
		}
		//$user['user'] = $data;
		$this->template->views('Admin2/daftar-absen-per-ortu', $data);
		//untuk mengakses file views 'Admin2/data-penimbangan-perid' pada halaman template
	}
	public function edit_data($id_absen){ //function edit_data untuk menampilkan halaman edit data anak
		$where = array('id_absen' => $id_absen);
		$data['user'] = $this->Absensi_model->edit_data($where, 'absen')->result();
		//$data['id_orang_tua'] = $this->input->get('id_orang_tua');
		$this->template->views('Admin2/edit-absen', $data);
	}

	public function update() { //function update untuk mengubah data anak
		$id_absen = $this->input->post('id_absen');
		$tanggal_absen = $this->input->post('tanggal_absen');
		$status_absen = $this->input->post('status_absen');
		
		$data = array( //array data untuk menampung inputan data
			'tanggal_absen' => $tanggal_absen,
			'status_absen' => $status_absen,
		);

		$where = array(
			'id_absen' => $id_absen
		);
		$this->Absensi_model->update_data($where,$data, 'absen');
		//untuk mengakses function update_data dari file model 'Data_Penimbangan_model' pada tabel 'data_penimbangan'
		redirect('Absensi/lihat_perbulan_data/'); //setelah data berhasil diubah, halaman web otomatis beralih ke controller Data_Penimbangan dengan function data_per_anak 
	}
	public function hapus($id_absen) //function untuk hapus data anak
	  {
	  	$where = array('id_absen' => $id_absen);
	      $hapus_data = $this->Absensi_model->hapus($id_absen, $where, 'absen');
	      redirect('Absensi/lihat_perbulan_data');
	   
	    
	  }
	  public function add_absen() // method for adding new dataset (data latih)
	{

		$jumlah = 0; // set default = 0
		if ($this->input->post('jumlah')) {
			$jumlah = $this->input->post('jumlah'); // replace default value
		}

		$data = [
			'judul' => 'Tambah Absen',
			'jmlReq' => $jumlah,
		];
		$this->load->model('Role_Ortu_model'); //untuk mengakses file model 'Anak_model'
		$data['role'] = $this->Role_Ortu_model->getAll()->result();
		$this->load->model('Data_Ortu_model');
		$data['total_data_ortu'] = $this->Data_Ortu_model->count_all_ortu();

		$this->template->views('Admin2/tabel_tambah_absen', $data);
	}
	public function save_absen()
	{
		$length = $this->input->post('jmlReq'); // length of data
		$res = $this->Absensi_model->save_absen($length); // insert data into tabel
		if ($res > 0) { // checking ... success or not
			//$this->session->set_flashdata('msg', 'berhasil');
			//redirect('SPK');
		//} else {
			//$this->session->set_flashdata('msg', 'gagal');
			redirect('Absensi');
		}
	}

	 public function forward($id)
	{
		$id = $id;
		$data = [
			'status_absen' => 'hadir'
		];
		$this->Absensi_model->update_file($id, $data);
		redirect('Absensi');
	}

	public function lihat_data(){ //function edit_data untuk menampilkan halaman edit data anak
		$data['user'] = $this->Absensi_model->getAll()->result();
		
		$this->template->views('Admin2/semua_data_absen', $data);
	}
	public function filter(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal'),
		];
		$data['user'] = $this->Absensi_model->getByDate($data['date_from'], $data['date_to'])->result();
		$this->template->views('Admin2/semua_data_absen',$data);
	}
	public function lihat_perbulan_data(){ //function edit_data untuk menampilkan halaman edit data anak
		$data['user'] = $this->Absensi_model->perbulan_absen()->result();
		
		$this->template->views('Admin2/data_absen_perbulan', $data);
	}

	}