<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Hospital');
        $this->load->model('M_News');
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

    public function role()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Role';
        $data['role'] = $this->db->get('user_role')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }


    public function roleAccess($role_id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Role Access';
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1); //agar akses admin tidak diotak atik
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }
    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akses berhasil diubah!</div>');
    }

    public function news()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Isi Berita';

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/news/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'foto' => 'default.jpg'
            ];
            $this->M_News->insertNews($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berita berhasil ditambah!</div>');
            redirect('admin/news');
        }
    }


    public function listHospital()
    {
        $data['listHospital'] = $this->M_Hospital->getAllHospital();
        $data['title'] = 'List Hospital';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('slot', 'Slot', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/listhospital', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'slot' => $this->input->post('slot')
            ];
            $this->M_Hospital->insertHospital($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hospital berhasil ditambah!</div>');
            redirect('admin/listhospital');
        }
    }

    public function deleteHospital($id)
    {
        $this->M_Hospital->deleteHospital($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hospital berhasil dihapus!</div>');
        redirect('admin/listhospital');
    }

    public function editHospital($id)
    {
      $data['listHospital'] = $this->M_Hospital->getAllHospital();
      $data['title'] = 'Form Edit Info Hospital';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['rs'] = $this->M_Hospital->getHospitalById($id);

      $this->form_validation->set_rules('nama','nama','required');
      $this->form_validation->set_rules('alamat','alamat','required');
      $this->form_validation->set_rules('slot','slot','required');


      if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('admin/edithospital', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/footer');
      }else{
        $data = $this->M_Hospital->editHospital($id);
        if($this->db->affected_rows() > 0){
          $message = ['flash' => 'data changed successfully'];
          $this->session->set_flashdata($message);
          redirect('admin/listhospital');
        }
      }
    }
}
