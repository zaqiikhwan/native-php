<?php
  require('view/template/header.php');
  require('view/template/navbar.php');
  require('view/template/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?=$title?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?=$title?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-users mr-1"></i>
                  Kategori
              </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-plus"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <?php if(isset($_SESSION['message'])){if($_SESSION['message']!=''){echo $_SESSION['message'];$_SESSION['message']='';}}
      ?>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama kategori</th>
                <th>Edit</th>
                <th>DELETE</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $i=1;
                $total_debit=0;
                $total_credit=0;
                foreach($data as $d){?>
                  <tr>
                    <td><?= $d['nama_kategori']?></td>
                    <td align="center"><button type="button" class="btn btn-sm bg-warning" data-toggle="modal" data-target="#exampleModalss<?=$i;?>"><i class="fas fa-edit"></i></button></td>
                    <td align="center"><button type="button" class="btn btn-sm bg-danger" data-toggle="modal" data-target="#exampleModals<?=$i;?>"><i class="fas fa-trash"></i></button></td>
                    </tr>
                    <div class="modal fade" id="exampleModals<?=$i;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <form method="post" action="index.php?delete_kategori">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                            Apakah anda yakin ingin menghapus data ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="text" value="<?= $d['id_kategori']; ?>" name="del"style="display:none">
                            <input  type="submit" class="btn btn-sm bg-danger" value="DELETE">
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>
                    
                    
                    <div class="modal fade" id="exampleModalss<?=$i;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <form method="post" action="index.php?edit_kategori"  enctype="multipart/form-data">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT Data </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
      
                            <div class="modal-body">
                                <div class="form-group row" style="margin-left:-120px;">
                                  <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Nama kategori</label>
                                  <div class="col-sm-6">
                                    <input type="" name="nama_kategori" value="<?=$d['nama_kategori']?>" class="form-control" placeholder="" required>
                                  </div>
                                </div>  
                                
                            </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <input type="text" value="<?= $d['id_kategori']; ?>" name="del"style="display:none">
                          <input  type="submit" class="btn btn-sm bg-warning" value="EDIT">
                        </div>
                      </div>
                      </form>
                      </div>
                    </div>
                  <?php

                   $i++;}
                  ?>
                  </tbody>
                </table>
          </div>
              <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form method="post" action="index.php?add_kategori"  >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Nama kategori</label>
          <div class="col-sm-6">
            <input type="" name="nama_kategori" class="form-control" placeholder="" required>
          </div>
        </div>  
        
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input  type="submit" class="btn btn-primary" value="Simpan data">
      </div>
    </div>
     </form>
  </div>
</div>
<?php
  require('view/template/footer.php');