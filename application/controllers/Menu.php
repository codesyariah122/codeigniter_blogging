<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model', 'menu');
        if(!$this->session->userdata('email')){
            redirect('auth');
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $data['title'] = "Menu Management";

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if($this->form_validation->run() == false):
            $this->load->view('Admin/templates/header', $data);
            $this->load->view('Admin/templates/sidebar', $data);
            $this->load->view('Admin/templates/topbar', $data);
            $this->load->view('Admin/menu/index', $data);
            $this->load->view('Admin/templates/footer');
        else:
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> New Menu Success Add</div>');
            redirect('menu');
        endif;
    }

    public function deletemenu($id)
    {
        $this->menu->deleteMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Has been Deleted</div>');
        redirect('menu');

    }

    public function submenu()
    {
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        //load model
        $data['title'] = "Submenu Management";
        $data['submenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if($this->form_validation->run() == false):
            $this->load->view('Admin/templates/header', $data);
            $this->load->view('Admin/templates/sidebar', $data);
            $this->load->view('Admin/templates/topbar', $data);
            $this->load->view('Admin/menu/submenu', $data);
            $this->load->view('Admin/templates/footer');
        else:
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> New Sub Menu Success Add</div>');
            redirect('menu/submenu');
        endif;
    }

    public function deletesubmenu($id)
    {
        $this->menu->deleteSubMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Has been Deleted</div>');
        redirect('menu/submenu');

    }

    public function editSubMenu()
    {
        
    }


}