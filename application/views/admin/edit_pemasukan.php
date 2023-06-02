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
            <li class="breadcrumb-item"><a href="<?= base_url('Welcome') ?>">Home</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->


    <div class="card">
      <div class="card-body">
        <section class="content">
          <?php  foreach($pemasukan as $msk) { ?>

            <form action="<?php echo base_url().'Pemasukan/update'; ?>"
              method="post">
              <div class="form-group">
                <label>Keterangan</label>
                <input type="hidden" name="id_pemasukan" class="form-control" value="<?php echo $msk->id_pemasukan ?>"> 
                <input type="text" name="ket" class="form-control" value="<?php echo $msk->ket ?>"> 
              </div>

              <div class="form-group">
                <label>Nilai</label>
                <input type="text" name="nilai" class="form-control" value="<?php echo $msk->nilai ?>">
              </div>

              <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="<?php echo $msk->tanggal ?>"> 
              </div>

              <div class="form-group">
                <label>Nama - Nomor UKM</label> 
                <select name="id_ukm" class="form-control">
                  <?php foreach ($dataukm as $key): ?>
                    <option value="<?php echo $key->id_ukm ?> "><?php echo $key->nama_ukm ?>&nbsp;-&nbsp;
                      <?php echo $key->nomor_ukm ?> </option>
                    <?php endforeach ?>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>

                <button type="Reset" class="btn btn-danger">Reset</button>   
                
              </form>
            <?php }?>
          </section>          
        </div>
      </div>
    </div>
  </div>
