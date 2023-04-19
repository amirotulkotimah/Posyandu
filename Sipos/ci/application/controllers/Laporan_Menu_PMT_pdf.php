<?php
Class Laporan_Menu_PMT_pdf extends CI_Controller{
    
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
        $pdf->Cell(190,7,'Data Menu PMT',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(20,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(35,6,'Tanggal',1,0);
        $pdf->Cell(100,6,'Nama Menu',1,0);
        $pdf->Cell(25,6,'Keterangan',1,1);
        $pdf->SetFont('Arial','',10);
        $data = $this->db->get('menu_pmt')->result();
        $no=1;
        foreach ($data as $row){
        
            $pdf->Cell(10,6,$no++,1,0);
            $pdf->Cell(35,6,$row->tanggal,1,0);
            $pdf->Cell(100,6,$row->nama_menu,1,0);
            $pdf->Cell(25,6,$row->ket,1,1);
        }
        $pdf->Output();
    } 
}