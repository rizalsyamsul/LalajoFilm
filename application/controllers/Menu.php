<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('M_Menu');
    }



    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Menu Management';

        $data['menu'] = $this->M_Menu->getMenu();


        $this->form_validation->set_rules('menu', 'Menu', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil ditambah!</div>');
            redirect('menu');
        }
    }

    public function deleteMenu($id)
    {
        $this->M_Menu->deleteMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil dihapus!</div>');
        redirect('menu');
    }

    public function editMenu($id)
    {
        // $data['listHospital'] = $this->M_Hospital->getAllHospital();
        $data['title'] = 'Form Edit MENU';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->M_Menu->getMenuById($id);

        $this->form_validation->set_rules('menu', 'menu', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('menu/editmenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = $this->M_Menu->editMenu($id);
            if ($this->db->affected_rows() > 0) {
                $message = ['flash' => 'data changed successfully'];
                $this->session->set_flashdata($message);
                redirect('menu');
            }
        }
    }

    public function editSubMenu($id)
    {
        $data['title'] = 'Form Edit SUBMENU';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['submenu'] = $this->M_Menu->getSubMenuById($id);
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('menu_id', 'menu_id', 'required');
        $this->form_validation->set_rules('url', 'url', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('menu/editsubmenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = $this->M_Menu->editSubMenu($id);
            if ($this->db->affected_rows() > 0) {
                $message = ['flash' => 'data changed successfully'];
                $this->session->set_flashdata($message);
                redirect('menu/submenu');
            }
        }
    }


    //controller submenu
    public function submenu()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Submenu Management';
        $this->load->model('M_Menu');

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu'] = $this->M_Menu->getSubMenu();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu berhasil ditambah!</div>');
            redirect('menu/submenu');
        }
    }
    public function deleteSubMenu($id)
    {
        $this->M_Menu->deleteSubMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu berhasil dihapus!</div>');
        redirect('menu/submenu');
    }
}
