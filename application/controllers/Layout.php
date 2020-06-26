<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Layout_model', 'layout');
        if(!$this->session->userdata('email')){
            redirect('auth');
        }

    }
    public function index()
    {
        $data['title'] = "Management Layout";
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();

        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/layout/index', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function sliderLayout()
    {
        $data['title'] = "Slider Layout";
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['slider'] = $this->layout->SliderLayout();
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/layout/slider', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function editslider($id)
    {
        $data['title'] = "Slider Layout";
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $where = ['id' => $id];
        $data['slider'] = $this->layout->editslider($where);
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/layout/editslider', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function updateslider()
    {
        $id = $this->input->post('id');
        $query = $this->db->get_where('slide_img', ['id' => $id])->result();
        // $image = $query[0]->img;
        // echo $image."<br/>";
        // echo "<pre>";
        // var_dump($query);
        // echo "</pre>"; 
        // echo $id; die;
        if($query[0]->img == NULL){
            $image = "4.png";
        }else{
            $image = $query[0]->img;
        }
  
        $small = $this->input->post('small');
        $header = $this->input->post('header');
        $truncate = $this->input->post('truncate');
        $link = $this->input->post('link');

        $upload_image = $_FILES['img'];
        //var_dump($upload_images);die;
            if($upload_image){
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '5048';
                $config['upload_path'] = './assets/images/sliders/';
                $this->load->library('upload', $config);
                    if($this->upload->do_upload('img')){
                        if($image != $image){
                            unlink(FCPATH.'./assets/images/sliders/'.$image);
                            $image = $image;
                        }
                        $image = $this->upload->data('file_name');
                    }else{
                        echo $this->upload->display_errors();
                    }
                }

            $data = [
                'img' => $image,
                'small' => $small,
                'header' => $header,
                'truncate' => $truncate,
                'link' => $link
            ];
            $where = ['id'=>$id];
            $this->layout->updateslider($where, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Update slider image success</div>');
            redirect('Layout/sliderlayout');
    }

    public function deleteslider()
    {
        
    }

    public function infoterbaru()
    {
        $data['title'] = "Info Terbaru";
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        
        $config['base_url'] = base_url('Layout/infoterbaru'); //site url
        $config['total_rows'] = $this->layout->countAllpost(); //total row
        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
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
        $data['post'] = $this->layout->infoterbaru($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
    
        $data['num'] = 500;
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/layout/infoterbaru', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function singlepage()
    {
        $data['title'] = "Single Page";
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $link = ['profile perusahaan' => 'profilperusahaan', 'hall of fame'=>'halloffame', 'customer service'=>'customerservice'];
        $data['page'] = $this->db->get_where('single_page', ['link'=>'customerservice'])->result();
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/layout/page', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function halloffame()
    {
        $data['title'] = $this->uri->segment(2);
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $link = $this->uri->segment(2);
        $data['page'] = $this->layout->singlepageadmin(['link' => $link], "single_page");
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/layout/page/index', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function profilperusahaan()
    {
        $data['title'] = $this->uri->segment(2);
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $link = $this->uri->segment(2);

        $data['page'] = $this->layout->singlepageadmin(['link' => $link], "single_page");
        // var_dump($data['page']); die;
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/layout/page/index', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function customerservice()
    {
        $data['title'] = $this->uri->segment(2);
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $link = $this->uri->segment(2);

        $data['page'] = $this->layout->singlepageadmin(['link' => $link], "single_page");
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/layout/page/index', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function office()
    {
        $data['title'] = $this->uri->segment(2);
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $link = $this->uri->segment(2);
        $data['page'] = $this->layout->singlepageadmin(['link' => $link], "single_page");
        // var_dump($data['page']); die;
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/layout/page/index', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function view()
    {
        $data['title'] = str_replace('-', ' ', $this->uri->segment(4));
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['link_image'] = $this->uri->segment(3);
        $judul = strtoupper(str_replace('-',' ', $this->uri->segment(4)));
        // echo $table; die;
        $data['page'] = $this->layout->viewsinglepageadmin(['judul' => $judul]);
        // var_dump($data['page']); die;
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/layout/page/view', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function edithalloffame($id){
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $where = ['id'=>$id];
        $data['edit'] = $this->layout->edithalloffame('halloffame', $where);
        $data['peringkat'] = $this->db->query("SELECT * FROM `halloffame`")->result();
        // var_dump($data['peringkat']); die;
        $data['title'] = "Edit ".$data['edit'][0]->judul;
        // var_dump($data['edit']); die;

        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/layout/page/edithalloffame', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function updatehalloffame()
    {
        $id = $this->input->post('id');
        $where = ['id'=>$id];
        $query= $this->layout->edithalloffame('halloffame', $where);       
        $query[0]->url."<br/><br/>";
        // print_r($query);
        // $data['old_image'] = $query[0]->image;
        // echo $data['old_image']; die;
        // echo $query[0]->img;die;
        if($query[0]->image === ""){
            $image = "default-avatar.png";
        }else{
            $image = $query[0]->image;
        }

        // echo $image; die;

        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $nama = $this->input->post('nama');
        $kota = $this->input->post('kota');
        $negara = $this->input->post('negara');
        $username = $this->input->post('username');
        $link = $this->input->post('url');

                $upload_image = $_FILES['image'];
                //var_dump($upload_images);die;
            if($upload_image){
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '5048';
                $config['upload_path'] = './assets/images/halloffame/';
                $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                        if($image != $image){
                            unlink(FCPATH.'./assets/images/halloffame/'.$image);
                            $image = $image;
                        }
                        $image = $this->upload->data('file_name');
                    }else{
                        echo $this->upload->display_errors();
                    }
                }

                $data = [
                    'judul' => $judul,
                    'nama' => $nama,
                    'username' => $username,
                    'image' => $image,
                    'kota' => $kota,
                    'negara' => $negara,
                    'url' => $link
                ];
            // var_dump($data);die;
            $where = ['id' => $id];
            $anjing = $query[0]->url;
            $this->layout->updatehalloffame($where, $data, 'halloffame');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Update Page success</div>');
            redirect('Layout/view/halloffame/'.$anjing);
    }

    public function addpage()
    {
        $judul = htmlspecialchars(strip_tags($this->input->post('judul')));
        $url = $this->input->post('url');
        $link = htmlspecialchars(strip_tags($this->input->post('link')));
        $link_tujuan = $this->input->post('link_tujuan');
        $content = htmlspecialchars(nl2br(strip_tags($this->input->post('content'))));
        // echo $link; die;
        $this->form_validation->set_rules("judul", "Judul", "required|trim");
        $this->form_validation->set_rules("content", "Content", "required|trim");
        if($this->form_validation->run() == false){
            $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>Failed added page</div>");
            redirect('Layout/'.$link);
        }else{
            $this->layout->addpage();
            $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>Add page success</div>");
            redirect('Layout/'.$link);
        }

    }

    public function editpage($id)
    {
        $data['title'] = "Edit Page";
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $where = ['id'=>$id];
        $data['edit'] = $this->layout->editpage('single_page', $where);

        // var_dump($data['edit']); die;

        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/templates/topbar', $data);
        $this->load->view('Admin/layout/page/editpage', $data);
        $this->load->view('Admin/templates/footer');
    }

    public function updatepage()
    {
        $id = $this->input->post('id');
        $where = ['id'=>$id];
        $query= $this->layout->editpage('single_page', $where);    
    //    $query[0]->link."<br/><br/>";
    //     print_r($query);
    //     $data['old_image'] = $query[0]->img;
    //     echo $data['old_image']; die;
    // echo $query[0]->img;die;
        if($query[0]->img === ""){
            if($query[0]->link === "profilperusahaan"):
                $image = "slider3.jpg";
            elseif($query[0]->link === "halloffame"):
                $image = "slider2.jpg";
                elseif($query[0]->link === "customerservice"):
                    $image = "slider61.jpg";
                    elseif($query[0]->link === "office"):
                        $image = "4.png";
            endif;
        }else{
            $image = $query[0]->img;
        }

        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $url = strtolower(str_replace(" ", "-", $judul));
        $link = $this->input->post('link');
        $content = $this->input->post('content');

                $upload_image = $_FILES['img'];
                //var_dump($upload_images);die;
            if($upload_image){
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '5048';
                $config['upload_path'] = './assets/images/page/';
                $this->load->library('upload', $config);
                    if($this->upload->do_upload('img')){
                        if($image != $image){
                            unlink(FCPATH.'./assets/images/page/'.$image);
                            $image = $image;
                        }
                        $image = $this->upload->data('file_name');
                    }else{
                        echo $this->upload->display_errors();
                    }
                }

                $data = [
                    'judul' => $judul,
                    'url' => $url,
                    'img' => $image,
                    'link' => $link,
                    'link_tujuan' => $url,
                    'content' => $content
                ];
            // var_dump($data);die;
            $where = ['id' => $id];
            $this->layout->updatepage($where, $data, 'single_page');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Update Page success</div>');
            redirect('Layout/'.$query[0]->link);
    }

    public function deletepage($id)
    {
        $where = ['id'=>$id];
        $query= $this->db->get_where('single_page', $where)->result();  
        $link = $query[0]->link;
        $this->layout->deletepage($where, "single_page");
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Page success delete</div>');
        redirect("Layout/".$link);
    }

}