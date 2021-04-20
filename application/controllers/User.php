<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Auth');
        $this->load->model('M_Hospital');
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('Main', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'My Profil';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer');
    }

    public function members()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'List Members';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('user/listmembers', $data);
        $this->load->view('templates/footer');
    }

    public function appointment()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rs'] = $this->M_Hospital->getAllHospital();
        $data['title'] = 'Appointment Rumah Sakit';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('Main', $data);
        $this->load->view('user/Appointment', $data);
        $this->load->view('templates/footer', $data);
    }

    public function alertappointment()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rs'] = $this->M_Hospital->getAllHospital();
        $data['title'] = 'Appointment Rumah Sakit';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('Main', $data);
        $this->load->view('user/NewAppointment', $data);
        $this->load->view('templates/footer', $data);
    }

    public function insertAppointment()
    {

        $data = [
            'nama_depan' => $this->input->post('nama_depan'),
            'nama_belakang' => $this->input->post('nama_belakang'),
            'hospital' => $this->input->post('rumah_sakit'),
            'tanggal' => $this->input->post('tanggal')
        ];
        $id = $this->M_Hospital->getHospitalidByName($data['hospital']);
        $data2 = [
            'slot' => $this->M_Hospital->getHospitalSlotByName($data['hospital']) - 1
        ];
        $this->M_Hospital->editHospital2($id, $data2);
        $this->M_Auth->insertAppointment($data);
        $message = ['flash' => 'Appointment Berhasil Dibuat'];
        $this->session->set_flashdata($message);
        redirect('user/alertappointment');
    }

    public function editprofile()
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['title'] = 'Edit Profil';
      $id = $data['user']['id'];
      $this->form_validation->set_rules('namadepan','namadepan','required');
      $this->form_validation->set_rules('namabelakang','namabelakang','required');
      $this->form_validation->set_rules('email','email','required');
      $this->form_validation->set_rules('password','password','required');

      if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('Main', $data);
        $this->load->view('user/edit');
        $this->load->view('templates/footer');
      }else{
        $data = $this->M_Auth->editUser($id);

        if($this->db->affected_rows() > 0){
          $message = ['flash' => 'data changed successfully'];
          $this->session->set_flashdata($message);
          redirect('user');
        }
      }
    }

}
