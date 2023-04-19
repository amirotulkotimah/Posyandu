<?php
/**
 * 
 */
class Anak_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_anak');// dari tabel tm_user
		//$where = "id_anak".$id_anakk;
		//$this->db->where("id_anak", $id_anakk);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}

	function tambah($id_anakk){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_anak');// dari tabel tm_user
		//$where = "id_anak".$id_anakk;
		$this->db->where("id_anak", $id_anakk);
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}

	function tampil_nama($id_anakk){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_anak');// dari tabel tm_user
		//$where = "id_anak".$id_anakk;
		$this->db->where("id_anak", $id_anakk);
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
}
?>