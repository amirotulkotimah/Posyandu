<?php
/**
 * 
 */
class Data_Penimbangan_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua data
		$this->db->from('data_penimbangan'); //dari tabel data_penimbangan
		$this->db->join('data_anak', 'data_anak.id_anak = data_penimbangan.id_penimbangan');
		$this->db->order_by('id_penimbangan','DESC');
		//menggabungkan tabel data penimbangan dengan tabel data anak
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
	public function data_terbaru() //membuat function data_terbaru
	{
    	$this->db->select('*'); //memilih semua data
    	$this->db->from('data_penimbangan'); //dari tabel data_penimbangan
    	$this->db->order_by('id_penimbangan','DESC'); //untuk menampilkan data penimbangan dari urutan terbawah
    	$this->db->limit(3); //untuk menampilkan 3 data penimbangan
    	$query = $this->db->get();
    	return $query;
    }
    function lihat_semua(){ //membuat function lihat_semua
		$this->db->select('*'); //memilih semua data
		$this->db->from('data_penimbangan'); //dari tabel data_penimbangan
		$this->db->order_by('id_penimbangan','DESC');
		$query = $this->db->get();
		return $query;
	}

	function getByDate($data_from, $date_to){ //membuat function getByDate
		$this->db->select('*'); //memilih semua data
		$this->db->from('data_penimbangan'); //dari tabel data_penimbangan
		$where = "tgl_timbang_anak BETWEEN '".$data_from."'AND'".$date_to."'"; 
		//dari kolom tgl_timbangan anak
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
		
	}

	function Tanggal($id_anakk, $date_from, $date_to){ //function buat filter by date and id jenis
		$this->db->select('*'); //memilih semua
		$this->db->from('data_penimbangan');
		$where = "id_anakk = '" . $id_anakk . "' AND tgl_timbang_anak BETWEEN '".$date_from."'AND'".$date_to."'";
		$this->db->where($where);

		$query = $this->db->get();
		return $query;
		
	}
	function input_data($data, $table) { //membuat function tambah data
		$this->db->insert($table,$data);
		//untuk proses insert data ke database
	}

	function detail_data($where,$table) { //membuat function detail_data
    	return $this->db->get_where($table, $where);
    }

	function edit_data($where,$table) { //membuat function edit_data
		return $this->db->get_where($table, $where);
	}

	function update_data($where,$data,$table) { //membuat function update_data
		$this->db->where($where);
		$this->db->update($table, $data); //untuk mengubah data pada database
	}
    
  public function hapus($id_penimbangan, $where, $table) //membuat function hapus_data
  {
    $this->db->where('id_penimbangan',$id_penimbangan); //berdasarkan id_penimbangan
    $this->db->where($where);
    return $this->db->delete($table); //untuk menghapus data pada database
  }

	function lihat_data_anak($id_anakk){ //membuat function lihat_data_anak
		$this->db->select('*'); //memilih semua data
		$this->db->from('data_penimbangan'); //dari tabel data_penimbangan
		$this->db->where('id_anakk',$id_anakk); //berdasarkan id_anakk
		$this->db->order_by('id_penimbangan','DESC');
		$query = $this->db->get();
		return $query;
	}
	function data_anak(){ //membuat function data_anak
		$this->db->select('*'); //memilih semua data
		$this->db->from('data_anak');// dari tabel data_anak
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
	function count_all_penimbangan() //membuat function count_all_penimbangan
    {
        return $this->db->get('data_penimbangan')->num_rows(); //untuk menghitung jumlah data penimbangan
    }

    function tampil_bb_01(){
      	$this->db->select('*'); 
      	$this->db->from('data_penimbangan'); 
				$this->db->where('month(tgl_timbang_anak)', date('01'));      	
				//$this->db->where('id_anakk',$id_anakk);
      	$query = $this->db->get(); 
      	return $query->num_rows;
  }
  function tampil_data(){
      $this->db->select('bb_anak'); 
      	$this->db->from('data_penimbangan'); 
				$this->db->where('month(tgl_timbang_anak)', date('01'));      	
      	$query = $this->db->get(); 
      	return $query;
  }
	
	function print_data($data_from, $date_to){ //membuat function print_data
		$this->db->select('*'); //memilih semua
		$this->db->from('data_penimbangan');
		$where = "tgl_timbang_anak BETWEEN '".$data_from."'AND'".$date_to."'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
		}

	function cari($id_anakk){ //membuat function cari data penimbangan
		$this->db->select('*'); //memilih semua data
		$this->db->from('data_penimbangan'); // dari tabel data_penimbangan
		$where = "id_anakk ='".$id_anakk."'"; //berdasarkan id_anakk
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
		}

		function lihat_perid($id_anakk){ //membuat function lihat data penimbangan perid
		$this->db->select('*');
		$this->db->from('data_penimbangan');
		$where = "id_anakk ='".$id_anakk."'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}

	function filter_print_perid($id_anakk, $date_from, $date_to){ //function buat filter by date and id anakk
		$this->db->select('*'); //memilih semua
		$this->db->from('data_penimbangan');
		$where =  "tgl_timbang_anak BETWEEN '".$date_from."'AND'".$date_to."'" AND "id_anakk ='".$id_anakk."'" ;
		$this->db->where($where);

		$query = $this->db->get();
		return $query;
		
	}
	public function getData()
    {
        return $this->db->get('dataset')->result_array();
    }

    public function getStatusGizi($status = false)
    {
        if ($status == false) {
            return count($this->db->query("SELECT status_gizi FROM dataset")->result_array());
        } else {
            return count($this->db->query("SELECT status_gizi FROM dataset WHERE status_gizi = " . $status . " ")->result_array());
        }
    }

    public function getJK($jenis_kelamin, $status)
    {
        return count($this->db->query("SELECT jenis_kelamin FROM dataset WHERE jenis_kelamin = " . $jenis_kelamin . " && status_gizi = " . $status . " ")->result_array());
    }

    public function getUmur($umur, $status)
    {
        return count($this->db->query("SELECT umur FROM dataset WHERE umur = " . $umur . " && status_gizi = " . $status . " ")->result_array());
    }

    public function getBB($bb, $status)
    {
        return count($this->db->query("SELECT bb FROM dataset WHERE bb = " . $bb . " && status_gizi = " . $status . " ")->result_array());
    }

    public function getTB($tb, $status)
    {
        return count($this->db->query("SELECT tb FROM dataset WHERE tb = " . $tb . " && status_gizi = " . $status . " ")->result_array());
    }
}
?>