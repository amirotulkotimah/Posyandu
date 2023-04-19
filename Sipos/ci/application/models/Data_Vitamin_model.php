<?php
/**
 * 
 */
class Data_Vitamin_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_vitamin');// dari tabel tm_user
		$this->db->order_by('id_vitamin','DESC');
		//$this->db->join('jenis_vitamin', 'jenis_vitamin.id_jenis_vitamin = data_vitamin.id_vitamin', 'LEFT');		
		//$this->db->join('data_petugas', 'data_petugas.id_petugas = data_vitamin.id_vitamin', 'LEFT');
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
	public function data_terbaru()
	{
    	$this->db->select('*'); //memilih semua
    	$this->db->from('data_vitamin');
			//$this->db->join('jenis_vitamin', 'jenis_vitamin.id_jenis_vitamin = data_vitamin.jenis_vitamin', 'LEFT');
			//$this->db->join('data_petugas', 'data_petugas.id_petugas = data_vitamin.nama_petugas', 'LEFT');
    	$this->db->order_by('id_vitamin','DESC');
    	$this->db->limit(3);
    	$query = $this->db->get();
    	return $query;
    }
    function lihat_semua(){
		$this->db->select('*');
		$this->db->from('data_vitamin');
		$this->db->order_by('id_vitamin','DESC');
		//$this->db->join('jenis_vitamin', 'jenis_vitamin.id_jenis_vitamin = data_vitamin.jenis_vitamin', 'LEFT');
		//$this->db->join('data_petugas', 'data_petugas.id_petugas = data_vitamin.nama_petugas', 'LEFT');
		$query = $this->db->get();
		return $query;
	}
	function getByDate($data_from, $date_to){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_vitamin');
		$where = "tgl_vitamin BETWEEN '".$data_from."'AND'".$date_to."'";
		//$this->db->join('jenis_vitamin', 'jenis_vitamin.id_jenis_vitamin = data_vitamin.jenis_vitamin', 'LEFT');
		//$this->db->join('data_petugas', 'data_petugas.id_petugas = data_vitamin.nama_petugas', 'LEFT');	
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
		
	}
	function Tanggal($id_anakk, $date_from, $date_to){ //function buat filter by date and id jenis
		$this->db->select('*'); //memilih semua
		$this->db->from('data_vitamin');
		$where = "id_anakk = '" . $id_anakk . "' AND tgl_vitamin BETWEEN '".$date_from."'AND'".$date_to."'";
		$this->db->where($where);

		$query = $this->db->get();
		return $query;
		
	}
	function input_data($data, $table) { //membuat function input_data
		$this->db->insert($table,$data);
		//untuk proses insert data ke database
	}

	function detail_data($where,$table) {
		//$this->db->join('jenis_vitamin', 'jenis_vitamin.id_jenis_vitamin = data_vitamin.jenis_vitamin', 'LEFT');
		//$this->db->join('data_petugas', 'data_petugas.id_petugas = data_vitamin.nama_petugas', 'LEFT');
    	return $this->db->get_where($table, $where);
    }

	function edit_data($where,$table) {

		return $this->db->get_where($table, $where);
	}

	function update_data($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}
    
  public function hapus($id_vitamin, $where, $table)
  {
    $this->db->where('id_vitamin',$id_vitamin);
    $this->db->where($where);
    return $this->db->delete($table);
  }
  function lihat_data_anak($id_anakk){
		$this->db->select('*');
		$this->db->from('data_vitamin');
		//$this->db->join('jenis_vitamin', 'jenis_vitamin.id_jenis_vitamin = data_vitamin.jenis_vitamin', 'LEFT');
		//$this->db->join('data_petugas', 'data_petugas.id_petugas = data_vitamin.nama_petugas', 'LEFT');
		$this->db->where('id_anakk',$id_anakk);
		$this->db->order_by('id_vitamin','DESC');
		$query = $this->db->get();
		return $query;
	}
	function data_anak(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_anak');// dari tabel tm_user
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
	function count_all_vitamin()
    {
        return $this->db->get('data_vitamin')->num_rows();
    }
    function cari($id_anakk){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_vitamin');
		$where = "id_anakk ='".$id_anakk."'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
		}

		function lihat_perid($id_anakk){
		$this->db->select('*');
		$this->db->from('data_vitamin');
		$where = "id_anakk ='".$id_anakk."'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}
}
?>