<?php require_once 'header.php'; ?>

    <div class="main-banner">
        <div class="container">
            <div class="row align-items-center m-0">
                <div class="col-lg-6 p-0">
                    <div class="main-banner-content">
                        <span class="sub-title"><i class="flaticon-wifi-signal"></i> <?php echo $slidercek['slider_yazi'] ?></span>
                        <h1><?php echo $slidercek['slider_baslik'] ?></h1>
                        <p><?php echo $slidercek['slider_aciklama'] ?></p>
                     
                        <div class="btn-box">
                            <a href="contact.html" class="btn btn-primary">Bizimlə əlaqə</a>
                     
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="banner-image">
                        <img src="admin/resimler/slider/<?php echo $slidercek['slider_resim'] ?>" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-img1"><img src="assets\img\shape-image\1.png" alt="imgae"></div>
    </div>

    <section class="features-area bg-image ptb-100">
        <div class="container">
            <div class="section-title">
                <span>
                    <span class="icon">
                        <i class="flaticon-wifi"></i>
                    </span>
                    <span>Ultranet.az</span>
                </span>
                <h2>Niyə bizi seçməlisiniz?</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="flaticon-speedometer"></i>
                        </div>
                        <h3><?php echo $suretcek ['suret_baslik1'] ?></h3>
                       
                        <div class="back-icon">
                            <i class="flaticon-speedometer"></i>
                        </div>
                  
                        <div class="image-box">
                            <img src="assets\img\shape-image\2.png" alt="image">
                            <img src="assets\img\shape-image\2.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="flaticon-speedometer-1"></i>
                        </div>
                        <h3><?php echo $suretcek ['suret_baslik2'] ?></h3>
                     
                        <div class="back-icon">
                            <i class="flaticon-speedometer-1"></i>
                        </div>
                      
                        <div class="image-box">
                            <img src="assets\img\shape-image\2.png" alt="image">
                            <img src="assets\img\shape-image\2.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <h3><?php echo $suretcek ['suret_baslik3'] ?></h3>
                    
                        <div class="back-icon">
                            <i class="flaticon-support"></i>
                        </div>
                      
                        <div class="image-box">
                            <img src="assets\img\shape-image\2.png" alt="image">
                            <img src="assets\img\shape-image\2.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <span class="sub-title"><i class="flaticon-care-about-environment"></i> Biz kimik?</span>
                        <h2><?php echo $hakkimizdacek['hakkimizda_baslik'] ?></h2>
                        <p><?php echo $hakkimizdacek['hakkimizda_aciklama'] ?></p>
                   
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img style="border-radius:20px;" src="admin/resimler/hakkimizda/<?php echo $hakkimizdacek['hakkimizda_resim'] ?>" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-area bg-image ptb-100">
        <div class="container">
            <div class="section-title">
            
                <h2>Ödəniş üsulu</h2>
            </div>
            <div class="row">




<?php $galerisor=$baglanti->prepare("SELECT * FROM galeri order by galeri_sira ASC limit 6 ");
$galerisor->execute(array()); ?>



                <?php while ($galericek=$galerisor->fetch(PDO::FETCH_ASSOC)) {  ?>  






                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon">
                             <img style="border-radius:20px;" src="admin/resimler/galeri/<?php echo $galericek['galeri_resim'] ?>" alt="Service">
                        </div>
                        <h3><?php echo $galericek ['galeri_baslik'] ?></h3>
                      
                        <a href="services-page-<?=seo($galericek['galeri_baslik']).'-'.$galericek['galeri_id'] ?>" class="read-more-btn">Ətraflı <i class="flaticon-arrow-pointing-to-right"></i></a>
                    </div>
                </div>





<?php } ?>





              
            </div>
        </div>
    </section>

    <section class="pricing-area ptb-100 extra-mb pb-0">
        <div class="container">
            <div class="section-title">
                <span>
                    <span class="icon">
                        <i class="flaticon-resume"></i>
                    </span>
                    <span>Təqdim etdiyimiz tariflər</span>
                </span>
                <h2>Tariflərimiz</h2>
            
            </div>
            <div class="row">






<?php $tarifsor=$baglanti->prepare("SELECT * FROM tarif order by tarif_sira ASC limit 3 ");
$tarifsor->execute(array()); ?>



                <?php while ($tarifcek=$tarifsor->fetch(PDO::FETCH_ASSOC)) {  ?>  





                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-pricing-table">
                        <div class="pricing-header">
                            <div class="icon">
                                <i class="flaticon-online-shop"></i>
                            </div>
                            <span><?php echo $tarifcek ['tarif_yazi'] ?></span>
                            <h3><?php echo $tarifcek ['tarif_baslik'] ?></h3>
                        </div>
                        <ul class="pricing-features-list">
                            <li> <?php echo $tarifcek ['tarif_bir'] ?></li>
                            <li><?php echo $tarifcek ['tarif_iki'] ?></li>
                            <li> <?php echo $tarifcek ['tarif_uc'] ?></li>
                            <li> <?php echo $tarifcek ['tarif_dord'] ?></li>
                            <li><?php echo $tarifcek ['tarif_bes'] ?></li>
                        </ul>
                        <div class="price">
                          
                            <span>Azn</span>
                           <?php echo $tarifcek['tarif_qiymet'] ?>
                         
                        </div>
                        <a href="contact" class="view-plans-btn">Müraciət et</a>
                        <div class="image-box">
                            <img src="assets\img\shape-image\2.png" alt="image">
                            <img src="assets\img\shape-image\2.png" alt="image">
                        </div>
                    </div>
                </div>
              




<?php } ?>
<a class="btn btn-primary" href="pricing" role="button">Daha çox tariflərə keçid</a>





            </div>
        </div>
    </section>

    <section class="faq-area bg-image ptb-100 extra-pt">
      
    </section>



  

    <?php require_once 'footer.php'; ?>