<?php
/**
 * 
 */
class Data_Menu_PMT_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('menu_pmt');// dari tabel tm_user
		//$this->db->join('data_anak', 'data_anak.id_anak = data_anak.id_anak', 'LEFT');
		$this->db->order_by('id_menu_pmt','DESC');
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
		$this->db->from('menu_pmt');// dari tabel tm_user
		$this->db->where('id_menu_pmt', $where);//
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
	function getByDate($data_from, $date_to){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('menu_pmt');
		$where = "tanggal BETWEEN '".$data_from."'AND'".$date_to."'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
		
	}

	function count_all_menu_pmt()
    {
        return $this->db->get('menu_pmt')->num_rows();
    }

    public function update_file($id_anak,$data)
  {
    $this->db->where('id_anak',$id_anak);
    return $this->db->update('data_anak',$data);
  }

}
?>