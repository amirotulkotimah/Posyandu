<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SPK extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SPK_model', 'm'); // load, alias
	}

	public function index()
	{

		$data = [
			'judul' => 'Halaman Utama',
			'dataset' => $this->m->getData() // get All data
		];

		$this->template->views('Admin2/spk', $data); // view, send data
	}

	public function add_dataset() // method for adding new dataset (data latih)
	{
		$jumlah = 0; // set default = 0
		if ($this->input->post('jumlah')) {
			$jumlah = $this->input->post('jumlah'); // replace default value
		}

		$data = [
			'judul' => 'Tambah Dataset',
			'jmlReq' => $jumlah
		];

		$this->template->views('Admin2/tambah_dataset', $data);
	}

	public function save_dataset()
	{
		$length = $this->input->post('jmlReq'); // length of data
		$res = $this->m->save_data($length); // insert data into tabel
		if ($res > 0) { // checking ... success or not
			//$this->session->set_flashdata('msg', 'berhasil');
			//redirect('SPK');
		//} else {
			//$this->session->set_flashdata('msg', 'gagal');
			redirect('SPK');
		}
	}

	public function uji_data()
	{
		$proses = $this->input->post('proses');
		if (!isset($proses)) {
			redirect('SPK');
		}

		// retrieve data uji
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$umur = $this->input->post('umur');
		$bb = $this->input->post('bb');
		$tb = $this->input->post('tb');

		// 1. Menghitung prior probabilities P(Ci)
		$jmlJenisStatusGizi = $this->m->getStatusGizi();

		// hitung masing-masing status gizi (1 = Tidak | 2 = Ya)
		$jmlStatusGiziBaik = $this->m->getStatusGizi(1);
		$jmlStatusGiziKurang = $this->m->getStatusGizi(2);

		// hitung PCi
		$pciStatusGiziBaik = $jmlStatusGiziBaik / $jmlJenisStatusGizi;
		$pciStatusGiziKurang = $jmlStatusGiziKurang/ $jmlJenisStatusGizi;

		// 2. Menghitung conditional probabilities P(Xt|Ci)
		$jmlJKBaik = $this->m->getJK($jenis_kelamin, 1);
		$jmlJKKurang = $this->m->getJK($jenis_kelamin, 2);
		$jmlUmurBaik = $this->m->getUmur($umur, 1);
		$jmlUmurKurang = $this->m->getUmur($umur, 2);
		$jmlBBBaik = $this->m->getBB($bb, 1);
		$jmlBBKurang = $this->m->getBB($bb, 2);
		$jmlTBBaik = $this->m->getTB($tb, 1);
		$jmlTBKurang = $this->m->getTB($tb,2);

		// hitung probabilitas
		$jmlJKBaik = $jmlJKBaik / $jmlStatusGiziBaik;
		$jmlJKKurang = $jmlJKKurang / $jmlStatusGiziKurang;
		$jmlUmurBaik = $jmlUmurBaik / $jmlStatusGiziBaik;
		$jmlUmurKurang = $jmlUmurKurang / $jmlStatusGiziKurang;
		$jmlBBBaik = $jmlBBBaik / $jmlStatusGiziBaik;
		$jmlBBKurang = $jmlBBKurang / $jmlStatusGiziKurang;
		$jmlTBBaik = $jmlTBBaik / $jmlStatusGiziBaik;
		$jmlTBKurang = $jmlTBKurang / $jmlStatusGiziKurang;

		// C. Menghitung posterior probabilities P(X|Ci)
		$postStatusGiziBaik = $jmlJKBaik * $jmlUmurBaik * $jmlBBBaik * $jmlTBBaik;
		$postStatusGiziKurang = $jmlJKKurang * $jmlUmurKurang * $jmlBBKurang * $jmlTBKurang;

		// D. menghitung posterior probabilities P(Ci|X)
		$pciStatusGiziBaik = $pciStatusGiziBaik * $postStatusGiziBaik;
		$pciStatusGiziKurang = $pciStatusGiziKurang * $postStatusGiziKurang;

		if ($pciStatusGiziBaik > $pciStatusGiziKurang) {
			$kesimpulan = 'Karena nilai Status Gizi <i>Baik</i>, lebih besar dari nilai Status Gizi <i>Kurang</i>. Maka class dari data X atau hasil dari data uji adalah <strong>Balita memiliki Status Gizi Baik</strong>';
			$jenisStatusgizi = 1;
		} else if ($pciStatusGiziKurang > $pciStatusGiziBaik) {
			$kesimpulan = 'Karena nilai Status Gizi <i>Kurang</i>, lebih besar dari nilai Status Gizi <i>Baik</i>. Maka class dari Data X atau Hasil dari data Uji adalah <strong>Balita memiliki Status Gizi Kurang</strong>';
			$jenisStatusgizi = 2;
		}

		// return to view
		$data = [
			'judul' => 'Halaman Utama',
			'dataset' => $this->m->getData(),
			'jenis_kelamin' => $jenis_kelamin,
			'umur' => $umur,
			'bb' => $bb,
			'tb' => $tb,
			'kesimpulan' => $kesimpulan,
			'jenis_statusgizi' => $jenisStatusgizi,
			'hasil_baik' => $pciStatusGiziBaik,
			'hasil_kurang' => $pciStatusGiziKurang
		];

		$this->session->set_flashdata('hasil', 'ok');
		$this->template->views('Admin2/spk', $data);
	}
	
	public function edit_data($id_dataset) { //function untuk menampilkan halaman edit data petugas
		$this->load->model('Dataset_model');
		$where = array('id_dataset' => $id_dataset); //berdasarkan id_petugas
		$data['user'] = $this->Dataset_model->edit($where, 'dataset')->row_array();
		//untuk mengakses function edit_data dari file model 'Data_Petugas_model' dari tabel 'data_petugas'
		$this->template->views('Admin2/edit-dataset', $data); //untuk mengakses file views 'Admin2/edit-data-petugas' pada halaman template
	}

	public function update($id_dataset) {
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
			'status_gizi' => $status_gizi,
		);

		$where = array(
			'id_dataset' => $id_dataset
		);
		$this->SPK_model->update_data($where,$data, 'dataset');
		redirect('SPK');
	}
	public function hapus_data($id_dataset)
	  {
	  	$this->load->model('Dataset_model');
	  	$where = array('id_dataset' => $id_dataset);
	    // tampung data gambar dari id
	    // hapus file dulu di dalam folder, jika berhasil hapus di databasenya
	   
	       // hapus file di database
	      $hapus = $this->Dataset_model->hapus($where, 'dataset');
	      redirect('SPK');
	   
	    
	  }
	  public function data_peranak(){ //function untuk menampilkan halaman awal yang ditampilkan
		$this->load->model('Anak_model'); //untuk mengakses file model 'Data_Anak_model'
		$data['role'] = $this->Anak_model->getAll()->result(); //untuk mengakses function getAll dari file model 'Anak_model'
		$this->load->model('Data_Penimbangan_SPK'); //untuk mengakses file model 'Data_Penimbangan_model'
		$data['user'] = $this->Data_Penimbangan_SPK->getAll()->result(); //untuk mengakses function getAll dari file model 'Data_Penimbangan_model'
		$this->template->views('Admin2/pages-spk',$data);
		//untuk mengakses file views 'Admin2/pages-data-penimbangan' pada halaman template
	}
	public function data_per_anak($id_anakk) { //function untuk menampilkan data per anak
		$this->load->model('Anak_model'); //untuk mengakses file model 'Data_Anak_model'
		$this->load->model('Data_Penimbangan_SPK');
		if (isset($_GET['mulai_tanggal']) && isset($_GET['sampai_tanggal'])) {
			$data = [
				'date_from'=>$this->input->get('mulai_tanggal'),
				'date_to'=>$this->input->get('sampai_tanggal'),
				'id_anakk' => $this->input->get('id_anakk')
			];

			$data['user'] = $this->Data_Penimbangan_SPK->Tanggal($id_anakk, $data['date_from'], $data['date_to'])->result();
			$data['lihat'] = $this->Anak_model->tampil_nama($data['id_anakk'])->row_array();
		} else {
			$data['id_anakk'] = $id_anakk;
			$data['lihat'] = $this->Anak_model->tampil_nama($data['id_anakk'])->row_array();
			$data['user'] = $this->Data_Penimbangan_SPK->lihat_data_anak($id_anakk)->result();
		}
		//$user['user'] = $data;
		$this->template->views('Admin2/pages-spk-perid', $data);
		//untuk mengakses file views 'Admin2/data-penimbangan-perid' pada halaman template
	}
}
