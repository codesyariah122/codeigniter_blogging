<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Template','database');
	}

	public function pencarianproduk()
	{
		$data['index_title'] = "Hasil Pencarian";
		$data['cari'] = $this->M_Data->cari();
		$this->template->myLayout('ocproduct/pencarian', $data);
	}
    public function index()
    {
        $data['index_title'] = "HomePage";
        $data['hallo'] = "Hallo World";
        $data['meta_index'] = "ourcitrus | website";
        $data['meta_author'] = "pujiermanto";
        $data['meta_content'] = "HomePage Ourcitrus by Pt.Gemilang Citrus Berjaya";
        $data['meta_website_name'] = "OurCitrus By PT. Gemilang Citrus Berjaya";
        $data['meta_uri'] = $_SERVER['REQUEST_URI'];
        $data['MainSlide'] = $this->M_Data->MainSlide()->result();
        //$data['allproduct'] = $this->M_Data->allproduct()->result();
        $data['text_wa'] = "Hallo!%20Admin%20OurCitrus";
		
		$this->template->myLayout('main', $data);
    }
	public function home()
	{
        $data['meta_index'] = "ourcitrus | website";
        $data['meta_author'] = "pujiermanto";
        $data['meta_content'] = "HomePage Ourcitrus by Pt.Gemilang Citrus Berjaya";
        $data['meta_website_name'] = "OurCitrus By PT. Gemilang Citrus Berjaya";
        $data['meta_uri'] = $_SERVER['REQUEST_URI'];
		$data['index_title'] = "HomePage";
		$data['hallo'] = "Hallo World";
        $data['MainSlide'] = $this->M_Data->MainSlide()->result();
		$data['text_wa'] = "Hallo!%20Admin%20OurCitrus";
		//$data['cari'] = $this->M_Data->cariproduk();
		
		$this->template->myLayout('main', $data);
	}

	public function cari()
	{
        $this->form_validation->set_rules('keyword', 'Keyword' , 'required|trim');
        if($this->form_validation->run() == false):
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Keyword Failed</div>');
            $data['MainSlide'] = $this->M_Data->MainSlide()->result();
            redirect('main');
        else:
            $keyword = htmlspecialchars($this->input->post('keyword'));
            $data['index_title'] = "Hasil Pencarian";
            $data['cari'] = $this->M_Data->search($keyword);
            $this->template->myLayout('page/result', $data);
        endif;
    }
    
    public function profile()
    {

        echo "Hallo World";
        
    }

}
