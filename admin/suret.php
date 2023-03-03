<?php require_once 'header.php';
require_once 'sidebar.php';

$suretsor=$baglanti->prepare("SELECT * FROM suret where suret_id=?");
$suretsor->execute(array(1));
$suretcek=$suretsor->fetch(PDO::FETCH_ASSOC);



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
                <h3 class="card-title">Sürət bölümü</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
           
               
                   <div class="form-group">
                    <label for="exampleInputEmail1">1-ci qutu</label>
                    <input name="bir" value="<?php echo  $suretcek['suret_baslik1'] ?>" type="text" class="form-control"  placeholder="Lütfen sitenizin başlığını giriniz.">
                  </div> 
                
                   <div class="form-group">
                    <label for="exampleInputEmail1">2-ci qutu</label>
                    <input name="iki" value="<?php echo  $suretcek['suret_baslik2'] ?>" type="text" class="form-control"  placeholder="Lütfen sitenizin başlığını giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">3-cu qutu</label>
                    <input name="uc" value="<?php echo  $suretcek['suret_baslik3'] ?>" type="text" class="form-control"  placeholder="Lütfen sitenizin başlığını giriniz.">
                  </div> 
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="suretkaydet" style="float:right" type="submit" class="btn btn-primary">Yadda saxla</button>
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