<?php require_once 'header.php';
require_once 'sidebar.php';

$slidersor=$baglanti->prepare("SELECT * FROM slider where slider_id=?");
$slidersor->execute(array(1));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);



 ?>
 
  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">
 <?php
if (@$_GET['durum']=="okey") { ?>
  <p style="color:green ; ">Uğurlu olud</p>
<?php } elseif (@$_GET['durum']=="no") { ?>
  <p style="color:red ; ">Uğursuz</p>

<?php }  ?>
              <div class="card-header">
                <h3 class="card-title">Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <img style="width:200px" src="resimler/slider/<?php echo $slidercek['slider_resim'] ?>">
                  </div>
                  <input type="hidden" name="eskiresim" value="<?php echo $slidercek['slider_resim'] ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Başlıq</label>
                    <input name="baslik" value="<?php echo  $slidercek['slider_baslik'] ?>" type="text" class="form-control"  placeholder="Lütfen sitenizin başlığını giriniz.">
                  </div> 
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Başlıq kiçik yazi</label>
                    <input name="yazi" value="<?php echo  $slidercek['slider_yazi'] ?>" type="text" class="form-control"  placeholder="Lütfen sitenizin başlığını giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Açıqlama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"><?php echo $slidercek['slider_aciklama'] ?></textarea>
                  </div>
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="sliderkaydet" style="float:right" type="submit" class="btn btn-primary">Yadda saxla</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
 </div>
        </div>
    
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php require_once 'footer.php'; ?> 