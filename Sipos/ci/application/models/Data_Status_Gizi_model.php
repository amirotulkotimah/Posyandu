<?php
/**
 * 
 */
class Data_Status_Gizi_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('status_gizi');// dari tabel tm_user
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}

	function tambah(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('status_gizi');// dari tabel tm_user
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}

	function detail_data($where,$table) {
	$this->db->select('*'); //memilih semua
		$this->db->from('status_gizi');// dari tabel tm_user
		$this->db->where('id_status_gizi', $where);//
		$query = $this->db->get();
		return $query;
	}
    
    function hapus_data($where, $table) {
    $this->db->where($where);
    $this->db->delete($table);
	}

	function count_all_status_gizi()
    {
        return $this->db->get('status_gizi')->num_rows();
    }

    function getByDate($data_from, $date_to){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('status_gizi');
		$where = "tgl_status_gizi BETWEEN '".$data_from."'AND'".$date_to."'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
		
	}
}
?>