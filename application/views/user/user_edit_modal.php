<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title ?> |</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('user_dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->


    <div class="card">
      <div class="card-body">
        <section class="content">
          <?php  foreach($modal as $mdl) { ?>

            <form action="<?php echo base_url().'User_modal/update'; ?>"
              method="post">
              <div class="form-group">
                <label>Nilai</label>
                <input type="hidden" name="id_modal" class="form-control" value="<?php echo $mdl->id_modal ?>"> 
                <input type="text" name="nilai" class="form-control" value="<?php echo $mdl->nilai ?>">
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
