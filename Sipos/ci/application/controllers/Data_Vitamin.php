<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Vitamin extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_Vitamin_model');
		//untuk mengakses file model 'Mahasiswa_model'
		$this->load->library('imageuploader');
		$this->load->helper('Usia');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$this->load->model('Anak_model');
		$this->load->model('Data_Vitamin_model');
		
		$config['base_url'] = site_url('Data_Vitamin');
		$data['role'] = $this->Anak_model->getAll()->result();
		$data['terbaru'] = $this->Data_Vitamin_model->data_terbaru()->result();
		//$data['user'] = $this->Data_Vitamin_model->getAll()->result();
		$this->template->views('Admin2/pages-data-vitamin',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function lihat_semua_data_vitamin(){ //function untuk menampilkan halaman awal yang ditampilkan
		
		$data['user'] = $this->Data_Vitamin_model->lihat_semua()->result();
		$this->template->views('Admin2/view-semua-data-vitamin',$data);
	}
	public function filter(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal'),
		];
		$data['user'] = $this->Data_Vitamin_model->getByDate($data['date_from'], $data['date_to'])->result();
		$this->template->views('Admin2/view-semua-data-vitamin',$data);
	}
	public function data_per_anak($id_anakk) { //function untuk tambah data
		$this->load->model('Anak_model');
		if (isset($_GET['mulai_tanggal']) && isset($_GET['sampai_tanggal'])) {
			$data = [
				'date_from'=>$this->input->get('mulai_tanggal'),
				'date_to'=>$this->input->get('sampai_tanggal'),
				'id_anakk' => $this->input->get('id_anakk')
			];

			$data['user'] = $this->Data_Vitamin_model->Tanggal($id_anakk, $data['date_from'], $data['date_to'])->result();
			$data['lihat'] = $this->Anak_model->tampil_nama($data['id_anakk'])->row_array();
		} else {
			$data['id_anakk'] = $id_anakk;
			//$data['title'] = $this->input->get('id_jenis');
			//$data['title'] = $this->Rolejenisarsip_model->getAll($id_jenis)->result();
			//$params['title'] = 'Order #'. $data->jenis_arsip;
			$data['lihat'] = $this->Anak_model->tampil_nama($data['id_anakk'])->row_array();
			$data['user'] = $this->Data_Vitamin_model->lihat_data_anak($id_anakk)->result();
		}
		//$user['user'] = $data;
		$this->template->views('Admin2/data-vitamin-perid', $data);
		//untuk mengakses file views 'crud/tambah_Grup' pada halaman template
	}
	public function tambah_data(){
		$this->load->model('Anak_model');
		$this->load->model('Data_Jenis_Vitamin_model');
		$this->load->model('Data_Petugas_model');

		$data['id_anakk'] = $this->input->get('id_anak');

		$data['user'] = $this->Anak_model->tambah($data['id_anakk'])->row_array();
		$data['role'] = $this->Data_Jenis_Vitamin_model->getAll()->result();
		$data['pilih'] = $this->Data_Petugas_model->getAll()->result();

		$this->template->views('Admin2/form-add-data-vitamin', $data);
	}
	public function input($id_anakk)
	{
			$nik_anak = $this->input->post('nik_anak');
			$nama_anak = $this->input->post('nama_anak');
			$umur_anak = $this->input->post('umur_anak');
			$jenis_vitamin = $this->input->post('jenis_vitamin');
			$nama_petugas = $this->input->post('nama_petugas');
			$tgl_vitamin = $this->input->post('tgl_vitamin');
			$id_anakk = $this->input->post('id_anakk');

		$data = array( //array data untuk menampung inputan data
			'nik_anak' => $nik_anak,
			'nama_anak' => $nama_anak,
			'umur_anak' => $umur_anak,
			'jenis_vitamin' => $jenis_vitamin,
			'nama_petugas' => $nama_petugas,
			'tgl_vitamin' => $tgl_vitamin,
			'id_anakk' => $id_anakk
		);
		

		$this->Data_Vitamin_model->input_data($data,'data_vitamin');

		redirect('Data_Vitamin/data_per_anak/' . $id_anakk);
	}
	public function detail_data($id_vitamin){
		$where = array('id_vitamin' => $id_vitamin);
		$data['user'] = $this->Data_Vitamin_model->detail_data($where, 'data_vitamin')->result();
		$data['id_anakk'] = $this->input->get('id_anakk');
		$this->template->views('Admin2/view-data-vitamin', $data);
	}
	public function edit_data($id_vitamin){
		$this->load->model('Data_Jenis_Vitamin_model');
		$this->load->model('Data_Petugas_model');

		$data['role'] = $this->Data_Jenis_Vitamin_model->getAll()->result();
		$data['pilih'] = $this->Data_Petugas_model->getAll()->result();
		$where = array('id_vitamin' => $id_vitamin);
		$data['user'] = $this->Data_Vitamin_model->edit_data($where, 'data_vitamin')->result();
		$data['id_anakk'] = $this->input->get('id_anakk');
		$this->template->views('Admin2/edit-data-vitamin', $data);
	}

	public function update($id_anakk) {
		$id_vitamin = $this->input->post('id_vitamin');
		$jenis_vitamin = $this->input->post('jenis_vitamin');
		$nama_petugas = $this->input->post('nama_petugas');
		$tgl_vitamin = $this->input->post('tgl_vitamin');

		$data = array( //array data untuk menampung inputan data
			'jenis_vitamin' => $jenis_vitamin,
			'nama_petugas' => $nama_petugas,
			'tgl_vitamin' => $tgl_vitamin,
		);

		$where = array(
			'id_vitamin' => $id_vitamin
		);
		$this->Data_Vitamin_model->update_data($where,$data, 'data_vitamin');
		redirect('Data_Vitamin/data_per_anak/' . $id_anakk);
	}
	public function hapus_data($id_vitamin)
	  {
	  	$where = array('id_vitamin' => $id_vitamin);
	    // tampung data gambar dari id
	    // hapus file dulu di dalam folder, jika berhasil hapus di databasenya
	   
	       // hapus file di database
	      $hapus_data = $this->Data_Vitamin_model->hapus($id_vitamin, $where, 'data_vitamin');
	      redirect('Data_Vitamin/data_per_anak/'. $this->input->get('id_anakk'));
	   
	    
	  }
}
?>