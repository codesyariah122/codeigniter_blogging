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

		<?=$index_title?>
			
		</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?=$meta_index?>" />
	<meta name="keywords" content="<?=$index_title?>" />
	<meta name="author" content="<?=$meta_author?>" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content="<?=$meta_content?>"/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content="<?=$meta_uri?>"/>
	<meta property="og:site_name" content="<?=$meta_website_name?>"/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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
	<link type="text/css" href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css' rel='stylesheet'>

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
    </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
        <script type="text/javascript" src="<?=base_url()?>assets/sweet/sweetalert2.all.min.js"></script>
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
