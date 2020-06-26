<?php
class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
	}
    public function index()
    {
        check_login();

        $this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if($this->form_validation->run() == false):
            $data['title'] = "Admin ourcitrus";
            $data['header'] = "Admin OurCitrus";
            $this->load->view('Admin/templates/auth_header', $data);
            $this->load->view('Admin/login', $data);
            $this->load->view('Admin/templates/auth_footer');
        else:
            $this->_login();
        endif;
    }

    public function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $query = "SELECT * FROM `user` INNER JOIN `user_role` 
                    ON `user`.`role_id` = `user_role`.`role_id`
                    WHERE email = '$email'";
       $user = $this->db->query($query)->row_array();
        // $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //var_dump($user);die;
        if($user){
            //print_r($user);die;
            if($user['is_active'] == 1):
                if(password_verify($password, $user['password'])):
                    $data = [
                                'name' => $user['name'],
                                'email' => $user['email'],
                                'status' => 'login',
                                'role' => $user['role'],
                                'link' => $user['link'],
                                'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    $fullname = $user['name'];
                    if($user['role_id'] == 1 OR $user['role_id'] == 6){
                        $this->session->set_flashdata('success', 'Hallo '.$fullname);
                        $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Hallo '.$fullname.'</div>');
                        redirect('AdminPage');
                    }else{
                        $this->session->set_flashdata('success', 'Hallo '.$fullname);
                        $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Hallo '.$fullname.'</div>');
                    redirect('UserPage');
                    }
                else:
                    $this->session->set_flashdata('errorpassword', 'Wrong password');
                    $this->session->set_flashdata('message', '<div class="alert alert-warning wrong" role="alert"> Wrong Password</div>');
                    redirect('auth');
                endif;
            else:
                $this->session->set_flashdata('activation', 'sory you account not active');
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Oh Sory ! Your email has not activited <br/><font color=firebrick>Pleas contact admin web ourcitrus : </font><a href="https://api.whatsapp.com/send?phone=6288222668778">Puji Ermanto</a> </div>');
                redirect('auth');
            endif;
        }else{
            $this->session->set_flashdata('register', 'sory you account not registered');
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered<br/><font color=firebrick>Pleas contact admin web ourcitrus : </font><a href="https://api.whatsapp.com/send?phone=6288222668778">Puji Ermanto</a> </div>');
            redirect('auth');
        }
    }

    public function registration()
    {
		//validasinya
		$this->form_validation->set_rules('name', 'Name', 'required|trim');

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', 
			[
				'is_unique' => 'This email has already registered'
			]);

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
				'matches' => 'password dont match!',
				'min_length' => 'password to short'
		]);

		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

	if($this->form_validation->run() == false):
		$data['title'] = "Registration Page";
		$this->load->view('Admin/templates/auth_header', $data);
		$this->load->view('Admin/registration');
		$this->load->view('Admin/templates/auth_footer');
	else:
		$data = [
					'name' => htmlspecialchars($this->input->post('name', true)),
					'email' => htmlspecialchars($this->input->post('email', true)),
					'avatar' => 'user.png',
					'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
					'role_id' => 2,
					'is_active' => 0,
					'date_created' => time()
				];

		$this->db->insert('user', $data);
		$this->session->set_flashdata('message', 
			'<div class="alert alert-success" role="alert">
			  Congratulation your email has been registered, Please login
			</div>');
		redirect('auth/');

	endif;
	}

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logout</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $data['title'] = "Access Blocked";
        $this->load->view('Admin/templates/auth_header', $data);
        $this->load->view('Admin/blocked', $data);
        $this->load->view('Admin/templates/auth_footer');
    }

}