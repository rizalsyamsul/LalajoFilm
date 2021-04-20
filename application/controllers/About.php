<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        if($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = 'About Us';
            $this->load->view('templates/header',$data);
            $this->load->view('about');
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/footer');
	  	}else{
			$data['title'] = 'About Us';
            $this->load->view('templates/auth_header',$data);
            $this->load->view('about');
            $this->load->view('templates/auth_footer');
		}
    }
}
