<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class=""><a href="<?= base_url('user_dashboard') ?>">Home</a> / Edit Akun</div>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->


    <div class="card">
      <div class="card-body">
        <section class="content">
          <?php  foreach($akun as $akn) { ?>

            <form action="<?php echo base_url().'User_akun/update'; ?>"
              method="post">
              <div class="form-group">
                <label>Nomor UKM</label>
                <input type="hidden" name="id_ukm" class="form-control" value="<?php echo $akn->id_ukm ?>"> 
                <input type="text" name="nomor_ukm" class="form-control" value="<?php echo $akn->nomor_ukm ?>"> 
              </div>

              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $akn->username ?>"> 
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control" value="<?php echo $akn->password ?>"> 
              </div>

              <div class="form-group">
                <label>Nama UKM</label>
                <input type="text" name="nama_ukm" class="form-control" value="<?php echo $akn->nama_ukm ?>"> 
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $akn->alamat ?>"> 
              </div>

              <div class="form-group">
                <label>No Handphone</label>
                <input type="text" name="nohp" class="form-control" value="<?php echo $akn->nohp ?>"> 
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $akn->email ?>"> 
              </div>

              <button type="Reset" class="btn btn-danger">Reset</button>   
              <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
          <?php }?>
        </section>          
      </div>
    </div>
  </div>
</div>
