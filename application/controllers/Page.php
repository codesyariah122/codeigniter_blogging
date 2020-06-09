<?php
//puji ermanto update terbaru 08:16
//create single non page
//belum ada database nya 
//12-03-2018 / Kamis 08:17

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Layout_model', 'page');
    }

    public function index()
    {
        $data['login'] = $this->session->userdata('email');
        $link = $this->uri->segment(3);
        $data['index_title'] = "Ourcitrus ".$link;
        $config['base_url'] = base_url('page/index/'.$link); //site url
        $config['total_rows'] = $this->page->countAllpage(); //total row
        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
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
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['page'] = $this->page->singlepage($config["per_page"], $data['page']);   
        
        //$data['halloffame'] = $this->halloffamepage($config["per_page"], $data['page']);
        $data['uri'] = $this->uri->segment(3);
        // echo $data['uri']; die;
        $data['pagination'] = $this->pagination->create_links();
        $link = $this->uri->segment(3);
        $data['page_index'] = $this->db->query("SELECT * FROM `single_page` WHERE `link` = '$link'")->result();
        // var_dump($data['page_index']); die;
        $data['halloffame_index'] = $this->db->query("SELECT * FROM `single_page` WHERE `link` = '$link'")->result();
        // var_dump($data['halloffame_index']); 
        // die;
        $link = $this->uri->segment(3);
        $data['MainSlide'] = $this->db->query("SELECT * FROM `slide_img` WHERE `link` = '$link'")->result();
        $data['index_title'] = ucwords($data['MainSlide'][0]->header);
        $data['og_title'] = "OurCitrus Page | ".$this->uri->segment(3);
        $data['short_title'] = "OurCitrus Page | ".$this->uri->segment(3);
        $data['og_description'] = $data['MainSlide'][0]->truncate;
        $data['og_url'] = "OurCitrus | ".$this->uri->segment(3);        
        for($i=0; $i<=count($data['page_index'])-1; $i++){
           $data['og_image'] = base_url('assets/images/page/').$data['page_index'][$i]->img;
        }

		$this->template->myLayout('page/index', $data);
    }

    public function read()
    {
        $query = $this->db->get_where('single_page', ['url' => $this->uri->segment(3)])->row_array();
        // echo "<pre>";
        // var_dump($query);
        // echo "</pre>"; 
        // echo $query['link'];
        // die;
        $link = strtolower(str_replace('-',' ', $query['url']));
        $data['index_title'] = $link;
        //===============================================================================================
        //set page untuk price list
        $data['uri'] = $this->uri->segment(3);
        //echo $data['uri'];die;
        //===============================================================================================
        //set page untuk halloffame
        // $halloffame = $this->db->get_where('single_page', ['link'=>'halloffame'])->row_array();
        // echo $halloffame['url'];die;
        $data['halloffameview'] = $this->db->get_where('halloffame', ['url'=>$data['uri']])->row_array();
        // var_dump($data['halloffameview']);
        // echo $data['halloffameview']['url'];
        // die;
        //===============================================================================================
        $data['num_rows'] = $this->db->get_where('halloffame', ['url'=>$this->uri->segment(3)])->num_rows();
        $data['viewpage'] = $this->page->viewpage('single_page');
        $data['kantor'] = $this->db->get_where('single_page', ['url' => 'Kantor-OurCitrus']);
        $data['uri_title'] = str_replace('-',' ', $this->uri->segment(3));
        $where = ['url'=>$data['uri']];
        $data['halloffameread'] = $this->page->halloffame($where);
        // var_dump($data['halloffameread']); die;

        $url = $data['uri'];
        $data['pages'] = $this->db->query("SELECT * FROM `single_page` where `url` = '$url'")->result();

        $data['index_title'] = $data['pages'][0]->judul;
        $data['og_title'] = "OurCitrus Page | ".$this->uri->segment(3);
        $data['header_title'] = $data['pages'][0]->judul;
        $data['short_title'] = $this->uri->segment(3);
        $data['og_url'] = $data['pages'][0]->judul;
        $data['og_description'] = $data['pages'][0]->content;
        $data['og_image'] = base_url('assets/images/page/').$data['pages'][0]->img;

        $this->template->myLayout('page/read', $data);
    }


}
