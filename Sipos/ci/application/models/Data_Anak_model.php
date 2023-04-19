<?php
/**
 * 
 */
class Data_Anak_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua data
		$this->db->from('data_anak');// dari tabel data_anak
		$this->db->order_by('nama', 'ASC'); //untuk menampilkan nama anak dari yang terkecil (A-Z)
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}

	function input_data($data, $table) { //membuat function input_data
		$this->db->insert($table,$data);
		//untuk proses tambah data ke database
	}

	function detail_data($where,$table) { //membuat fuction edit_data
	$this->db->select('*'); //memilih semua
		$this->db->from('data_anak');// dari tabel data_anak
		$this->db->where('id_anak', $where); //berdasarkan id_anak
		$this->db->join('data_ortu', 'data_ortu.id_ortu = data_anak.nama_ortu', 'LEFT');
		//menggabungkan tabel data anak dengan tabel data orang tua
		$query = $this->db->get();
		return $query;
	}

	function edit_data($where,$table) { //membuat function edit_data
		return $this->db->get_where($table, $where); //memanggil tabel data anak
	}

	function update_data($where,$data,$table) { //membuat fuction update_data
		$this->db->where($where);
		$this->db->update($table, $data); //untuk mengubah data pada database
	}
    
    function hapus_data($where, $table) { //membuat function hapus_data
	    $this->db->where($where);
	    $this->db->delete($table); //untuk menghapus data pada database
		}

	function count_all_anak() //membuat function count_all_anak
    {
        return $this->db->get('data_anak')->num_rows(); //untuk menghitung jumlah data anak
    }

    public function data_terbaru() //membuat function data_terbaru
	{
    	$this->db->select('*'); //memilih semua data
    	$this->db->from('data_anak'); //dari tabel 'data_anak'
    	$this->db->order_by('id_anak','DESC'); //untuk menampilkan data anak dari urutan terbawah
    	$this->db->limit(3); //untuk menampilkan 3 data anak
    	$query = $this->db->get();
    	return $query;
    }
    function lihat_semua(){ //membuat function lihat_semua
		$this->db->select('*'); //memilih semua data
		$this->db->from('data_anak'); //dari tabel 'data_anak'
		$query = $this->db->get();
		return $query;
	}

}
?>