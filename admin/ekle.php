<?php require_once 'header.php';
require_once 'sidebar.php';



 ?>
 <?php if($_GET['sayfa']=="brend"){ ?>
  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Logo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
            
                    <div class="form-group">
                    <label for="exampleInputEmail1">sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="brendkaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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
<?php } elseif ($_GET['sayfa']=="galeri") { ?>
<div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Xidmətlərimiz</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Başlıq</label>
                    <input name="baslik"  type="text" class="form-control" >
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Kategoriya</label>
                    <input name="kat"  type="text" class="form-control" >
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1"> Sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra giriniz.">
                  </div> 
                   
                    <div class="form-group">
                    <label for="exampleInputEmail1">Açıklama</label>
                           <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div> 
                   
                

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="galerikaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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

<?php } elseif ($_GET['sayfa']=="ehate") { ?>
<div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Əhatə dairəmiz</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                
                    <div class="form-group">
                    <label for="exampleInputEmail1">Başlıq</label>
                    <input name="baslik"  type="text" class="form-control" >
                  </div> 
                 
                     <div class="form-group">
                    <label for="exampleInputEmail1"> Sıra</label>
                    <input name="sira"  type="text" class="form-control"  >
                  </div> 
                   
                  
                   
                

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="ehatekaydet" style="float:right" type="submit" class="btn btn-primary">Yadda saxla</button>
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



<?php } elseif ($_GET['sayfa']=="tarif") { ?>
 <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Tariflər</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Başlıq</label>
                    <input name="baslik"  type="text" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Açıqlama</label>
                    <input name="baslikk"  type="text" class="form-control"  >
                  </div> 

  <div class="form-group">
                    <label for="exampleInputEmail1"> Sira</label>
                    <input name="sira"  type="text" class="form-control">
                  </div> 
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1"> 1ci</label>
                    <input name="bir"  type="text" class="form-control">
                  </div> 
 <div class="form-group">
                    <label for="exampleInputEmail1"> 2ci</label>
                    <input name="iki"  type="text" class="form-control">
                  </div> 
 <div class="form-group">
                    <label for="exampleInputEmail1"> 3cu</label>
                    <input name="uc"  type="text" class="form-control">
                  </div> 
 <div class="form-group">
                    <label for="exampleInputEmail1"> 4cu</label>
                    <input name="dord"  type="text" class="form-control">
                  </div> 
 <div class="form-group">
                    <label for="exampleInputEmail1"> 5ci</label>
                    <input name="bes"  type="text" class="form-control">
                  </div> 
 <div class="form-group">
                    <label for="exampleInputEmail1"> Qiymet</label>
                    <input name="qiymet"  type="text" class="form-control">
                  </div> 
 



          
                   

                </div>
                <!-- /.card-body -->
 
                <div class="card-footer">
                  <button name="tarifkaydet" style="float:right" type="submit" class="btn btn-primary">Yadda saxla</button>
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
<?php } elseif ($_GET['sayfa']=="fikir") { ?>   ?>
 <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Fikirlər</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
             
               
                  <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Ad soyad</label>
                    <input name="baslik"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 


                   <div class="form-group">
                    <label for="exampleInputEmail1">Sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                 
                
                     <div class="form-group">
                    <label for="exampleInputEmail1">Aciklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                   

                </div>
                <!-- /.card-body -->
 
                <div class="card-footer">
                  <button name="fikirkaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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
<?php } elseif ($_GET['sayfa']=="portfolio") { ?>    ?>

<div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Portfolio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Şəkil</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
            
                    <div class="form-group">
                    <label for="exampleInputEmail1">sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="portfoliokaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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