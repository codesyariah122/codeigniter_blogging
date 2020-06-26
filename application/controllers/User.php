<?php
class User extends CI_Controller {
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['title'] = "Admin OurCitrus";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/user/index', $data);
        $this->load->view('Admin/templates/footer');
    }
}