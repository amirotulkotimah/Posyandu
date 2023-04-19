<?php

class c_grafik extends CI_Controller {
 
 function __construct(){
        parent:: __construct();
        
        $this->load->model('m_chart');
         $this->load->database();
    }

 public function lihat()
 {
       $data = [
                      'id_anakk' => $this->input->get('id_anakk')
                     ];
       foreach($this->m_chart->lihat_perbulan($data['id_anakk'])->result_array() as $row)
  {
   $data['bb1'][]=(float)$row['Januari'];
   $data['bb2'][]=(float)$row['Februari'];
   $data['bb3'][]=(float)$row['Maret'];
   $data['bb4'][]=(float)$row['April'];
   $data['bb5'][]=(float)$row['Mei'];
   $data['bb6'][]=(float)$row['Juni'];
   $data['bb7'][]=(float)$row['Juli'];
   $data['bb8'][]=(float)$row['Agustus'];
   $data['bb9'][]=(float)$row['September'];
   $data['bb10'][]=(float)$row['Oktober'];
   $data['bb11'][]=(float)$row['November'];
   $data['bb12'][]=(float)$row['Desember'];
  }

  foreach($this->m_chart->lihat_tb_perbulan($data['id_anakk'])->result_array() as $row)
  {
   $data['tb1'][]=(float)$row['Januari'];
   $data['tb2'][]=(float)$row['Februari'];
   $data['tb3'][]=(float)$row['Maret'];
   $data['tb4'][]=(float)$row['April'];
   $data['tb5'][]=(float)$row['Mei'];
   $data['tb6'][]=(float)$row['Juni'];
   $data['tb7'][]=(float)$row['Juli'];
   $data['tb8'][]=(float)$row['Agustus'];
   $data['tb9'][]=(float)$row['September'];
   $data['tb10'][]=(float)$row['Oktober'];
   $data['tb11'][]=(float)$row['November'];
   $data['tb12'][]=(float)$row['Desember'];
  }
  

  $this->template->views('Admin2/v_grafik',$data);
 }

}