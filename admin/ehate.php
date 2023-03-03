<?php require_once 'header.php';
require_once 'sidebar.php';
$ehatesor=$baglanti->prepare("SELECT * FROM ehate   order by ehate_sira ASC");
$ehatesor->execute(array());


 ?>



  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
       <?php
if (@$_GET['durum']=="okey") { ?>
  <p style="color:green ; ">Uğurlu oldu</p>
<?php } elseif (@$_GET['durum']=="no") { ?>
  <p style="color:red ; ">Xəta((</p>

<?php }  ?>
          <div class="col-12">
            <div class="card">          
              <div class="card-header">
                <h3 class="card-title">Əhatə dairəmiz</h3>
                <a href="ekle.php?sayfa=ehate">
<button style="float:right" type="submit" class="btn btn-info">Yeni dairə əlavə et</button></a>
           <!-- 
     <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
           -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    
                     
                       <th>Başlıq</th>
                    
                      <th> Sıra</th>
                   
                      <th>Sil</th>
                       <th></th>
                    </tr>
                  </thead>
                  <tbody>
                   	<?php 

while ($ehatecek=$ehatesor->fetch(PDO::FETCH_ASSOC)) { ?>
         
                    <tr>
                      <td><?php echo $ehatecek['ehate_baslik'] ?></td>
                     
                        <td><?php echo $ehatecek['ehate_sira'] ?></td>
                          
                         <td>
                           <form action="islem.php" method="post">
                          <button  name="ehatesil" type="submit" class="btn btn-danger">Sil</button>
                            
                          <input name="id" value="<?php echo $ehatecek['ehate_id'] ?>" type="hidden">
                           <input name="eskiresim" value="<?php echo $ehatecek['ehate_resim'] ?>" type="hidden">
                           </form>

                        </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
 
        </div>
    
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php require_once 'footer.php'; ?>