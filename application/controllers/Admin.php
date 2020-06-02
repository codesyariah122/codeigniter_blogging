<?php
class Admin extends CI_Controller {
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['title'] = "Dashboard OurCitrus";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/admin/index', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function role()
    {
        $data['title'] = "Role Admin";
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/admin/role', $data);
        $this->load->view('Admin/templates/footer');
    }
}