<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
         <div class=""><a href="<?= base_url('dashboard') ?>">Home</a> / Pemasukan</div>
       </div><!-- /.col -->
       <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">

        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Pemasukan UMKM</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <div class="input-group">
        <div class="form-outline">
          <?php echo form_open('User_pemasukan/search')?>
          <input type="text" name="keyword" class="form-control" placeholder="Search"/>
          <label class="form-label"></label>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-bottom: 23px; margin-left: 8px;">
          <i class="fas fa-search"></i>
        </button>
        <?php echo form_close()?>
      </div>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px;">+ Tambah Pemasukan
      </button>

      <table id="example2" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>NO</th>
            <th>Keterangan</th>
            <th>Nilai</th>
            <th>Tanggal</th>
            <th>Nomor UKM</th>
            <th>Nama UKM</th>
            <th colspan="2">Aksi</th>        
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($pemasukan as $msk) : ?>
            <tr class="text-center">
              <td><?php echo $no++ ?></td>
              <td><?php echo $msk-> ket ?></td>
              <td><?php echo $msk-> nilai?></td>
              <td><?php echo $msk-> tanggal?></td>
              <td><?php echo $msk-> nomor_ukm?></td>
              <td><?php echo $msk-> nama_ukm?></td>

              <td><?php echo anchor('User_pemasukan/edit/'.$msk->id_pemasukan,'<i style="color:#343A40;" class="fa fa-edit"></i>') ?></td>
              <td onclick="javascript:return confirm('apakah anda yakin hapus?')"><?php echo anchor('User_pemasukan/hapus/'.$msk->id_pemasukan,'<i style="color:red" class="fas fa-trash"></i></a>') ?></td>
            </tr>
          <?php endforeach ?>
          <tr class="text-center">
            <td calspan="3" rowspan="2" style="padding: 25px;"></td>
            <td style="padding: 25px;"><b>Total Pemasukan</b></td>
            <td style="padding: 25px;">
              <b><?php echo $dataukma; ?></b>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Pemasukan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url().'User_pemasukan/tambah_aksi'; ?> ">
            <div class="form-group">
              <label>Keterangan</label> 
              <input type="text" name="ket" class="form-control">
            </div>
            <div class="form-group">
              <label>Nilai</label> 
              <input type="text" name="nilai" class="form-control">
            </div>
            <div class="form-group">
              <label>Tanggal</label> 
              <input type="date" name="tanggal" class="form-control">
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
              <button type="Reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

