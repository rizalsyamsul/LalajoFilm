<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class film extends CI_Controller {



	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_Film');
	}

	public function index()
	{
		if($this->session->userdata('email')) {
      $data = $this->M_Film->getAllFilm();
      $data['title'] = 'Films';
			$this->load->view('templates/header',$data);
			$this->load->view('Film');
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/footer');
	  	}else{
			$data['title'] = 'Films';
			$this->load->view('templates/auth_header',$data);
			$this->load->view('Film');
			$this->load->view('templates/auth_footer');
		}
	}


}
?>
