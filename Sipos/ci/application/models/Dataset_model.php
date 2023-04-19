<?php 

class Dataset_model extends CI_Model{
	function getAll(){
		$this->db->select('*');
		$this->db->from('dataset');
		$query = $this->db->get();
		return $query;
	}

	function input_data($data, $table){
		$this->db->insert($table, $data);
	}

	function edit($where, $table){
		return $this->db->get_where($table, $where);
	}

	function update($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}
?>