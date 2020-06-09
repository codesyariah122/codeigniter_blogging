<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Post extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Data', 'post');
    }

    public function index()
    {
        $data['login'] = $this->session->userdata('email');
        $config['base_url'] = base_url('post/index'); //site url
        $config['total_rows'] = $this->M_Data->countAllpost(); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Previous';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['post'] = $this->post->infoterbaru($config["per_page"], $data['page']);    
        $data['pagination'] = $this->pagination->create_links();
        $link = $this->uri->segment(1);
        $data['MainSlide'] = $this->db->query("SELECT * FROM `slide_img` WHERE `link` = '$link'")->result();
        // var_dump($data['MainSlide']); die;
        
        $data['post_index'] = $this->db->query("SELECT * FROM `info_terbaru`")->result();
        $data['index_title'] = ucwords($data['MainSlide'][0]->header);
        $data['short_title'] = "OurCitrus News | ".$this->uri->segment(1);
        $data['og_title'] = "OurCitrus News | ".$this->uri->segment(1);
        $data['og_description'] = $data['MainSlide'][0]->truncate;
        $data['og_url'] = base_url().$this->uri->segment(1).'/';        
        for($i=0; $i<=count($data['post_index'])-1; $i++){
           $data['og_image'] = base_url('assets/images/post/').$data['post_index'][$i]->image;
        }
        $this->template->myLayout('post/index', $data);
    }
    
    public function insertPost()
    {
        $data['title'] = "Ourcitrus News";
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('content', 'Content', 'required|trim');

        if($this->form_validation->run() == false){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed Added New Post<br/>
            </div>');
            redirect('Layout/infoterbaru');
                $this->load->view('Admin/templates/header', $data);
                $this->load->view('Admin/templates/sidebar', $data);
                $this->load->view('Admin/templates/topbar', $data);
                $this->load->view('Admin/post/index', $data);
                $this->load->view('Admin/templates/footer');

        }else{
            $this->M_Data->insertpost();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> New Post success Created</div>');
            redirect('Layout/infoterbaru');
        }
    }

    public function editpost($id)
    {
        $data['title'] = "Edit News";
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $where = ['id' => $id];
        $data['post'] = $this->M_Data->editpost($where, 'info_terbaru');
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('post/editpost', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function updatepost()
    {
        $id=$this->input->post('id');
        //var_dump($data['old']); ; die;
        $judul = $this->input->post('judul');
        $where = ['id' => $id];
        $data['post'] = $this->M_Data->editpost($where, 'info_terbaru');
        //var_dump($data['post']);die;
        $image = $data['post']['image'];
        //echo $image; die;
        $content = $this->input->post('content');
		$date = time();
        $url = str_replace(' ', '-', $judul);
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('content', 'Content', 'required');
        if($this->form_validation->run() == true){
            $upload_image = $_FILES['image']['name'];
            if($upload_image){
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '5048';
                $config['upload_path'] = './assets/images/post/';
                $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                        if($image != 'dummy-post.jpg'){
                            unlink(FCPATH.'./assets/images/post/'.$image);
                            $image = $data['old']['image'];
                        }
                        $image = $this->upload->data('file_name');
                        //$this->db->set('image', $image);
                    }else{
                        echo $this->upload->display_errors();
                    }
            }

            $data = [
                'judul' => $judul,
                'image' => $image,
                'content' => $content,
                'url' => $url,
                'date_post_update' => $date
            ];
            $where = ['id' => $id];
            $this->M_Data->updatepost($where, $data, 'info_terbaru');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Update Post success</div>');
            redirect('Layout/infoterbaru');
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Update Post failed</div>');
            redirect('Post/editpost');
        }
    }

    public function deletepost($id)
    {
       $where = ['id' => $id];
       $this->M_Data->deletepost($where, 'info_terbaru');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Post Has been Deleted</div>');
        redirect('Layout/infoterbaru');
    }

    public function read()
    {
        $url = $this->uri->segment(3);
        $query = $this->db->get_where('info_terbaru', ['url' => $url])->row_array();
        // echo "<pre>";
        // var_dump($query);
        // echo "</pre>"; 
        // echo $query['url'];
        // die;
        $link = str_replace('-',' ',$query['url']);
        $data['index_title'] = $link;
        // $query = $this->db->get('info_terbaru')->row_array();
        // $link = strtolower($query['judul']);
        $data['viewpost'] = $this->post->viewpost();
        // var_dump($data['viewpost']);
        // echo "<br/><br/>\n";
        // echo $data['viewpost'][0]->image;
        // die;
        $data['index_title'] = "Ourcitrus News | ".$this->uri->segment(3);
        $data['og_title'] = $data['viewpost'][0]->content;
        $data['og_author'] = $data['viewpost'][0]->author;
        $data['header_title'] = $data['viewpost'][0]->judul;
        $data['short_title'] = $this->uri->segment(3);
        $data['og_url'] = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3).'/';
        $data['og_description'] = $data['viewpost'][0]->content;
        $data['og_image'] = base_url('assets/images/post/').$data['viewpost'][0]->image;

        $this->template->myLayout('post/read', $data);
    }


}