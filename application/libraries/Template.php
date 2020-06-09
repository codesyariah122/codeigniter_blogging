<?php
class Template {
	protected $_ci;

	public function __construct(){
		$this->_ci = &get_instance();
	}

	public function myLayout($content, $data=NULL)
	{
		$data['website_name'] = "ourcitrus";
        $data['img_url'] = base_url('assets/images/');
        $data['slider_img'] = base_url('assets/images/sliders/');
        $data['post_img'] = base_url('assets/images/post/');
        $data['page_img'] = base_url('assets/images/page/');
        $data['produk_img'] = base_url('assets/images/produk/');
        $data['hof_img'] = base_url('assets/images/halloffame/');

		$data['navbar'] = 
						[
							'Home' => base_url('main/index/home'),
							'Company Profile' => base_url('page/index/profilperusahaan'),
							'Hall Of Fame' => base_url('page/index/halloffame'),
							'News' => base_url('post/index/'),
							'Customer Service' => base_url('page/index/customerservice'),
                            'Office' => base_url('page/index/office'),
						];
		$data['nav_produk'] = 
							[
							'Cosmetics' => base_url('produk/index/kosmetik'),
                            'Nutrition' => base_url('produk/index/nutrisi')
                            // 'Cosmetics' => base_url('produk/ourcitrus/kosmetik'),
							// 'Nutrition' => base_url('produk/ourcitrus/nutrisi')
                            ];
        $data['nav_application'] = 
                                [
                                    'Buku Tamu' => base_url('Application/bukutamu'),
                                    'Email Service' => base_url('Application/emailservice')
                                ];

		$data['dummy_title'] = "Application and practice of creating durable images";
		$data['dummy_header_title'] = "ourcitrus | page";
		$data['dummy'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

        $data['img_cp'] = $this->_ci->db->query("SELECT * FROM `slide_img`")->result();
        // var_dump($data['img_cp']); 
        // for($i=0; $i<=count($data['img_cp'])-1; $i++):
        // echo $data['img_cp'][$i]->img;
        // endfor;
        // die;
        $data['img_produk'] = $this->_ci->db->query("SELECT * FROM `produk_testing`")->result();

		$data['num_char'] = 50;
        $data['num_main'] = 300;
        $data['office_map'] = "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253193.07575233828!2d112.55525991640626!3d-7.4495591000000045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e140ece8a251%3A0x86e9782da383abc2!2sPT%20Gemilang%20Citrus%20Berjaya!5e0!3m2!1sid!2sid!4v1591139409201!5m2!1sid!2sid' width='600' height='550' frameborder='0' style='border:0;' allowfullscreen='true' aria-hidden='false' tabindex='0'></iframe>";

		$data['reaction'] = '<div class="sharethis-inline-reaction-buttons"></div>';
        $data['whatsapp'] = '<script async data-id="25057" src="https://cdn.widgetwhats.com/script.min.js"></script>';
		//$data['add_this'] = '<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e2a9fa6ad878af1"></script>';
		$data['add_this'] = '	
		<div class="example_parent_element" style="margin:0 auto; width:900px;">
		<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="margin-left:-230px; top:150px;">
			<a class="a2a_button_facebook"></a>
			<a class="a2a_button_twitter"></a>
			<a class="a2a_button_pinterest"></a>
			<a class="a2a_button_whatsapp"></a>
			<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
		</div>
		<script async src="https://static.addtoany.com/menu/page.js"></script>
	</div>';



		$data['add_this_js'] = "<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5edb96378907b100132b648c&product=inline-share-buttons' async='async'></script>";

		$data['image_share'] = "<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5edb96378907b100132b648c&product=image-share-buttons&cms=sop' async='async'></script>";

		// $data['add_this'] = '<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e2a9fa6ad878af1"></script>';
		
        $data['chat'] = '<script src="//code.tidio.co/vjuajcc1jdaknoaqabrhng8opcoemdwi.js" async></script>';

		$data['headernya'] = $this->_ci->load->view('template/header', $data, TRUE);
        $data['contentnya'] = $this->_ci->load->view($content, $data, TRUE);
        $data['widget'] = $this->_ci->load->view('template/widget', $data, TRUE);
		$data['footernya'] = $this->_ci->load->view('template/footer', $data, TRUE);

	$this->_ci->load->view('template/index', $data);
	}

}
