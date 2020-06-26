<!DOCTYPE HTML>
<html>
        <!-- puji ermanto as web developer  
         new update Mei 2020 
         work from Bandung
-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>

		OurCitrus | <?=$index_title?>
			
		</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php //echo $_SERVER['REQUEST_URI']?>

    <?php if($_SERVER['REQUEST_URI'] === "/"): ?>
        <?php for($i=0; $i<=count($MainSlide)-1; $i++): ?>
            <meta name="description" content="<?=$MainSlide[$i]->header ?>">
            <meta property="og:title" content="<?=$MainSlide[$i]->header ?>">
            <meta property="og:image" content="<?=$slider_img?><?=$MainSlide[$i]->img?>">
            <div id='hidden' style='display:none;'><img src="<?=$slider_img?><?=$MainSlide[$i]->img?>"></div>
            <meta property="og:image" itemprop="image" content="<?=$slider_img?><?=$MainSlide[$i]->img?>">
            <meta property="og:image:url" itemprop="image" content="<?=$slider_img?><?=$MainSlide[$i]->img?>">
        <?php endfor;?>
    <?php elseif($_SERVER['REQUEST_URI'] === "/main/index/home"):?>
        <?php for($i=0; $i<=count($MainSlide)-1; $i++): ?>
        <meta property="og:description" content="<?=substr($MainSlide[$i]->truncate, 0, 150)?>" />
        <meta property="og:image" content="<?=$slider_img?><?=$MainSlide[$i]->img?>" />
        <div id='hidden' style='display:none;'><img src="<?=$slider_img?><?=$MainSlide[$i]->img?>"></div>
        <?php endfor;?>
    <?php elseif($_SERVER['REQUEST_URI'] === "/main/home" OR $_SERVER['REQUEST_URI'] === "/main/home/"):?>
        <?php for($i=0; $i<=count($MainSlide)-1; $i++): ?>
            <meta name="description" content="<?=$MainSlide[$i]->truncate?>">
            <meta property="og:title" content="<?=$MainSlide[$i]->header?>">
            <meta property="og:url" content="<?=$MainSlide[$i]->link?>" />
            <meta property="og:description" content="<?=$MainSlide[$i]->truncate?>">
            <meta property="og:image" content="<?=$slider_img?><?=$MainSlide[$i]->img?>">
            <div id='hidden' style='display:none;'><img src="<?=$slider_img?><?=$MainSlide[$i]->img?>"></div>
            <meta property="og:image" itemprop="image" content="<?=$slider_img?><?=$MainSlide[$i]->img?>">
            <meta property="og:image:url" itemprop="image" content="<?=$slider_img?><?=$MainSlide[$i]->img?>">
        <?php endfor;?>
        <?php elseif($_SERVER['REQUEST_URI'] === "/post/index/"):?>
        <meta name="description" content="<?=$og_description?>">
        <meta property="og:title" content="<?=$short_title?>">
        <meta property="og:url" content="<?=$og_url?>">
        <meta property="og:description" content="<?=$og_description?>">
        <meta property="og:image" content="<?=$og_image?>">
        <div id='hidden' style='display:none;'><img src="<?=$og_image?>"></div>
        <meta property="og:image" itemprop="image" content="<?=$og_image?>">
        <meta property="og:image:url" itemprop="image" content="<?=$og_image?>">
        <meta property="og:image:type" content="image/png">
        <?php for($i=0; $i<=count($post_index)-1; $i++): ?>
            <meta property="og:title" content="<?=$post_index[$i]->judul?>">
            <meta property="og:url" content="<?=$post_index[$i]->url?>">
            <meta property="og:image" content="<?=$page_img?><?=$post_index[$i]->image?>">
            <div id='hidden' style='display:none;'><img src="<?=$page_img?><?=$post_index[$i]->image?>"></div>
            <meta property="og:image" itemprop="image" content="<?=$page_img?><?=$post_index[$i]->image?>">
            <meta property="og:image:url" itemprop="image" content="<?=$page_img?><?=$post_index[$i]->image?>">
        <?php endfor;?>
    <?php elseif($_SERVER['REQUEST_URI'] === "/produk/index/kosmetik"):?>
        <meta name="description" content='<?=$og_description?>'>
        <meta property="og:title" content="<?=$short_title?>">
        <meta property="og:url" content="<?=$og_url?>">
        <meta property="og:description" content='<?=$og_description?>'>
        <meta property="og:image" content="<?=$og_image?>">
        <div id='hidden' style='display:none;'><img src="<?=$og_image?>"></div>
        <meta property="og:image" itemprop="image" content="<?=$og_image?>">
        <meta property="og:image:url" itemprop="image" content="<?=$og_image?>">
        <meta property="og:image:type" content="image/png">
        <?php for($i=0; $i<=count($produk_image)-1; $i++): ?>
            <meta property="og:title" content="<?=$produk_image[$i]->nama?>">
            <meta property="og:url" content="<?=$produk_image[$i]->link?>">
            <meta property="og:image" content="<?=$produk_img?><?=$produk_image[$i]->image?>">
            <div id='hidden' style='display:none;'><img src="<?=$produk_img?><?=$produk_image[$i]->image?>"></div>
            <meta property="og:image" itemprop="image" content="<?=$produk_img?><?=$produk_image[$i]->image?>">
            <meta property="og:image:url" itemprop="image" content="<?=$produk_img?><?=$produk_image[$i]->image?>">
        <?php endfor;?>
        <?php elseif($_SERVER['REQUEST_URI'] === "/produk/index/nutrisi"):?>
        <meta name="description" content='<?=$og_description?>'>
        <meta property="og:title" content="<?=$short_title?>">
        <meta property="og:url" content="<?=$og_url?>">
        <meta property="og:description" content='<?=$og_description?>'>
        <meta property="og:image" content="<?=$og_image?>">
        <div id='hidden' style='display:none;'><img src="<?=$og_image?>"></div>
        <meta property="og:image" itemprop="image" content="<?=$og_image?>">
        <meta property="og:image:url" itemprop="image" content="<?=$og_image?>">
        <meta property="og:image:type" content="image/png">
        <?php for($i=0; $i<=count($produk_image)-1; $i++): ?>
            <meta property="og:title" content="<?=$produk_image[$i]->nama?>">
            <meta property="og:url" content="<?=$produk_image[$i]->link?>">
            <meta property="og:image" content="<?=$page_img?><?=$produk_image[$i]->image?>">
            <div id='hidden' style='display:none;'><img src="<?=$page_img?><?=$produk_image[$i]->image?>"></div>
            <meta property="og:image" itemprop="image" content="<?=$page_img?><?=$produk_image[$i]->image?>">
            <meta property="og:image:url" itemprop="image" content="<?=$page_img?><?=$produk_image[$i]->image?>">
        <?php endfor;?>
    <?php  elseif($_SERVER['REQUEST_URI'] === "/page/index/profilperusahaan/"): ?>
        <?php //var_dump($page_index_img); die; ?>
        <meta name="description" content="<?=$og_title?>">
        <?php for($i=0; $i<=count($page_index)-1; $i++): ?>
            <meta property="og:title" content="<?=$page_index[$i]->judul?>">
            <meta property="og:url" content="<?=$page_index[$i]->url?>">
            <meta property="og:description" content="<?=$page_index[$i]->content?>">
            <meta property="og:image" content="<?=$page_img?><?=$page_index[$i]->img?>">
            <div id='hidden' style='display:none;'><img src="<?=$page_img?><?=$page_index[$i]->img?>"></div>
            <meta property="og:image" itemprop="image" content="<?=$page_img?><?=$page_index[$i]->img?>">
            <meta property="og:image:url" itemprop="image" content="<?=$page_img?><?=$page_index[$i]->img?>">
        <?php endfor;?>
    <?php elseif($_SERVER['REQUEST_URI'] === "/page/index/halloffame/"):?>
        <?php for($i=0; $i<=count($halloffame_index)-1; $i++): ?>
            <meta name="description" content="<?=$halloffame_index[$i]->content?>">
            <meta property="og:title" content="<?=$halloffame_index[$i]->judul?>">
            <meta property="og:url" content="<?=$halloffame_index[$i]->url?>" />
            <meta property="og:description" content="<?=$halloffame_index[$i]->content?>">
            <meta property="og:image" content="<?=$page_img?><?=$halloffame_index[$i]->img?>">
            <div id='hidden' style='display:none;'><img src="<?=$page_img?><?=$halloffame_index[$i]->img?>"></div>
            <meta property="og:image" itemprop="image" content="<?=$page_img?><?=$halloffame_index[$i]->img?>">
            <meta property="og:image:url" itemprop="image" content="<?=$page_img?><?=$halloffame_index[$i]->img?>">
        <?php endfor;?>
    <?php elseif($_SERVER['REMOTE_ADDR'] === "/page/read/International-Director"):?>
        <?php //var_dump($halloffameread); die;?>
        <?php for($i=0; $i<=count($halloffameread)-1; $i++):?>
            <meta name="description" content="<?=$halloffameread[$i]->judul?>">
            <meta property="og:title" content="<?=$halloffameread[$i]->nama?>">
            <meta property="og:url" content="<?=$halloffameread[$i]->url?>" />
            <meta property="og:description" content="<?=$halloffameread[$i]->judul?>">
            <meta property="og:image" content="<?=$halloffameread[$i]->image = (empty($halloffameread[$i]->image)) ? $img_url."default-avatar.png" : $hof_img.$halloffameread[$i]->image; ?>">
            <div id='hidden' style='display:none;'><img src="<?php if (!empty($halloffameread[$i]->image)) : echo $img_url."default-avatar.png"; else : $hof_img.$halloffameread[$i]->image; endif; ?>"></div>
            <meta property="og:image" itemprop="image" content="<?=$halloffameread[$i]->image = (empty($halloffameread[$i]->image)) ? $img_url."default-avatar.png" : $halloffameread[$i]->image; ?>">
            <meta property="og:image:url" itemprop="image" content="<?=$halloffameread[$i]->image = (empty($halloffameread[$i]->image)) ? $img_url."default-avatar.png" : $halloffameread[$i]->image; ?>">
        <?php endfor;?>
    <?php elseif($_SERVER['REMOTE_ADDR'] === "/page/read/International-Manager"):?>
        <?php for($i=0; $i<=count($halloffameread)-1; $i++):?>
            <meta property="og:image" content="<?=$halloffameread[$i]->image = (empty($halloffameread[$i]->image)) ? $img_url."default-avatar.png" : $halloffameread[$i]->image; ?>">
            <div id='hidden' style='display:none;'><img src="<?=$halloffameread[$i]->image = (empty($halloffameread[$i]->image)) ? $img_url."default-avatar.png" : $halloffameread[$i]->image; ?>"></div>
            <meta property="og:image" itemprop="image" content="<?=$halloffameread[$i]->image = (empty($halloffameread[$i]->image)) ? $img_url."default-avatar.png" : $halloffameread[$i]->image; ?>">
            <meta property="og:image:url" itemprop="image" content="<?=$halloffameread[$i]->image = (empty($halloffameread[$i]->image)) ? $img_url."default-avatar.png" : $halloffameread[$i]->image; ?>">
        <?php endfor;?>
    <?php elseif($_SERVER['REMOTE_ADDR'] === "/page/read/International-Leader"):?>
        <?php for($i=0; $i<=count($halloffameread)-1; $i++):?>
            <meta property="og:image" content="<?=$halloffameread[$i]->image = (empty($halloffameread[$i]->image)) ? $img_url."default-avatar.png" : $halloffameread[$i]->image; ?>">
            <div id='hidden' style='display:none;'><img src="<?=$halloffameread[$i]->image = (empty($halloffameread[$i]->image)) ? $img_url."default-avatar.png" : $halloffameread[$i]->image; ?>"></div>
            <meta property="og:image" itemprop="image" content="<?=$halloffameread[$i]->image = (empty($halloffameread[$i]->image)) ? $img_url."default-avatar.png" : $halloffameread[$i]->image; ?>">
            <meta property="og:image:url" itemprop="image" content="<?=$halloffameread[$i]->image = (empty($halloffameread[$i]->image)) ? $img_url."default-avatar.png" : $halloffameread[$i]->image; ?>">
        <?php endfor;?>
        <?php elseif($this->uri->segment(3) === "office"):?>
            <meta name="description" content="<?=$office_map?>">
            <meta property="og:title" content="<?=$short_title?>">
            <meta property="og:url" content="<?=$og_url?>">
            <meta property="og:description" content="<?=$og_description?>">
            <meta property="og:image" content="<?=$office_map?>">
            <div id='hidden' style='display:none;'><img src="<?=$office_map?>"></div>
            <meta property="og:image" itemprop="image" content="<?=$office_map?>">
            <meta property="og:image:url" itemprop="image" content="<?=$office_map?>">
            <meta property="og:image:type" content="image/png">
        <?php else:?>
        <meta name="description" content='<?=$og_description?>'>
        <meta property="og:title" content="<?=$short_title?>">
        <meta property="og:url" content="<?=$og_url?>">
        <meta property="og:description" content='<?=$og_description?>'>
        <meta property="og:image" content="<?=$og_image?>">
        <div id='hidden' style='display:none;'><img src="<?=$og_image?>"></div>
        <meta property="og:image" itemprop="image" content="<?=$og_image?>">
        <meta property="og:image:url" itemprop="image" content="<?=$og_image?>">
        <meta property="og:image:type" content="image/png">
    <?php endif;?>    
    
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Bilbo+Swash+Caps&family=Petit+Formal+Script&family=Satisfy&display=swap" rel="stylesheet">   	
    <!-- Animate.css -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">

	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/stylesheet.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- <link type="text/css" href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css' rel='stylesheet'> -->

	<!-- mini preview
	<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.minipreview.css">
	end mini preview -->

<!-- Modernizr JS -->
	<script src="<?=base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?=base_url()?>assets/js/respond.min.js"></script>
	<![endif]-->
    <!-- Include Font Awesome Stylesheet in Header -->
    <link href="//db.onlinewebfonts.com/c/4a5910f3106719968c759303c3d579c2?family=Kuenstler+Script" rel="stylesheet" type="text/css"/> 
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet"> 
	<style type="text/css">#footer {
    bottom: 0;
    width: 100%;
    position: absolute;
    height: $height-footer;
    background-color: #f5f5f5;
    .footer-block {
      margin: 20px 0;
    }
    /* Hide AddToAny vertical share bar when screen is less than 980 pixels wide */
    @media screen and (max-width: 980px) {
        .a2a_floating_style.a2a_vertical_style { display: none; }
    }
    /*emoji*/

    </style>
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css"> -->
        <script type="text/javascript" src="<?=base_url()?>assets/sweet/sweetalert2.all.min.js"></script>
<?=$add_this_js?>
<?=$image_share?>

	</head>

	<body>

<?php $this->view('template/navbar');?>

<!-- colorlib-page -->
	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="<?=base_url()?>main/index/home"><?=$website_name?></a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
