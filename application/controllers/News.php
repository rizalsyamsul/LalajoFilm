<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function index()
    {
        $data['news'] = $this->db->get('news')->result_array();
        $data['title'] = 'News';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/auth_footer');
    }
}
