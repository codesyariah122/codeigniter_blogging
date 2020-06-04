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

		$data['img_cp'] = [
                                            'post/ramadhan.jpg',
                                            'post/masker.jpg',
                                            'sliders/product.jpg',
											'sliders/1.png',
											'sliders/2.png',
											'sliders/3.png',
											'sliders/4.png',
											'sliders/business.png',
											'info1.jpg',
											'sliders/info2.jpg',
											'work-5.jpg',
											'work-6.jpg'
							];
        $data['num_char'] = 500;
        $data['whatsapp'] = '<script async data-id="25057" src="https://cdn.widgetwhats.com/script.min.js"></script>';
        //$data['add_this'] = '<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e2a9fa6ad878af1"></script>';
        $data['add_this'] = '<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e2a9fa6ad878af1"></script>
        ';
        $data['chat'] = '<script src="//code.tidio.co/vjuajcc1jdaknoaqabrhng8opcoemdwi.js" async></script>';

		$data['headernya'] = $this->_ci->load->view('template/header', $data, TRUE);
        $data['contentnya'] = $this->_ci->load->view($content, $data, TRUE);
        $data['widget'] = $this->_ci->load->view('template/widget', $data, TRUE);
		$data['footernya'] = $this->_ci->load->view('template/footer', $data, TRUE);

	$this->_ci->load->view('template/index', $data);
	}

}
