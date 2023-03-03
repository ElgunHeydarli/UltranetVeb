<?php
require_once 'admin/baglanti.php';
require_once 'function.php';

$bolsor=$baglanti->prepare("SELECT * FROM bol where bol_id=?");
$bolsor->execute(array(1));
$bolcek=$bolsor->fetch(PDO::FETCH_ASSOC);


$ayarsor=$baglanti->prepare("SELECT * FROM ayarlar where ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$hakkimizdasor=$baglanti->prepare("SELECT * FROM hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(1));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

$slidersor=$baglanti->prepare("SELECT * FROM slider where slider_id=?");
$slidersor->execute(array(1));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);

$portfoliosor=$baglanti->prepare("SELECT * FROM portfolio where portfolio_id=?");
$hakkimizdasor->execute(array(1));
$portfoliocek=$portfoliosor->fetch(PDO::FETCH_ASSOC);

$logosor=$baglanti->prepare("SELECT * FROM logo where logo_id=?");
$logosor->execute(array(1));
$logocek=$logosor->fetch(PDO::FETCH_ASSOC);

$suretsor=$baglanti->prepare("SELECT * FROM suret where suret_id=?");
$suretsor->execute(array(1));
$suretcek=$suretsor->fetch(PDO::FETCH_ASSOC);
 ?>











<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets\css\bootstrap.min.css">

    <link rel="stylesheet" href="assets\css\animate.min.css">

    <link rel="stylesheet" href="assets\css\fontawesome.min.css">

    <link rel="stylesheet" href="assets\css\magnific-popup.min.css">

    <link rel="stylesheet" href="assets\css\flaticon.css">

    <link rel="stylesheet" href="assets\css\nice-select.min.css">

    <link rel="stylesheet" href="assets\css\meanmenu.css">

    <link rel="stylesheet" href="assets\css\owl.carousel.min.css">

    <link rel="stylesheet" href="assets\css\style.css">
    <meta name="google-site-verification" content="lo2-Si8ayvqFAyB95IUI4xNQaAhnkiVwyFm52XI3f7o" />

    <link rel="stylesheet" href="assets\css\responsive.css">
        <meta name="description" content="<?php echo $ayarcek['ayar_aciklama'] ?>" />
    <meta name="keywords" content="<?php echo $ayarcek['ayar_anahtar'] ?>" />
   <title><?php echo $ayarcek['ayar_baslik'] ?></title>
   
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-192827387-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-192827387-1');
</script>
   
   
</head>

<body>

  

    <header class="header-area">
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="top-header-left">
                            <p><span>Əlaqə nömrəsi:</span> <a href="#"><?php echo $ayarcek ['ayar_telefon'] ?></a></p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="top-header-right">
                           
                            <ul class="social">
                                <li><a href="<?php echo $ayarcek['ayar_facebook'] ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>

                                <li><a href="<?php echo $ayarcek['ayar_instagram'] ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-area">
            <div class="bahama-mobile-nav">
                <div class="logo">
                    <a href="index">
                        <img style="width:130px;" src="admin/resimler/logo/<?php echo $logocek['logo_resim'] ?>" alt="logo">
                    </a>
                </div>
            </div>
            <div class="bahama-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index">
                            <img style="width:180px;" src="admin/resimler/logo/<?php echo $logocek['logo_resim'] ?>" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="index" class="nav-link">Əsas səhifə </a>
                                 
                                </li>
                                <li class="nav-item"><a href="about" class="nav-link">Haqqımızda</a>
                                  
                                </li>
                                <li class="nav-item"><a href="services" class="nav-link">Ödəniş üsulu </a>
                                 
                                </li>
                                <li class="nav-item"><a href="pricing" class="nav-link">Tariflər</a>
                                 
                                </li>
                                <li class="nav-item"><a href="ehate" class="nav-link">Əhatə dairəmiz</a>
                                
                                </li>
                            
                                <li class="nav-item"><a href="contact" class="nav-link">Bizimlə əlaqə</a></li>
                            </ul>
                         
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>