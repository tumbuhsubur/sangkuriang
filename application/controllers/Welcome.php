<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$data['judul'] = 'Sanggar Tari Sangkuriang';
		$this->load->view('templates/welc_header', $data);
		$this->load->view('welcome/beranda');
		$this->load->view('templates/welc_footer');
	}

	public function pendaftaran()
	{

		$data['judul'] = 'Sanggar Tari Sangkuriang';
		$this->load->view('templates/welc_header', $data);
		$this->load->view('welcome/pendaftaran');
		$this->load->view('templates/welc_footer');
	}

	public function kelas()
	{

		$data['judul'] = 'Sanggar Tari Sangkuriang';
		$this->load->view('templates/welc_header', $data);
		$this->load->view('welcome/kelas');
		$this->load->view('templates/welc_footer');
	}

	public function pengajar()
	{

		$data['judul'] = 'Sanggar Tari Sangkuriang';
		$this->load->view('templates/welc_header', $data);
		$this->load->view('welcome/pengajar');
		$this->load->view('templates/welc_footer');
	}
}
