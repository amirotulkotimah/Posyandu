<?php
/**
 * 
 */
class Role_Ortu_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua data
		$this->db->from('data_ortu');// dari tabel data_ortu
		//$this->db->order_by('nama_ortu', 'ASC'); //untuk mengurutkan nama ortu dari yang terkecil (A-Z)
		//$this->db->join('absen', 'absen.id_absen = data_ortu.id_ortu', 'LEFT');
		//$this->db->where('month(tanggal_absen)=',date('m'));
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
}