<?php
class Inventory extends CI_Controller {

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['title'] = "Stock Produk";
        $data['produk'] = $this->M_Data->inventory('produk_data');

        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/inventory/index', $data);
        $this->load->view('Admin/templates/footer');
    }
}