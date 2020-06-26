<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Template','database');
	}

	public function kosmetik()
	{
		 $uri = $_SERVER['REQUEST_URI'];
		//echo $uri."<br/>";
		//$explode=explode(' ', $uri);

		$data['result'] = ltrim( $uri, "/View/");
		//echo "<h1>".$result."</h1><br/>";

		/*
		$uri_baru = str_replace('-', ' ', $result);
		echo "<br/><br/>".$uri_baru;


		echo "<pre>";
		print_r($explode);
		echo "</pre>";
		*/

		$data['index_title'] = "Product | Kosmetik";
		$data['singlekosmetik'] = $this->M_Single->singlekosmetik()->result();
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('fullname', 'FullName', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required|min_length[13]');
        $this->form_validation->set_rules('message', 'Message', 'required');
		if($this->form_validation->run() == false){
            $this->session->set_flashdata('error', 'Oh No !');
        $this->template->myLayout('produk/single/viewkosmetik', $data);
    }else{
		$date = time();
		//cek lokasi
		 if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			 $ip = $_SERVER['HTTP_CLIENT_IP'];
			 
		 } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			 $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		 } else {
			 $ip = $_SERVER['REMOTE_ADDR'];
		 }
				//Kemudian
				$url = "https://tools.keycdn.com/geo.json?host=$ip";
				$dt = file_get_contents($url);
				$dt = json_decode($dt, true);
				$lat = $dt['data']['geo']['latitude'];
				$lng = $dt['data']['geo']['longitude'];
				$regional = $dt['data']['geo']['region_name'];
				$city_name = $dt['data']['geo']['city'];
					if(!empty($regional) AND (!empty($city_name))):
						$lokasi = $city_name ."-".$regional;
					else:
						$lokasi = "Server Pribadi";
					endif;
				//echo $lat." - ".$lng."<br/>";
				//echo $lokasi; die;
				$fullname = $this->input->post('fullname');
	
				$this->db->insert('buku_tamu', 
				[
					'email' => $this->input->post('email'),
					'fullname' => $this->input->post('fullname'),
					'message' => $this->input->post('message'),
					'phone' => $this->input->post('phone'),
					'lat' => $lat,
					'lng' => $lng,
					'ip' => $ip,
					'lokasi' => $lokasi,
					'date_send' => $date
					]);
				$this->session->set_flashdata('message', 'Terima kasih '.$fullname);
				redirect('page/customerservice');
			}

	}

	public function nutrisi()
	{
		 $uri = $_SERVER['REQUEST_URI'];
		//echo $uri."<br/>";
		//$explode=explode(' ', $uri);

		$data['result'] = ltrim( $uri, "/View/");
		//echo "<h1>".$result."</h1><br/>";

		/*
		$uri_baru = str_replace('-', ' ', $result);
		echo "<br/><br/>".$uri_baru;


		echo "<pre>";
		print_r($explode);
		echo "</pre>";
		*/
		$data['index_title'] = "Product | Nutrisi";
		$data['singlenutrisi'] = $this->M_Single->singlenutrisi()->result();
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('fullname', 'FullName', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required|min_length[13]');
        $this->form_validation->set_rules('message', 'Message', 'required');
		if($this->form_validation->run() == false){
            $this->session->set_flashdata('error', 'Oh No !');
        $this->template->myLayout('produk/single/viewnutrisi', $data);
        
    }else{
		$date = time();
		//cek lokasi
		 if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			 $ip = $_SERVER['HTTP_CLIENT_IP'];
			 
		 } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			 $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		 } else {
			 $ip = $_SERVER['REMOTE_ADDR'];
		 }
				//Kemudian
				$url = "https://tools.keycdn.com/geo.json?host=$ip";
				$dt = file_get_contents($url);
				$dt = json_decode($dt, true);
				$lat = $dt['data']['geo']['latitude'];
				$lng = $dt['data']['geo']['longitude'];
				$regional = $dt['data']['geo']['region_name'];
				$city_name = $dt['data']['geo']['city'];
					if(!empty($regional) AND (!empty($city_name))):
						$lokasi = $city_name ."-".$regional;
					else:
						$lokasi = "Server Pribadi";
					endif;
				//echo $lat." - ".$lng."<br/>";
				//echo $lokasi; die;
				$fullname = $this->input->post('fullname');
	
				$this->db->insert('buku_tamu', 
				[
					'email' => $this->input->post('email'),
					'fullname' => $this->input->post('fullname'),
					'message' => $this->input->post('message'),
					'phone' => $this->input->post('phone'),
					'lat' => $lat,
					'lng' => $lng,
					'ip' => $ip,
					'lokasi' => $lokasi,
					'date_send' => $date
					]);
				$this->session->set_flashdata('message', 'Terima kasih '.$fullname);
				redirect('page/customerservice');
			}

	}


}
