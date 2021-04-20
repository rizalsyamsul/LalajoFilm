<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hospital extends CI_Controller {



	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_Hospital');
	}

	public function index()
	{
		if($this->session->userdata('email')) {
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['title'] = 'Hospitals';
			$this->load->view('templates/header',$data);
			$this->load->view('Hospital');
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/footer');
	  	}else{
			$data['title'] = 'Hospitals';
			$this->load->view('templates/auth_header',$data);
			$this->load->view('Hospital');
			$this->load->view('templates/auth_footer');
		}
	}


}
?>
