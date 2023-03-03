<?php require_once 'header.php'; ?>

  <div class="page-title-area page-title-style-two">
    <div class="container">
      <div class="page-title-content">
        <h2>Əhatə dairəmiz</h2>
        <ul>
          <li><a href="index">Əsas</a></li>
          <li>Əhatə dairəmiz</li>
        </ul>
      </div>
    </div>
  </div>

  <section class="services-area ptb-100">
    <div class="container">
      <div class="section-title">
      
        <h2>Əhatə dairəmiz</h2>
      </div>
      <div class="row">



<?php $ehatesor=$baglanti->prepare("SELECT * FROM ehate order by ehate_sira ASC ");
$ehatesor->execute(array()); ?>



                <?php while ($ehatecek=$ehatesor->fetch(PDO::FETCH_ASSOC)) {  ?>  




        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="services-box">
         <i style="width:50px;" class="fas fa-map-marker-alt"></i>
            <h3><?php echo $ehatecek['ehate_baslik'] ?></h3>
            <div class="image-box">
             
            </div>
          </div>
        </div>
   






<?php } ?>
      </div>
    </div>
  </section>



  <?php require_once 'footer.php'; ?>