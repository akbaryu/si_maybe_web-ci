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
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="ckeditor/style.js"></script>
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
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets2/css/docs.css')?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets2/css/ie.css')?>">
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
                        <h1 class="brand"><a href="<?php echo site_url('Home/masuk_admin')?>"><img src="<?php echo base_url('assets2/img/logo.png')?>" alt=""></a><span>Mom and Baby Care</span></h1>
<!--                        <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >Pencarian Gejala-->
<!--                            <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"  >-->
                            <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                        </form>
                    </div>
                    <div class="navbar navbar_ clearfix">
                        <div class="navbar-inner navbar-inner_">
                            <div class="container">
                                <button class="btn btn-navbar" data-toggle="collapse" data-target="#menu-utama">MENU</button>
                                <div class="nav-collapse nav-collapse_ collapse" id="menu-utama">
                                    <ul class="nav sf-menu">
                                        <li class="active li-first"><a href="<?php echo site_url('Home/masuk_admin')?>"><em class="hidden-phone"></em><span class="visible-phone">Beranda</span></a></li>
                                        <li><a href="<?php echo site_url('Gejala/tambah_gejala')?>">Tambah Gejala</a></li>
                                        <li><a href="<?php echo site_url('Tips/tambah_tips')?>">Tambah Tips</a></li>
                                        <li><a href="<?php echo site_url('Event/tambah_event')?>">Tambah & Hapus Event</a></li>
                                        <li><a href="<?php echo site_url('Konfirmasi_event/verify_event')?>">Konfirmasi Event</a>
                                        <li><a href="<?php echo site_url('Update/pilih_kategori')?>">Update</a></li>
                                        <li><a href="<?php echo site_url('login3/logout');?>">Logout</a></li>
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