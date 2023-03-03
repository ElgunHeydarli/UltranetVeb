<?php require_once 'header.php'; ?>

  <div class="page-title-area page-title-style-two">
    <div class="container">
      <div class="page-title-content">
        <h2>Xidmətlərimiz</h2>
        <ul>
          <li><a href="index">Əsas</a></li>
          <li>Xidmətlərimiz</li>
        </ul>
      </div>
    </div>
  </div>

   <section class="services-area  ptb-100">
        <div class="container">
            <div class="section-title">
                <span>
                    <span class="icon">
                        <i class="flaticon-technical-support"></i>
                    </span>
                    <span>Bizim xidmətlər</span>
                </span>
                <h2>Xidmətlərimiz</h2>
            </div>
            <div class="row">




<?php $galerisor=$baglanti->prepare("SELECT * FROM galeri order by galeri_sira ASC limit 6 ");
$galerisor->execute(array()); ?>



                <?php while ($galericek=$galerisor->fetch(PDO::FETCH_ASSOC)) {  ?>  






                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon">
                             <img src="admin/resimler/galeri/<?php echo $galericek['galeri_resim'] ?>" alt="Service">
                        </div>
                        <h3 style="color:black;"><?php echo $galericek ['galeri_baslik'] ?></h3>
                      
                        <a href="services-page-<?=seo($galericek['galeri_baslik']).'-'.$galericek['galeri_id'] ?>" style="color:black;" class="read-more-btn">Ətraflı <i class="flaticon-arrow-pointing-to-right"></i></a>
                    </div>
                </div>





<?php } ?>





              
            </div>
        </div>
    </section>

 

 <?php require_once 'footer.php'; ?>