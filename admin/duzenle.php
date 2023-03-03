<?php require_once 'header.php';
require_once 'sidebar.php';



 ?>
 <?php if($_GET['sayfa']=="brend"){


$brendsor=$baglanti->prepare("SELECT * FROM brend where brend_id=:brend_id");
$brendsor->execute(array(
'brend_id'=>$_GET['id']
));
$brendcek=$brendsor->fetch(PDO::FETCH_ASSOC);






  ?>
  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">brend düzenle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">brend Resim</label>
                    <img style="width:150px" src="resimler/brend/<?php echo $brendcek['brend_resim'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">brend Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                  
               
                    <div class="form-group">
                    <label for="exampleInputEmail1">brend sıra</label>
                    <input value="<?php echo $brendcek['brend_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen brend üye ismini  giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">brend link</label>
                    <input value="<?php echo $brendcek['brend_link'] ?>" name="link"  type="text" class="form-control"  placeholder="Lütfen brend üye ismini  giriniz.">
                  </div> 
                
                  
                </div>
                <!-- /.card-body -->
    <input type="hidden" name="eskiresim" value="<?php echo $brendcek['brend_resim'] ?>">
        <input type="hidden" name="id" value="<?php echo $brendcek['brend_id'] ?>">
                <div class="card-footer">
                  <button name="brendduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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
<?php } elseif ($_GET['sayfa']=="galeri") {


$galerisor=$baglanti->prepare("SELECT * FROM galeri where galeri_id=:galeri_id");
$galerisor->execute(array(
'galeri_id'=>$_GET['id']
));
$galericek=$galerisor->fetch(PDO::FETCH_ASSOC);



 ?>
 <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Xidmətlər düzəliş</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <img style="width:150px" src="resimler/galeri/<?php echo $galericek['galeri_resim'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Xidmət başlığı</label>
                    <input value="<?php echo $galericek['galeri_baslik'] ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen brend üye ismini  giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Kateqoriya</label>
                    <input value="<?php echo $galericek['galeri_kat'] ?>" name="kat"  type="text" class="form-control"  placeholder="Lütfen brend üye ismini  giriniz.">
                  </div> 
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1"> Sıra</label>
                    <input value="<?php echo $galericek['galeri_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen brend üye ismini  giriniz.">
                  </div> 
                  
                 
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Xidmət haqqında məlumat</label>
                  <textarea name="aciklama" id="editor1" class="ckeditor"><?php echo $galericek['galeri_aciklama'] ?></textarea>
                  </div> 

                </div>
                <!-- /.card-body -->
    <input type="hidden" name="eskiresim" value="<?php echo $galericek['galeri_resim'] ?>">
        <input type="hidden" name="id" value="<?php echo $galericek['galeri_id'] ?>">
                <div class="card-footer">
                  <button name="galeriduzenle" style="float:right" type="submit" class="btn btn-primary">Yadda saxla</button>
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
<?php } elseif ($_GET['sayfa']=="tarif") {

$tarif_sor=$baglanti->prepare("SELECT * FROM tarif where tarif_id=:tarif_id");
$tarif_sor->execute(array(
'tarif_id'=>$_GET['id']
));
$tarifcek=$tarif_sor->fetch(PDO::FETCH_ASSOC);




 ?>
 <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Tariflər düzəliş</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Başlıq</label>
                    <input value="<?php echo $tarifcek['tarif_yazi'] ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen başlık giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Açıqlama</label>
                    <input value="<?php echo $tarifcek['tarif_baslik'] ?>" name="baslikk"  type="text" class="form-control"  placeholder="Lütfen anahtar kelime   giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">  sıra</label>
                    <input value="<?php echo $tarifcek['tarif_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">1ci</label>
                    <input value="<?php echo $tarifcek['tarif_bir'] ?>" name="bir"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">2ci</label>
                    <input value="<?php echo $tarifcek['tarif_iki'] ?>" name="iki"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">3cu</label>
                    <input value="<?php echo $tarifcek['tarif_uc'] ?>" name="uc"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">4cu</label>
                    <input value="<?php echo $tarifcek['tarif_dord'] ?>" name="dord"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">5ci</label>
                    <input value="<?php echo $tarifcek['tarif_bes'] ?>" name="bes"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Qiymet</label>
                    <input value="<?php echo $tarifcek['tarif_qiymet'] ?>" name="qiymet"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                 
                  
                </div>
                <!-- /.card-body -->
    <input type="hidden" name="eskiresim" value="<?php echo $tarifcek['tarif_resim'] ?>">
        <input type="hidden" name="id" value="<?php echo $tarifcek['tarif_id'] ?>">
                <div class="card-footer">
                  <button name="tarifduzenle" style="float:right" type="submit" class="btn btn-primary">Yadda saxla</button>
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
<?php } ?>


<?php require_once 'footer.php'; ?> 