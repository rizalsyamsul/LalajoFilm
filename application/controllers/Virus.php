<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Virus extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = 'Virus';
            $this->load->view('templates/header', $data);
            $this->load->view('virus');
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/footer');
        } else {
            $data['title'] = 'Virus';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('virus');
            $this->load->view('templates/auth_footer');
        }
    }
}
