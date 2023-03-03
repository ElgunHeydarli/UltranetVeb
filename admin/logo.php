<?php require_once 'header.php';
require_once 'sidebar.php';

$logosor=$baglanti->prepare("SELECT * FROM logo where logo_id=?");
$logosor->execute(array(1));
$logocek=$logosor->fetch(PDO::FETCH_ASSOC);



 ?>
 
  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">
 <?php
if (@$_GET['durum']=="okey") { ?>
  <p style="color:green ; ">Uğurlu oldu</p>
<?php } elseif (@$_GET['durum']=="no") { ?>
  <p style="color:red ; ">Xəta((</p>

<?php }  ?>
              <div class="card-header">
                <h3 class="card-title">Logo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
                 <div class="form-group">
                    <label for="exampleInputEmail1">Logo Resim</label>
                    <img style="width:200px" src="resimler/logo/<?php echo $logocek['logo_resim'] ?>">
                  </div>
                  <input type="hidden" name="eskiresim" value="<?php echo $logocek['logo_resim'] ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Logo Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   
            
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="logokaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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