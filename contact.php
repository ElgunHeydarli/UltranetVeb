<?php require_once 'header.php'; ?>

  <div class="page-title-area">
    <div class="container">
      <div class="page-title-content">
        <h2>Bizimlə əlaqə</h2>
        <ul>
          <li><a href="index">Əsas </a></li>
          <li>Bizimlə əlaqə</li>
        </ul>
      </div>
    </div>
  </div>

  <section class="contact-info-box-area ptb-100 pb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-contact-info">
            <div class="icon">
              <i class="flaticon-place"></i>
            </div>
            <h3>Ünvan</h3>
            <p><?php echo $ayarcek['ayar_adres'] ?> </p>
            <div class="image-box">
              <img src="assets\img\shape-image\1.png" alt="image">
              <img src="assets\img\shape-image\1.png" alt="image">
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-contact-info">
            <div class="icon">
              <i class="flaticon-address-book"></i>
            </div>
            <h3>Email</h3>
            <p><a href="<?php echo $ayarcek['ayar_email'] ?>"><span class="__cf_email__" data-cfemail="533a3d353c132a3c2621203a27363d323e367d303c3e">
            <?php echo $ayarcek['ayar_email'] ?></span></a></p>
            <div class="image-box">
              <img src="assets\img\shape-image\1.png" alt="image">
              <img src="assets\img\shape-image\1.png" alt="image">
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
          <div class="single-contact-info">
            <div class="icon">
              <i class="flaticon-signal"></i>
            </div>
            <h3>Əlaqə nömrəsi</h3>
            <p><a href="#"><?php echo $ayarcek['ayar_telefon'] ?></a></p>
                 <p><a href="#"><?php echo $ayarcek['ayar_telefon2'] ?></a></p>
                       <p><a href="#"><?php echo $ayarcek['ayar_telefon3'] ?></a></p>
                       <p><a href="#"><?php echo $ayarcek['ayar_telefon4'] ?></a></p>
            <div class="image-box">
              <img src="assets\img\shape-image\1.png" alt="image">
              <img src="assets\img\shape-image\1.png" alt="image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-area ptb-100">
    <div class="container">
      <div class="section-title">

        <h2>Bizimlə əlaqə</h2>
      </div>
      <form action="admin/islem.php" method="post">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Adınız və Soyadınız" name="isim">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email" name="eposta" >
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" name="nomre" placeholder="Əlaqə nömrəsi" >
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" name="xidmet" placeholder="xidmet">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <textarea name="mesaj" class="form-control"  cols="30" rows="10" placeholder="Mesajınız"></textarea>
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <button  onclick="myFunction()" name="elaqe" type="submit" class="btn btn-primary">Göndər</button>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>
          </div>
        </div>
      </form>
    </div>
  </section>


<script>
function myFunction() {
  alert("Hörmətli istifadəçi, mesajınız uğurla göndərildi, təşəkkür edirik :)");
}
</script>
 <?php require_once 'footer.php'; ?>