<?php
/**
 * 
 */
class Absensi_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('absen');// dari tabel tm_user
		$this->db->join('data_ortu', 'data_ortu.id_ortu = absen.id_orang_tua', 'LEFT');
		$this->db->order_by('id_absen','DESC');
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}


	function lihat_data_ortu($id_orang_tua){ //membuat function lihat_data_anak
		$this->db->select('*'); //memilih semua data
		$this->db->from('absen'); //dari tabel data_penimbangan
		$this->db->where('id_orang_tua',$id_orang_tua); //berdasarkan id_anakk
		$this->db->order_by('id_absen','DESC');
		$query = $this->db->get();
		return $query;
	}
	function input_data($data, $table) { //membuat function tambah data
		$this->db->insert($table,$data);
		//untuk proses insert data ke database
	}
	 function edit_data($where,$table) {
		return $this->db->get_where($table, $where);
	}

	function update_data($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}
    
   public function hapus($id_absen, $where, $table) //membuat function hapus_data
  {
    $this->db->where('id_absen',$id_absen); //berdasarkan id_penimbangan
    $this->db->where($where);
    return $this->db->delete($table); //untuk menghapus data pada database
  }
  function Tanggal($id_orang_tua, $date_from, $date_to){ //function buat filter by date and id jenis
		$this->db->select('*'); //memilih semua
		$this->db->from('absen');
		$where = "id_orang_tua = '" . $id_orang_tua . "' AND tanggal_absen BETWEEN '".$date_from."'AND'".$date_to."'";
		$this->db->where($where);

		$query = $this->db->get();
		return $query;
		
	}
	public function data_terbaru() //membuat function data_terbaru
	{
    	$this->db->select('*'); //memilih semua data
    	$this->db->from('absen'); //dari tabel data_penimbangan
    	$this->db->join('data_ortu', 'data_ortu.id_ortu = absen.id_orang_tua', 'LEFT');
    	$this->db->where('month(tanggal_absen)=',date('m'));
    	//$this->db->order_by('id_orang_tua','ASC'); //untuk menampilkan data penimbangan dari urutan terbawah
    	//$this->db->limit(30); //untuk menampilkan 3 data penimbangan
    	$query = $this->db->get();
    	return $query;
    }
    function cari($nm_ortu){ //membuat function cari data penimbangan
		$this->db->select('*'); //memilih semua data
		$this->db->from('absen'); // dari tabel data_penimbangan
		$where = "nm_ortu='".$nm_ortu."'"; //berdasarkan id_anakk
		//$this->db->join('data_ortu', 'data_ortu.id_ortu = absen.nm_ortu', 'LEFT');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
		}
	function lihat_perid($nm_ortu){ //membuat function lihat data penimbangan perid
		$this->db->select('*');
		$this->db->from('absen');
		$where = "nm_ortu ='".$nm_ortu."'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}
	function lihat_semua(){ //membuat function lihat_semua
		$this->db->select('*'); //memilih semua data
		$this->db->from('absen'); //dari tabel data_penimbangan
		$this->db->order_by('id_absen','DESC');
		$query = $this->db->get();
		return $query;
	}
  function getByDate($data_from, $date_to){ //membuat function getByDate
		$this->db->select('*'); //memilih semua data
		$this->db->from('absen'); //dari tabel data_penimbangan
		$where = "tanggal_absen BETWEEN '".$data_from."'AND'".$date_to."'"; 
		//dari kolom tgl_timbangan anak
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
		
	}
	public function save_absen($length)
    {
        for ($i = 1; $i <= $length; $i++) { // loop to retrieve all data
            $data = [
                'status_absen' => $this->input->post('status_absen' . $i),
                //'id_orang_tua' => $this->input->post('id_orang_tua' . $i),
                'tanggal_absen' => $this->input->post('tanggal_absen' . $i),
                'nm_ortu' => $this->input->post('nm_ortu' . $i),
               // 'tb' => $this->input->post('tb' . $i),
               // 'status_gizi' => $this->input->post('status_gizi' . $i)
            ];

            $query = $this->db->insert('absen', $data);
        }

        return $this->db->affected_rows($query); // return affected rows (-1, 1)
    }
    public function update_file($id_absen,$data)
  {
    $this->db->where('id_absen',$id_absen);
    return $this->db->update('absen',$data);
  }

	public function perbulan_absen() //membuat function data_terbaru
	{
    	$this->db->select('*'); //memilih semua data
    	$this->db->from('absen'); //dari tabel data_penimbangan
    	$this->db->where('month(tanggal_absen)=',date('m'));
    	$this->db->order_by('id_absen','DSC'); 
    	$query = $this->db->get();
    	return $query;
    }
}