<?php require_once 'header.php'; ?>

  <div class="page-title-area">
    <div class="container">
      <div class="page-title-content">
        <h2>Tariflər</h2>
        <ul>
          <li><a href="index">Əsas</a></li>
          <li>Tariflər</li>
        </ul>
      </div>
    </div>
  </div>

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






<?php $tarifsor=$baglanti->prepare("SELECT * FROM tarif order by tarif_sira ASC limit 6 ");
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






            </div>
        </div>
    </section>

    <section class="faq-area bg-image ptb-100 extra-pt">
      
    </section>



<?php require_once 'footer.php'; ?>