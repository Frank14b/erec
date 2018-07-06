
<!DOCTYPE HTML>

<style>
    html::-webkit-scrollbar-track,
    .scroll::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #aaa;
        border-radius: 0px;
        height: 8px;
        width: 8px;
        opacity: 0.5;
    }

    /* line 16, zonestyle.scss */

    html::-webkit-scrollbar,
    .scroll::-webkit-scrollbar {
        width: 8px;
        background-color: #f5f5f5;
        cursor: pointer;
        height: 8px;
    }

    /* line 23, zonestyle.scss */

    html::-webkit-scrollbar:hover,
    .scroll::-webkit-scrollbar:hover {
        width: 8px;
        background-color: #fff;
        cursor: pointer;
        height: 8px;
    }

    /* line 30, zonestyle.scss */

    html::-webkit-scrollbar-thumb,
    .scroll::-webkit-scrollbar-thumb {
        border-radius: 0px;
        background-color: #fff;
        cursor: pointer;
    }

    /* line 35, zonestyle.scss */

    HTML {
        overflow-x: hidden;
    }

    /* line 38, zonestyle.scss */

    .no_scroll {
        overflow: hidden;
    }

    /* line 41, zonestyle.scss */

    .scroll_v_h,
    .scroll_h_v {
        overflow: auto;
    }

    /* line 44, zonestyle.scss */

    .scroll_v {
        overflow-y: auto;
        overflow-x: hidden;
    }

    /* line 48, zonestyle.scss */

    .scroll_h {
        overflow-x: auto;
        overflow-y: hidden;
        height: 8px;
    }

    /* line 53, zonestyle.scss */

    .scroll_hover {
        transition-duration: 0.6s;
    }

    /* line 54, zonestyle.scss */

    .scroll_hover .scroll::-webkit-scrollbar {
        width: 0px;
        background-color: none;
        cursor: pointer;
        height: 0px;
    }

    /* line 63, zonestyle.scss */

    .scroll_hover:hover .scroll::-webkit-scrollbar {
        width: 8px;
        background-color: #fff;
        cursor: pointer;
        height: 8px;
    }

    /* line 69, zonestyle.scss */

    .scroll_hover:hover .scroll::-webkit-scrollbar-thumb {
        background-color: #f5f5f5;
    }

    /* line 73, zonestyle.scss */

    .scroll_bleu::-webkit-scrollbar-thumb {
        background-color: #229CDD;
        opacity: 0.5;
    }

    /* line 77, zonestyle.scss */

    .scroll_bleu::-webkit-scrollbar-track {
        background-color: #fff;
        opacity: 0.5;
        border: 1px solid lightblue;
    }

    /* line 82, zonestyle.scss */

    .scroll_bleu::-webkit-scrollbar {
        opacity: 0.5;
    }

    /* line 86, zonestyle.scss */

    .scroll_hover:hover .scroll_bleu::-webkit-scrollbar-thumb {
        background-color: #229CDD;
        opacity: 0.5;
    }

    /* line 90, zonestyle.scss */

    .scroll_hover:hover .scroll_bleu::-webkit-scrollbar-track {
        background-color: #fff;
        opacity: 0.5;
        border: 1px solid lightblue;
    }

    /* line 95, zonestyle.scss */

    .scroll_hover:hover .scroll_bleu::-webkit-scrollbar {
        opacity: 0.5;
    }

    /* line 100, zonestyle.scss */

    .scroll_noir::-webkit-scrollbar-thumb {
        background-color: #555;
        opacity: 0.5;
    }

    /* line 104, zonestyle.scss */

    .scroll_noir::-webkit-scrollbar-track {
        background-color: #fff;
        opacity: 0.5;
        border: 1px solid #aaa;
    }

    /* line 109, zonestyle.scss */

    .scroll_noir::-webkit-scrollbar {
        opacity: 0.5;
    }

    /* line 113, zonestyle.scss */

    .scroll_hover:hover .scroll_noir::-webkit-scrollbar-thumb {
        background-color: #555;
        opacity: 0.5;
    }

    /* line 117, zonestyle.scss */

    .scroll_hover:hover .scroll_noir::-webkit-scrollbar-track {
        background-color: #fff;
        opacity: 0.5;
        border: 1px solid #aaa;
    }

    /* line 122, zonestyle.scss */

    .scroll_hover:hover .scroll_noir::-webkit-scrollbar {
        opacity: 0.5;
    }

    /* line 127, zonestyle.scss */

    .scroll_red::-webkit-scrollbar-thumb {
        background-color: red;
        opacity: 0.5;
    }

    /* line 131, zonestyle.scss */

    .scroll_red::-webkit-scrollbar-track {
        background-color: #fff;
        opacity: 0.5;
        border: 1px solid lightcoral;
    }

    /* line 136, zonestyle.scss */

    .scroll_red::-webkit-scrollbar {
        opacity: 0.5;
    }

    /* line 140, zonestyle.scss */

    .scroll_hover:hover .scroll_red::-webkit-scrollbar-thumb {
        background-color: red;
        opacity: 0.5;
    }

    /* line 144, zonestyle.scss */

    .scroll_hover:hover .scroll_red::-webkit-scrollbar-track {
        background-color: #fff;
        opacity: 0.5;
        border: 1px solid lightcoral;
    }

    /* line 149, zonestyle.scss */

    .scroll_hover:hover .scroll_red::-webkit-scrollbar {
        opacity: 0.5;
    }

    .hover {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }
    .hover-1 {
        box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.16), 0 12px 27px 0 rgba(0, 0, 0, 0.12);
    }

    #reponse, #raponse{
        display:none;
    }
</style>


<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= ucfirst($title)?> | EREC-Cameroun</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="EREC, Sonel, Electricite, courant, Snack, Provenderie" />
	<meta name="author" content="Donald Demanou & Frank Donald Fontcha" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?=base_url()?>assets/fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

    <!-- ZoneStyle Form style  -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/form.css">
    <!--
    <link rel="stylesheet" href="<?=base_url()?>assets/mdb/css/mdb.min.css">

	<!-- Modernizr JS -->
	<script src="<?=base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?=base_url()?>assets/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation" style="">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="<?=base_url()?>">EREC</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li <?php if($title == "acceuil") echo 'class="active"`' ?>><a href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? "fr"?>"><i class="icon icon-home"></i>&nbsp; <?=ucfirst(t('acceuil'))?></a></li>
								<!--<li class="has-dropdown">
									<a href="tours.html">Tours</a>
									<ul class="dropdown">
										<li><a href="#">Destination</a></li>
										<li><a href="#">Cruises</a></li>
										<li><a href="#">Hotels</a></li>
										<li><a href="#">Booking</a></li>
									</ul>
								</li>-->
								<li <?php if($title == "apropos") echo 'class="active"`' ?>><a href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? "fr"?>/apropos"><?=ucfirst(t('apropos'))?></a></li>
								<li <?php if($title == "connexion") echo 'class="active"`' ?>><a href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? "fr"?>/connexion"><i class="icon icon-user"></i>&nbsp; <?=ucfirst(t('connexion'))?></a></li>
								<li <?php if($title == "contacts") echo 'class="active"`' ?>><a href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? "fr"?>/contacts"><i class="icon icon-phone"></i>&nbsp; <?=ucfirst(t('contacts'))?></a></li>
                                <li <?php if($title == "emplois") echo 'class="active"`' ?>><a href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? "fr"?>/emplois"><i class="icon icon-tools"></i>&nbsp; <?=ucfirst(t('emplois'))?> | <?=ucfirst(t('stage'))?></a></li>
                                <li class="has-dropdown">
									<a style="cursor:pointer;"><i class="icon icon-flag"></i>&nbsp; <?= $_SESSION["abbr_lang"] ?? "Fr"?></a>
									<ul class="dropdown">
										<li><a href="<?php echo base_url()."fr"; if($_SESSION['abbr_lang'] == "fr"){echo explode("/fr", base_url(uri_string()))[1] ?? "";}else{echo explode("/en", base_url(uri_string()))[1] ?? "";}?>">Fr</a></li>
										<li><a href="<?php echo base_url()."en"; if($_SESSION['abbr_lang'] == "fr"){echo explode("/fr", base_url(uri_string()))[1] ?? "";}else{echo explode("/en", base_url(uri_string()))[1] ?? "";}?>">En</a></li>
									</ul>
								</li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</nav>