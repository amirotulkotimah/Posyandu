<?php
class Data_Penimbangan_SPK extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua data
		$this->db->from('data_penimbangan'); //dari tabel data_penimbangan
		$this->db->join('data_anak', 'data_anak.id_anak = data_penimbangan.id_penimbangan');
		//menggabungkan tabel data penimbangan dengan tabel data anak
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
	function lihat_data_anak($id_anakk){ //membuat function lihat_data_anak
		$this->db->select('*'); //memilih semua data
		$this->db->from('data_penimbangan'); //dari tabel data_penimbangan
		$this->db->where('id_anakk',$id_anakk); //berdasarkan id_anakk
		$this->db->order_by('id_penimbangan','DESC'); //untuk menampilkan data penimbangan dari urutan terbawah
    	$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}
}