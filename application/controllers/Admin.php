<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('pdf');
  }

  public function index()
  {
    $data['judul'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //testing berhasil login + ambil data
    // echo 'Selamat datang ' . $data['user']['name'] . ' ' . $data['user']['email'];

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');
  }

  public function cetakpdf()
  {
    $data['judul'] = 'Cetak PDF';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //testing berhasil login + ambil data
    // echo 'Selamat datang ' . $data['user']['name'] . ' ' . $data['user']['email'];

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/cetakpdf', $data);
    $this->load->view('templates/footer');
    $pdf = new FPDF('l', 'mm', 'A5');
    // membuat halaman baru
    $pdf->AddPage();
    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial', 'B', 16);
    // mencetak string 
    $pdf->Cell(190, 7, 'Sanggar Tari Sangkuriang', 0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 7, 'Cetak Data User dalam PDF', 0, 1, 'C');
    // Memberikan space kebawah agar tidak terlalu rapat
    $pdf->Cell(10, 7, '', 0, 1);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(20, 6, 'id', 1, 0);
    $pdf->Cell(85, 6, 'Nama User', 1, 0);
    $pdf->Cell(27, 6, 'Email', 1, 0);
    $pdf->Cell(25, 6, 'Tanggal Pendaftaran', 1, 1);
    $pdf->SetFont('Arial', '', 10);
    $semua = $this->db->get('user')->result();
    foreach ($semua as $row) {
      $pdf->Cell(20, 6, $row->id, 1, 0);
      $pdf->Cell(85, 6, $row->name, 1, 0);
      $pdf->Cell(27, 6, $row->email, 1, 0);
      $pdf->Cell(25, 6, $row->date_created, 1, 1);
    }
    $pdf->Output();
  }
}
