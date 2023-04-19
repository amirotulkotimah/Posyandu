<?php

class SPK_model extends CI_Model
{
    public function getData()
    {
        return $this->db->get('dataset')->result_array();
    }

    public function save_data($length)
    {
        for ($i = 1; $i <= $length; $i++) { // loop to retrieve all data
            $data = [
                'jenis_kelamin' => $this->input->post('jenis_kelamin' . $i),
                'umur' => $this->input->post('umur' . $i),
                'bb' => $this->input->post('bb' . $i),
                'tb' => $this->input->post('tb' . $i),
                'status_gizi' => $this->input->post('status_gizi' . $i)
            ];

            $query = $this->db->insert('dataset', $data);
        }

        return $this->db->affected_rows($query); // return affected rows (-1, 1)
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
    function hapus($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}