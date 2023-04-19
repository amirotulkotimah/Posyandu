<?php
/**
 * 
 */
class Data_Ortu_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua data
		$this->db->from('data_ortu');// dari tabel data_ortu
		$this->db->order_by('nama_ortu', 'ASC'); //untuk mengurutkan nama ortu dari yang terkecil (A-Z)
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}

	function input_data($data, $table) { //membuat function input_data
		$this->db->insert($table,$data);
		//untuk proses tambah data ke database
	}

	function detail_data($where,$table) { //membuat function detail_data
	$this->db->select('*'); //memilih semua data
		$this->db->from('data_ortu');// dari tabel data_ortu
		$this->db->where('id_ortu', $where); //berdasarkan id_ortu
		$query = $this->db->get();
		return $query;
	}

	function edit_data($where,$table) { //membuat function edit_data
		return $this->db->get_where($table, $where);
	}

	function update_data($where,$data,$table) { //membuat function update_data
		$this->db->where($where);
		$this->db->update($table, $data); //untuk proses ubah data ke database
	}
    
    function hapus_data($where, $table) { //membuat function hapus_data
    $this->db->where($where); 
    $this->db->delete($table); //untuk menghapus data dari database
}
	function tampil_nama($id_orang_tua){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_ortu');// dari tabel tm_user
		//$where = "id_anak".$id_anakk;
		$this->db->where("id_ortu", $id_orang_tua);
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
	function count_all_ortu() //membuat function count_all_anak
    {
        return $this->db->get('data_ortu')->num_rows(); //untuk menghitung jumlah data anak
    }
}
?>