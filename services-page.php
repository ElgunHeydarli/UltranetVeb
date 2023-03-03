<?php require_once 'header.php';
$galerisor=$baglanti->prepare("SELECT * FROM galeri where galeri_id=:galeri_id");
$galerisor->execute(array(
'galeri_id'=>$_GET['galeri_id']
));
$galericek=$galerisor->fetch(PDO::FETCH_ASSOC);

 
 ?>

  <div class="page-title-area">
    <div class="container">
      <div class="page-title-content">
        <h2><?php echo $galericek['galeri_baslik'] ?></h2>
        <ul>
          <li><a href="index">Əsas</a></li>
          <li><?php echo $galericek['galeri_baslik'] ?></li>
        </ul>
      </div>
    </div>
  </div>

  <section class="services-details-area ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="services-details">
        
            <div class="services-details-desc">
              <h3><?php echo $galericek['galeri_baslik'] ?></h3>
              <p><?php echo $galericek ['galeri_aciklama'] ?></p>
            
           
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

 <?php require_once 'footer.php'; ?>