<?php
class Laporanpdf extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('pdf');
  }

  function index()
  {
    $pdf = new FPDF('l', 'mm', 'A5');
    // membuat halaman baru
    $pdf->AddPage();
    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial', 'B', 16);
    // mencetak string 
    $pdf->Cell(190, 7, 'Sanggar Tari Sangkuriang', 0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 7, 'Daftar Peserta Tari', 0, 1, 'C');
    // Memberikan space kebawah agar tidak terlalu rapat
    $pdf->Cell(10, 7, '', 0, 1);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(20, 6, 'id', 1, 0);
    $pdf->Cell(85, 6, 'Nama', 1, 0);
    $pdf->Cell(27, 6, 'Email', 1, 0);
    $pdf->Cell(25, 6, 'Tanggal Bergabung', 1, 1);
    $pdf->SetFont('Arial', '', 10);
    $siswa = $this->db->get('user')->result();
    foreach ($siswa as $row) {
      $pdf->Cell(20, 6, $row->id, 1, 0);
      $pdf->Cell(85, 6, $row->name, 1, 0);
      $pdf->Cell(27, 6, $row->email, 1, 0);
      $pdf->Cell(25, 6, $row->date_created, 1, 1);
    }
    $pdf->Output();
  }
}
