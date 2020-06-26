<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReadMore extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Template','database');
	}

	public function ProfilPerusahaan()
	{
		$uri = $_SERVER['REQUEST_URI'];
		//echo $uri."<br/>";
		//$explode=explode(' ', $uri);
		//$uri_baru = substr($uri, 0, -1);
		//echo $uri_baru."<br/>";

		$data['result'] = ltrim($uri, "/ReadMore/ProfilPerusahaan/");
		//echo "<h1>".$result."</h1><br/>";

		/*
		$uri_baru = str_replace('-', ' ', $result);
		echo "<br/><br/>".$uri_baru;


		echo "<pre>";
		print_r($explode);
		echo "</pre>";
		*/
		$data['index_title'] = "ReadMore | Page ";
		$data['header_title'] = "Profile";
		$data['product_page_title'] = "Price List Product";


		$data['single_page'] = $this->M_Single->singlepage()->result();

		$data['allproduct'] = $this->M_Data->allproduct()->result();

		$data['productpage'] = $this->M_Single->productviewpage()->result();

		$this->template->myLayout('page/single/viewpage', $data);

	}

	public function HallOfFame()
	{
		$data['index_title'] = "Hall Of Fame | Page ";
		
		$data['header_title'] = "Hall Of Fame";

		$uri = $_SERVER['REQUEST_URI'];

		$data['result'] = ltrim($uri, '/new_ourcitrus/ReadMore/HallOfFame/');
		//echo $result;

		$data['halloffameview'] = $this->M_Single->halloffame()->result();

		$this->template->myLayout('page/single/halloffameview', $data);

	}

		public function InfoTerbaru()
	{
		$uri = $_SERVER['REQUEST_URI'];
		//echo $uri."<br/>";
		//$explode=explode(' ', $uri);
		//$uri_baru = substr($uri, 0, -1);
		//echo $uri_baru."<br/>";

		$data['result'] = ltrim($uri, "/new_ourcitrus/ReadMore/InfoTerbaru/");
		//echo "<h1>".$result."</h1><br/>";

		/*
		$uri_baru = str_replace('-', ' ', $result);
		echo "<br/><br/>".$uri_baru;


		echo "<pre>";
		print_r($explode);
		echo "</pre>";
		*/
		$data['index_title'] = "InfoTerbaru | OurCitrus ";
		$data['header_title'] = "Info Terbaru";

		$data['single_page'] = $this->M_Single->singlepage()->result();

		$data['allproduct'] = $this->M_Data->allproduct()->result();

		$data['productpage'] = $this->M_Single->productviewpage()->result();

		$this->template->myLayout('page/single/viewpage', $data);

	}

	public function Dummy()
	{

		$uri = $_SERVER['REQUEST_URI'];
		//echo $uri."<br/>";
		//$explode=explode(' ', $uri);
		//$uri_baru = substr($uri, 0, -1);
		//echo $uri_baru."<br/>";

		$data['result'] = ltrim($uri, "/new_ourcitrus/ReadMore/Dummy/");
		//echo "<h1>".$result."</h1><br/>";

		/*
		$uri_baru = str_replace('-', ' ', $result);
		echo "<br/><br/>".$uri_baru;


		echo "<pre>";
		print_r($explode);
		echo "</pre>";
		*/

		$data['index_title'] = "ReadMore | Page ";
		$data['header_title'] = "Profile";
		$data['product_page_title'] = "Price List Product";
		$data['link_dummy'] = [
					'page/profilperusahaan',
					'page/halloffame',
					'page/infoterbaru',
					'produk/kosmetik',
					'produk/nutrisi',
					'page/customerservice',
					'page/office'
				 ];
							  

		$this->template->myLayout('page/single/nonpage', $data);


	}



}
