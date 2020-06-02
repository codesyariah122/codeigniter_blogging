<?php
date_default_timezone_set('Asia/Jakarta');

class UserPage extends CI_Controller {
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
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['title'] = "My Profile";
        $data['role'] = $this->session->userdata('role');
        $data['link'] = $this->session->userdata('link');

        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/user/index', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function UsersManagement()
    {
        $data['title'] = "Users Management";
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['users'] = $this->M_Data->Users();
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/user/usermanagement', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function activeuser()
    {
        $this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('is_active','Active', 'required');
        if($this->form_validation->run() == true){
            if(!$this->input->post('is_active')):
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Activated Failed<br/>
                    <small class="text-danger">Pleas check active checkbox</small>
                </div>');
            else:
            $id = $this->input->post('id');
            $email = $this->input->post('email');
            $query = "UPDATE `user` SET `email` = '$email', `is_active` = 1 WHERE `id_user` = $id";
            $this->db->query($query);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Activated Success</div>');
            redirect('UserPage/UsersManagement');
            endif;
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Activated Failed<br/>
            <small class="text-danger">Pleas check active checkbox</small>
            </div>');
            redirect('UserPage/UsersManagement');
        }
    }

        public function deleteuser($id)
        {
            $this->M_Data->deleteuser($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User Has been Deleted</div>');
            redirect('UserPage/UsersManagement');
        }

    public function changepassword()
    {
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['title'] = "Change Password";
        $data['role'] = $this->session->userdata('role');
        $data['link'] = $this->session->userdata('link');

        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/user/index', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function EditProfile()
    {  
        $data['title'] = "Edit Profile";
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $name = $this->session->userdata('name');
        $where =  ['name' => $name];
        $data['users'] = $this->M_Data->editprofile($where);
        // var_dump($data['users']); die;
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/user/editprofile', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function updateprofile()
    {
        $where = ['name'=>$this->session->userdata('name')];
        $query = $this->M_Data->editprofile($where);
        // var_dump($query);  die;
        if($query[0]->avatar){
            $avatar = $query[0]->avatar;
        }else{
            $avatar = 'user.png';
        }
        $id_user = $query[0]->id_user;
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $data_update = time();
        $upload_image = $_FILES['avatar'];
        // var_dump($upload_image); die;
                if($upload_image){
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size'] = '5048';
                    $config['upload_path'] = './assets/images/profile/';
                    $this->load->library('upload', $config);
                        if($this->upload->do_upload('avatar')){
                            if($avatar != $avatar){
                                unlink(FCPATH.'./assets/images/profile/'.$avatar);
                                $avatar = $avatar;
                            }
                            $avatar = $this->upload->data('file_name');
                        }else{
                            echo $this->upload->display_errors();
                        }
                }

        $data1 = [
            'name' => $name,
            'email' => $email,
            'avatar' => $avatar,
            'date_update' => $data_update
        ];
        // var_dump($data);die;
        $where1 = ['name' => $this->session->userdata('name')];
        $author = $name;
        $this->db->query("UPDATE `info_terbaru` SET `author` = '$author' WHERE `id_user` = $id_user");
        // var_dump($where2); die;
        $this->M_Data->updateprofile($where1, $data1, 'user');

        $this->session->set_userdata('name',$name);
 

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Update profile success</div>');
        redirect('UserPage');
    }


    public function BukuTamu()
    {
        $data['message'] = $this->db->get_where('buku_tamu')->result_array();
        $data['title'] = "Buku Tamu";
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/user/bukutamu', $data);
        $this->load->view('Admin/templates/footer');
    }



}