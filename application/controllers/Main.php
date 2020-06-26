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

        // var_dump($data['MainSlide']); 
        // echo "<br/><br/>";
        // echo $data['MainSlide'][1]->img;
        // die;

        //$data['allproduct'] = $this->M_Data->allproduct()->result();
        $data['text_wa'] = "Hallo!%20Admin%20OurCitrus";
        // $datauser = $this->db->query("SELECT * FROM `data_user`")->row_array();
        // var_dump($datauser); 
        // echo "<br/>\n";
        // echo $datauser['value'];
        // die;
        // $iddatauser = $datauser['id'];
        // $value = $datauser['value'];
        // // if(!$datauser) {
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
        $data['MainSlide'] = $this->M_Data->MainSlide()->result();
        // var_dump($data['MainSlide']); 
        // echo "<br/><br/>\n\n";
        // echo $data['MainSlide'][0]->header;
        // die;
     
        $data['index_title'] = "HomePage";
        $data['og_url'] = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3).'/';
        for($i=0; $i<=count($data['MainSlide'])-1; $i++):
        $data['og_description'] = $data['MainSlide'][$i]->header;
        $data['og_image'] = base_url('assets/images/sliders/').$data['MainSlide'][$i]->img;
        $data['short_title'] = $data['MainSlide'][$i]->header;
        endfor;
        // if($this->agent->is_browser()){
        //     $agent = $this->agent->browser() ." ". $this->agent->version();
        // }elseif($this->agent->is_mobile()){
        //     $agent = $this->agent->mobile();
        // }else{
        //     $agent = "tidak terdeteksi";
        // }
        // $ip = $this->input->ip_address();
        // $url = "https://tools.keycdn.com/geo.json?host=$ip";
        // $dt = file_get_contents($url);
        // $dt = json_decode($dt, true);
        // $country = $dt['data']['geo']['country_name'];
        // $regional = $dt['data']['geo']['region_name'];
        // $city = $dt['data']['geo']['city'];
        
        // $value =  1;
        // $data_user = [
        //     'id' => '',
        //     'browser' => $agent,
        //     'sistem_operasi' => $this->agent->platform(),
        //     'ip_address' => $this->input->ip_address(),
        //     'value' => $value,
        //     'lokasi' => $country ." | ".$regional ." - " .$city
        // ];
        // $this->M_Data->datauser($data_user);
		$this->template->myLayout('main', $data);
    }
	public function home()
	{
        $data['MainSlide'] = $this->M_Data->MainSlide()->result();
        //$data['cari'] = $this->M_Data->cariproduk();
        //sekarang gua mau coba sebuah fungsi di codeigniter untuk mendapatkan data user
        //nama nya user agent 
        //kebetulan gua punya database sql
        // $datauser = $this->db->query("SELECT * FROM `data_user`")->row_array();
        // var_dump($datauser);
        // echo "<br/><br/>\n";
        // echo $datauser['sistem_operasi'];
        // die;



            // if($this->agent->is_browser()){
            //     $agent = $this->agent->browser() ." ". $this->agent->version();
            // }elseif($this->agent->is_mobile()){
            //     $agent = $this->agent->mobile();
            // }else{
            //     $agent = "tidak terdeteksi";
            // }
            // $value =  1;
            // $data_user = [
            //     'id' => '',
            //     'browser' => $agent,
            //     'sistem_operasi' => $this->agent->platform(),
            //     'ip_address' => $this->input->ip_address(),
            //     'value' => $value
            // ];
            // $this->M_Data->datauser($data_user);


        $short_title = [
            $data['MainSlide'][0]->header,
            $data['MainSlide'][1]->header,
            $data['MainSlide'][2]->header,
            $data['MainSlide'][3]->header,
            $data['MainSlide'][4]->header,
            $data['MainSlide'][5]->header,
            $data['MainSlide'][6]->header,
            $data['MainSlide'][7]->header,
            $data['MainSlide'][8]->header
        ];
        $og_image = [
            $data['MainSlide'][0]->img,
            $data['MainSlide'][1]->img,
            $data['MainSlide'][2]->img,
            $data['MainSlide'][3]->img,
            $data['MainSlide'][4]->img,
            $data['MainSlide'][5]->img,
            $data['MainSlide'][6]->img,
            $data['MainSlide'][7]->img,
            $data['MainSlide'][8]->img
        ];
        foreach($short_title as $short):
        $data['index_title'] = "OurCitrus HomePage | ".$short;
        endforeach;
        $data['og_title'] = "OurCitrus | ".$this->uri->segment(2);
        $data['short_title'] = $this->uri->segment(3);
        $data['og_url'] = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/';
        $data['og_description'] = "OurCitrus HomePage | ".$short;
        foreach($og_image as $og):
        $data['og_image'] = base_url('assets/images/sliders/').$og;
        endforeach;

		$this->template->myLayout('main', $data);
	}

	public function cari()
	{
        $this->form_validation->set_rules('keyword', 'Keyword' , 'required|trim');
        if($this->form_validation->run() === false):
            $keyword = htmlspecialchars($this->input->post('keyword'));
            $data['cari'] = $this->M_Data->search($keyword);
            // $data['MainSlide'] = $this->M_Data->MainSlide()->result();
            $data['MainSlide'] = $this->db->query("SELECT * FROM `slide_img` WHERE `small` = 'products'")->result();
            $data['index_title'] = ucwords("Tidak ada data");
            $data['short_title'] = "OurCitrus | ".$keyword;
            $data['og_title'] = $keyword;
            $data['og_url'] = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$keyword;
            $data['og_description'] = $keyword;
            $data['og_image'] = base_url('assets/images/default.png');
 
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Keyword Failed</div>');
            redirect('main');
        else:
            $keyword = htmlspecialchars($this->input->post('keyword'));
            $data['cari'] = $this->M_Data->search($keyword);
            // var_dump($data['cari']); die;
            $data['MainSlide'] = $this->db->query("SELECT * FROM `slide_img` WHERE `small` = 'products'")->result();
            $data['index_title'] = ucwords($data['cari'][0]->nama);
            $data['short_title'] = "OurCitrus | ".$this->uri->segment(2)." Produk | ".$data['cari'][0]->nama;
            $data['og_title'] = $data['MainSlide'][0]->truncate;
            $data['og_url'] = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$keyword;
            $data['og_description'] = $data['cari'][0]->deskripsi;
            for($i=0; $i<=count($data['cari'])-1; $i++){
                $data['og_image'] = base_url('assets/images/produk/').$data['cari'][$i]->image;
            }

            $this->template->myLayout('page/result', $data);
        endif;
    }
    
    public function profile()
    {

        echo "Hallo World";
        
    }

}
