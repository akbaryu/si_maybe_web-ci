<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="<?php echo base_url('assets2/img/favicon.ico')?>" type="assets/image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url('assets2/img/favicon.ico')?>'" type="assets/image/x-icon" />
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/bootstrap.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/responsive.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/camera.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/style.css')?>" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo base_url('assets2/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets2/js/jquery.easing.1.3.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets2/js/camera.js')?>"></script>
    <script src="<?php echo base_url('assets2/js/jquery.ui.totop.js')?>" type="text/javascript"></script>
	<script>
      $(document).ready(function(){   
              jQuery('.camera_wrap').camera();
        });    
	</script>		
	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
  
  <!--[if (gt IE 9)|!(IE)]><!-->
  <script type="text/javascript" src="<?php echo base_url('assets2/js/jquery.mobile.customized.min.js')?>"></script>
  <!--<![endif]-->
  	<!--[if lt IE 9]>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="assets2/css/docs.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets2/css/ie.css">
  <![endif]-->
</head>

<body>
<!--==============================header=================================-->
<header class="p0">
    <div class="container">
    	<div class="row">
        	<div class="span12">
            	<div class="header-block clearfix">
                    <div class="clearfix header-block-pad">
                        <h1 class="brand"><a href="<?php echo site_url('home')?>">
                        <img src="<?php echo base_url('assets2/img/logo.png')?>" alt=""></a><span>Mom and Baby Care</span></h1>

                        <form id="search-form" action="<?php echo site_url('Gejala/hasil')?>"
                        method="get" accept-charset="utf-8" class="navbar-form">
                            <input type="text" value="Pencarian Gejala" name="cari"/> 
                            <a value="cari" type="submit"/> 
                        </form>
                    </div>
                    <div class="navbar navbar_ clearfix">
                        <div class="navbar-inner navbar-inner_">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>                                                   
                                <div class="nav-collapse nav-collapse_ collapse">
                                    <ul class="nav sf-menu">
                                      <li class="active li-first"><a href="<?php echo site_url('Home')?>"><em class="hidden-phone"></em><span class="visible-phone">Beranda</span></a></li>
                                      <li><a href="<?php echo site_url('Gejala')?>">Gejala</a></li>
                                      <li><a href="<?php echo site_url('Tips')?>">Kategori Tips</a></li>
                                      <li><a href="<?php echo site_url('event/')?>">Event</a></li>
                                      <li class="<?php if(isset($active_register_event)){echo $active_register_event ;}?>"><a href="<?php echo site_url('register_event')?>">Register Event</a></li>
                                       
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                     </div>   
                </div>
            </div>
         </div>   
    </div>

</header>