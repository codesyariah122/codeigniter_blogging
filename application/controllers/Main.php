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


        $datauser = $this->db->query("SELECT * FROM `data_user`")->row_array();
        // var_dump($datauser); 
        // echo "<br/>\n";
        // echo $datauser['value'];
        // die;
        $iddatauser = $datauser['id'];
        $value = $datauser['value'];
        // if(!$datauser) {
        //     if($this->agent->is_browser()){
        //         $agent = $this->agent->browser().' ' .$this->agent->version();
        //     }elseif($this->agent->is_mobile()){
        //         $agent = $this->agent->mobile();
        //     }else{
        //         $agent = "data user gagal didapatkan";
        //     }
        //     $value = 1;
        //     $datauser = [
        //         'id' => '',
        //         'browser' => $agent,
        //         'sistem_operasi' => $this->agent->platform(),
        //         'ip_address' => $this->input->ip_address(),
        //         'value' => $value
        //     ];
        //     $this->M_Data->datauser($datauser);	
        // }else{
        //     $where = [
        //         'id'=> $iddatauser
        //     ];
        //     $dataupdatedatauser = ['value' => $value+1];
        //     $this->M_Data->updatedatauser($dataupdatedatauser, $where);
        // }
        	
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
        //sekarang gua mau coba sebuah fungsi di codeigniter untuk mendapatkan data user
        //nama nya user agent 
        //kebetulan gua punya database sql
        $datauser = $this->db->query("SELECT * FROM `data_user`")->row_array();
        // var_dump($datauser);
        // echo "<br/>\n";
        // echo $datauser['sistem_operasi'];
        // die;

        $datavalue = $datauser['value'];
        $iduser = $datauser['id'];
		if(!$datauser['sistem_operasi']){
            if($this->agent->is_browser()){
                $agent = $this->agent->browser() ." ". $this->agent->version();
            }elseif($this->agent->is_mobile()){
                $agent = $this->agent->mobile();
            }else{
                $agent = "tidak terdeteksi";
            }
            $value =  1;
            $data_user = [
                'id' => '',
                'browser' => $agent,
                'sistem_operasi' => $this->agent->platform(),
                'ip_address' => $this->input->ip_address(),
                'value' => $value
            ];
            $this->M_Data->datauser($data_user);
        }else{
            $data_user = [
                'value' => $datavalue+1
            ];
        //    echo $datauser['sistem_operasi']; die;
            $where = ['id' => $iduser];
            $this->M_Data->updatedatauser($data_user, $where);
        }

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
