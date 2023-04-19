<?php
/**
 * 
 */
class Data_Petugas_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_petugas');// dari tabel tm_user
		$this->db->order_by('nama_petugas', 'ASC');
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}

	function input_data($data, $table) { //membuat function input_data
		$this->db->insert($table,$data);
		//untuk proses insert data ke database
	}

	function detail_data($where,$table) {
	$this->db->select('*'); //memilih semua
		$this->db->from('data_petugas');// dari tabel tm_user
		$this->db->where('id_petugas', $where);//
		$query = $this->db->get();
		return $query;
	}

	function edit_data($where,$table) {
		return $this->db->get_where($table, $where);
	}

	function update_data($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}
    
    function hapus_data($where, $table) {
    $this->db->where($where);
    $this->db->delete($table);
}
}
?>