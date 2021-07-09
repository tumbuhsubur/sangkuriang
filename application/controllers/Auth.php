<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }
  //buat password check angka dan huruf
  public function password_check($str)
  {
    if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
      return TRUE;
    }
    return FALSE;
  }

  public function index()
  {
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == false) {

      $data['judul'] = 'Login Page';
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/login');
      $this->load->view('templates/auth_footer');
    } else {
      //validasi jika sukses
      $this->_login();
    }
  }

  private function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['email' => $email])->row_array();
    // cek awal 
    // var_dump($user);
    // die;

    // jika usernya ada 
    if ($user) {
      // jika usernya aktif
      if ($user['is_active'] == 1) {
        // cek password
        if (password_verify($password, $user['password'])) {
          // berhasil
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id'],
            'image' => $user['image'],
            'date_created' => $user['date_created']
          ];
          $this->session->set_userdata($data);
          if ($user['role_id'] == 1) {
            redirect('admin');
          } else {
            redirect('user');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          Wrong password! </div>');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      This email has not been activated! </div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Email is not registered! </div>');
      redirect('auth');
    }
  }

  public function registration()
  {
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => 'This email already registered!'
    ]);
    // $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]|alpha_numeric|callback_password_check');  email|is_unique[user.email]
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
      'matches' => 'Password not match!',
      'min_length' => 'Password too short!'
    ]);
    //, ['matches' => 'Password not match!',   'min_length' => 'Password too short!' ])

    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    if ($this->form_validation->run() == false) {
      $data['judul'] = 'PromNet R2 - EJF';
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/registration');
      $this->load->view('templates/auth_footer');
    } else {
      // buat test 
      // echo 'data berhasil ditambahkan!';
      $data = [
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'image' => 'default.jpg',
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        // 'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'role_id' => 3,
        'is_active' => 1,
        'date_created' => time()
      ];

      $this->db->insert('user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Congratulations, your account has been created! Please login </div>');
      redirect('auth');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Congratulations, you have been logout!</div>');
    redirect('auth');
  }
}
