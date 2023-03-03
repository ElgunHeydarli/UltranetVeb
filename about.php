<?php require_once 'header.php'; ?>

  <div class="page-title-area page-title-style-two">
    <div class="container">
      <div class="page-title-content">
        <h2>Haqqımızda</h2>
        <ul>
          <li><a href="index">Əsas</a></li>
          <li>Haqqımızda</li>
        </ul>
      </div>
    </div>
  </div>

  <section class="about-area ptb-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
          <div class="about-content">
            <span class="sub-title"><i class="flaticon-care-about-environment"></i> Haqqımızda</span>
            <h2><?php echo $bolcek['bol_baslik'] ?></h2>
            <p><?php echo $bolcek ['bol_aciklama'] ?></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="about-main-image">
            <img src="admin/resimler/hakkimizda/<?php echo $bolcek ['bol_resim'] ?>" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>



 


<?php require_once 'footer.php'; ?>