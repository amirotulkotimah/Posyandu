<?php
Class Laporan_Anak_pdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('cetak_pdf');
    }
    
    function index(){
       $pdf = new FPDF('P','mm','A4'); //L = lanscape P= potrait
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        $ya = 44;
        // mencetak string 
        $pdf->Cell(190,7,'POSYANDU ANGGREK',0,1,'C');
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(190,7,'Data Anak',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(20,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(28,6,'NIK',1,0);
        $pdf->Cell(38,6,'Nama',1,0);
         $pdf->Cell(15,6,'Anak ke',1,0);
        $pdf->Cell(25,6,'Jenis Kelamin',1,0);
        $pdf->Cell(25,6,'Tempat Lahir',1,0);
        $pdf->Cell(25,6,'Tanggal Lahir',1,0);
        //$pdf->Cell(31,6,'Nama Ortu',1,1);
        $pdf->SetFont('Arial','',10);
        $data = $this->db->get('data_anak')->result();
        $no=1;
        foreach ($data as $row){
        
            $pdf->Cell(10,6,$no++,1,0);
            $pdf->Cell(28,6,$row->nik,1,0);
            $pdf->Cell(38,6,$row->nama,1,0);
            $pdf->Cell(15,6,$row->anak_ke,1,0);
            $pdf->Cell(25,6,$row->jenis_kelamin,1,0);
            $pdf->Cell(25,6,$row->tempat_lahir,1,0);
            $pdf->Cell(25,6,$row->tanggal_lahir,1,0);
            //$pdf->Cell(31,6,$row->nama_ortu,1,1);
        }
        $pdf->Output();
    }

    
}
