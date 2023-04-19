<?php
class m_chart extends CI_Model{
 
 function lihat_perbulan($id_anakk)
 {
    
  $bc = $this->db->query("
  
  select
  ifnull((SELECT sum(bb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=1)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk') )),0) AS 'Januari',
  ifnull((SELECT sum(bb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=2)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Februari',
  ifnull((SELECT sum(bb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=3)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Maret',
  ifnull((SELECT sum(bb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=4)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'April',
  ifnull((SELECT sum(bb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=5)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Mei',
  ifnull((SELECT sum(bb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=6)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Juni',
  ifnull((SELECT sum(bb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=7)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Juli',
  ifnull((SELECT sum(bb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=8)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Agustus',
  ifnull((SELECT sum(bb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=9)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'September',
  ifnull((SELECT sum(bb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=10)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Oktober',
  ifnull((SELECT sum(bb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=11)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'November',
  ifnull((SELECT sum(bb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=12)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Desember'
 from data_penimbangan WHERE ((id_anakk)='$id_anakk') GROUP BY YEAR(tgl_timbang_anak) 
  
  ");
  return $bc;
  
 }
 
 function lihat_tb_perbulan($id_anakk)
 {
    
  $bc = $this->db->query("
  
  select
  ifnull((SELECT sum(tb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=1)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Januari',
  ifnull((SELECT sum(tb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=2)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Februari',
  ifnull((SELECT sum(tb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=3)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Maret',
  ifnull((SELECT sum(tb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=4)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'April',
  ifnull((SELECT sum(tb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=5)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Mei',
  ifnull((SELECT sum(tb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=6)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Juni',
  ifnull((SELECT sum(tb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=7)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Juli',
  ifnull((SELECT sum(tb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=8)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Agustus',
  ifnull((SELECT sum(tb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=9)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'September',
  ifnull((SELECT sum(tb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=10)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Oktober',
  ifnull((SELECT sum(tb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=11)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'November',
  ifnull((SELECT sum(tb_anak) FROM (data_penimbangan)WHERE((Month(tgl_timbang_anak)=12)AND (YEAR(tgl_timbang_anak)=2022) AND ((id_anakk)='$id_anakk'))),0) AS 'Desember'
 from data_penimbangan WHERE ((id_anakk)='$id_anakk') GROUP BY YEAR(tgl_timbang_anak) 
  
  ");
  return $bc;
  
 }


}
?>