<?php
/**
 * 
 */
class Role_Anak_Dan_Penimbangan_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_anak');// dari tabel tm_user
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
}
}
?>