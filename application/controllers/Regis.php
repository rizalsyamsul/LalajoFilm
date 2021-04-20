<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }



    public function register()
    {
      $this->form_validation->set_rules('nama_depan', 'Nama_depan', 'required|trim');
      $this->form_validation->set_rules('nama_belakang', 'Nama_belakang', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
          'valid_email' => 'Email tidak valid!',
          'is_unique' => 'Email telah terdaftar!'
      ]);
      $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
          'is_unique' => 'Username sudah digunakan!'
      ]);
      $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[repassword]', [
          'matches' => 'password dan re-password harus sama!',
          'min_length' => 'Password terlalu pendek!'
      ]);
      $this->form_validation->set_rules('repassword', 'Repassword', 'required|trim|matches[password]');
      if ($this->form_validation->run() == FALSE) {
          $data['title'] = 'User Register';
          // $this->load->view('templates/auth_header', $data);
          $this->load->view('auth/register', $data);
          $this->load->view('templates/auth_footer');
      } else {
          $data = [
              'nama_depan' => $this->input->post('nama_depan', true),
              'nama_belakang' => $this->input->post('nama_belakang', true),
              'username' => $this->input->post('username'),
              'email' => $this->input->post('email', true),
              'password' => $this->input->post('password')
          ];

          $this->M_Auth->insertUser($data);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun anda telah dibuat. Silahkan login</div>');
          redirect('auth');
      }

    }


}
