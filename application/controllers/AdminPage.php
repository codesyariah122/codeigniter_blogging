<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        if(!$this->session->userdata('email')){
            redirect('auth');
        }
    }
    public function index()
    {
        $email = $this->session->userdata('email');
        $query = "SELECT * FROM `user` INNER JOIN `user_role` 
        ON `user`.`role_id` = `user_role`.`role_id`
        WHERE email = '$email'";
        $user = $this->db->query($query)->row_array();

        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        // var_dump($user); die;
        $data['title'] = "Dashboard Ourcitrus";
        $data['profileperusahaan'] = [
                                        'nama' => 'PT gemilang citrus berjaya<br/>
                                        indonesia<br/>',
                                        'alamat' => 'Mutiara Regency Blok A1<br/>
                                        No. 55 , Sidoarjo<br/>
                                        Jawa Timur<br/>
                                        Indonesia'
        ];
        if($this->session->userdata('role') != "Administrator" AND $this->session->userdata('role') != "WebDeveloper"):
            redirect($user['link']);
        else:
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/admin/index', $data);
        $this->load->view('Admin/templates/footer');
        endif;
    }

    public function role()
    {
        $data['title'] = "Role Users";
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/admin/role', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function insertRole()
    {
        $this->form_validation->set_rules('role', 'Role', 'trim|required');
        if($this->form_validation->run() == false):
            $this->session->set_flashdata('message', 
			'<div class="alert alert-danger" role="alert">
              Error ! .. <br/>
              Failed Add New Role
			</div>');
        redirect('AdminPage/role');
        else:
            $data = [
                        'role' => htmlspecialchars(stripslashes($this->input->post('role')))
                    ];
            $this->db->insert('user_role', $data);
            $this->session->set_flashdata('message', 
			'<div class="alert alert-success" role="alert">
			  Congratulation new role has been add
			</div>');
             redirect('AdminPage/role');
        endif;
    }

    public function roleAccess($role_id)
    {
        $data['title'] = "Role Access";
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['role_id'=>$role_id])->row_array();
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/admin/role-access', $data);
        $this->load->view('Admin/templates/footer');
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
        if($result->num_rows() < 1){
            $this->db->insert('user_access_menu', $data);
        }else{
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Access Change</div>');

    }

   

 

}