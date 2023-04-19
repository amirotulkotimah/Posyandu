<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Penimbangan extends CI_Controller{ //membuat controller Data_Penimbangan
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_Penimbangan_model'); //untuk mengakses file model 'Data_Penimbangan_model'
		$this->load->library('imageuploader'); //untuk mengakses file library 'imageuploader'
		//$this->load->helper('Usia'); //untuk mengakses file helper 'Usia'
		$this->load->model('SPK_model', 'm');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$this->load->model('Anak_model'); //untuk mengakses file model 'Data_Anak_model'
		$data['role'] = $this->Anak_model->getAll()->result(); //untuk mengakses function getAll dari file model 'Anak_model'
		$this->load->model('Data_Penimbangan_model'); //untuk mengakses file model 'Data_Penimbangan_model'
		$config['base_url'] = site_url('Data_Penimbangan'); //merupakan alamat url
		$data['terbaru'] = $this->Data_Penimbangan_model->data_terbaru()->result(); //untuk mengakses function data_terbaru dari file model 'Data_Penimbangan_model'
		$data['user'] = $this->Data_Penimbangan_model->getAll()->result(); //untuk mengakses function getAll dari file model 'Data_Penimbangan_model'
		$this->template->views('Admin2/pages-data-penimbangan',$data);
		//untuk mengakses file views 'Admin2/pages-data-penimbangan' pada halaman template
	}
	public function lihat_semua_data_penimbangan(){ //function untuk menampilkan semua data penimbangan
		
		$data['user'] = $this->Data_Penimbangan_model->lihat_semua()->result(); //untuk mengakses function lihat_semua dari file model 'Data_Penimbangan_model'
		$this->template->views('Admin2/view-semua-data-penimbangan',$data); //untuk mengakses file views 'Admin2/view-data-penimbangan' pada halaman template
	}
	public function filter(){ //function untuk membuat filter tanggal
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal'),
		];
		$data['user'] = $this->Data_Penimbangan_model->getByDate($data['date_from'], $data['date_to'])->result(); //untuk mengakses function getByDate dari file model 'Data_Penimbangan_model'
		$this->template->views('Admin2/view-semua-data-penimbangan',$data); //untuk mengakses file views 'Admin2/view-semua-data-penimbangan' pada halaman template
	}
	public function data_per_anak($id_anakk) { //function untuk menampilkan data per anak
		$this->load->model('Anak_model'); //untuk mengakses file model 'Data_Anak_model'
		if (isset($_GET['mulai_tanggal']) && isset($_GET['sampai_tanggal'])) {
			$data = [
				'date_from'=>$this->input->get('mulai_tanggal'),
				'date_to'=>$this->input->get('sampai_tanggal'),
				'id_anakk' => $this->input->get('id_anakk')
			];

			$data['user'] = $this->Data_Penimbangan_model->Tanggal($id_anakk, $data['date_from'], $data['date_to'])->result();
			$data['lihat'] = $this->Anak_model->tampil_nama($data['id_anakk'])->row_array();
		} else {
			$data['id_anakk'] = $id_anakk;
			$data['lihat'] = $this->Anak_model->tampil_nama($data['id_anakk'])->row_array();
			$data['user'] = $this->Data_Penimbangan_model->lihat_data_anak($id_anakk)->result();
		}
		//$user['user'] = $data;
		$this->template->views('Admin2/data-penimbangan-perid', $data);
		//untuk mengakses file views 'Admin2/data-penimbangan-perid' pada halaman template
	}
	public function tambah_data(){ //function untuk tambah data anak
		$this->load->model('Anak_model'); //untuk mengakses file model 'Anak_model'
		$data['id_anakk'] = $this->input->get('id_anak');

		$data['user'] = $this->Anak_model->tambah($data['id_anakk'])->row_array();

		$this->template->views('Admin2/form-add-data-penimbangan', $data);
	}

	public function input($id_anakk) //function input untuk memasukkan data ke database
	{
			$nik_anak = $this->input->post('nik_anak');
			$nama_anak = $this->input->post('nama_anak');
			$jenis_kelamin_anak = $this->input->post('jenis_kelamin_anak');
			$umur_anak = $this->input->post('umur_anak');
			$bb_anak = $this->input->post('bb_anak');
			$tb_anak = $this->input->post('tb_anak');
			$tgl_timbang_anak = $this->input->post('tgl_timbang_anak');
			$id_anakk = $this->input->post('id_anakk');

		$data = array( //array data untuk menampung inputan data
			'nik_anak' => $nik_anak,
			'nama_anak' => $nama_anak,
			'jenis_kelamin_anak' => $jenis_kelamin_anak,
			'umur_anak' => $umur_anak,
			'bb_anak' => $bb_anak,
			'tb_anak' => $tb_anak,
			'tgl_timbang_anak' => $tgl_timbang_anak,
			'id_anakk' => $id_anakk
		);
		

		$this->Data_Penimbangan_model->input_data($data,'data_penimbangan');

		redirect('Data_Penimbangan/data_per_anak/' . $id_anakk);
	}
	public function detail_data($id_penimbangan){ //function detail_data untuk melihat detail data penimbangan
		$where = array('id_penimbangan' => $id_penimbangan);
		$data['user'] = $this->Data_Penimbangan_model->detail_data($where, 'data_penimbangan')->result();
		$data['id_anakk'] = $this->input->get('id_anakk');
		$this->template->views('Admin2/view-data-penimbangan', $data);
	}

	public function edit_data($id_penimbangan){ //function edit_data untuk menampilkan halaman edit data anak
		$where = array('id_penimbangan' => $id_penimbangan);
		$data['user'] = $this->Data_Penimbangan_model->edit_data($where, 'data_penimbangan')->result();
		$data['id_anakk'] = $this->input->get('id_anakk');
		$this->template->views('Admin2/edit-data-per-id', $data);
	}

	public function update($id_anakk) { //function update untuk mengubah data anak
		$id_penimbangan = $this->input->post('id_penimbangan');
		$bb_anak = $this->input->post('bb_anak');
		$tb_anak = $this->input->post('tb_anak');
		$tgl_timbang_anak = $this->input->post('tgl_timbang_anak');
		
		$data = array( //array data untuk menampung inputan data
			'bb_anak' => $bb_anak,
			'tb_anak' => $tb_anak,
			'tgl_timbang_anak' => $tgl_timbang_anak,
		);

		$where = array(
			'id_penimbangan' => $id_penimbangan
		);
		$this->Data_Penimbangan_model->update_data($where,$data, 'data_penimbangan');
		//untuk mengakses function update_data dari file model 'Data_Penimbangan_model' pada tabel 'data_penimbangan'
		redirect('Data_Penimbangan/data_per_anak/' . $id_anakk); //setelah data berhasil diubah, halaman web otomatis beralih ke controller Data_Penimbangan dengan function data_per_anak 
	}
	public function hapus_data($id_penimbangan) //function untuk hapus data anak
	  {
	  	$where = array('id_penimbangan' => $id_penimbangan);
	      $hapus_data = $this->Data_Penimbangan_model->hapus($id_penimbangan, $where, 'data_penimbangan');
	      redirect('Data_Penimbangan/data_per_anak/'. $this->input->get('id_anakk'));
	   
	    
	  }
	 
	public function cek_status ($id_penimbangan){ //function detail_data untuk melihat detail data penimbangan
		$this->load->model('SPK_model', 'm'); 
		$where = array('id_penimbangan' => $id_penimbangan);
		//$data['user'] = $this->Data_Penimbangan_model->detail_data($where, 'data_penimbangan')->result();
		//$data['id_anakk'] = $this->input->get('id_anakk');
		//$data['dataset'] = $this->Data_Penimbangan_model->getData($where, 'dataset');

		$data = [
			'judul' => 'Halaman Utama',
			'dataset' => $this->m->getData(), // get All data
			'user' => $this->Data_Penimbangan_model->detail_data($where, 'data_penimbangan')->result(),
			'id_anakk' => $this->input->get('id_anakk')
		];
		$this->template->views('Admin2/view-cek-status-gizi', $data);
	}


	public function uji_data($id_penimbangan)
	{
		$this->load->model('Data_Penimbangan_model');
		$this->load->model('SPK_model', 'm');
		$where = array('id_penimbangan' => $id_penimbangan);
		$data = [
			'judul' => 'Halaman Utama',
			'dataset' => $this->m->getData(), // get All data
			'user' => $this->Data_Penimbangan_model->detail_data($where, 'data_penimbangan')->result(),
			'id_anakk' => $this->input->get('id_anakk')
		];

		//$data['user'] = $this->Data_Penimbangan_model->detail_data($where, 'data_penimbangan')->result();
		//$data['id_anakk'] = $this->input->get('id_anakk');
		$id_penimbangan = $this->input->post('id_penimbangan');
		$proses = $this->input->post('proses');
		if (!isset($proses)) {
			redirect('Data_Penimbangan/cek_status');
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
			'dataset' => $this->m->getData(),
			'jenis_kelamin' => $jenis_kelamin,
			'umur' => $umur,
			'bb' => $bb,
			'tb' => $tb,
			'kesimpulan' => $kesimpulan,
			'jenis_statusgizi' => $jenisStatusgizi,
			'hasil_baik' => $pciStatusGiziBaik,
			'hasil_kurang' => $pciStatusGiziKurang,
			'user' => $this->Data_Penimbangan_model->detail_data($where, 'data_penimbangan')->result(),
			'id_anakk' => $this->input->get('id_anakk')

		];

		$this->session->set_flashdata('hasil', 'ok');
		$this->template->views('Admin2/view-cek-status-gizi', $data);
	}


}
?>