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
      <div class="card-header">
        <h3 class="card-title">Data Modal UMKM</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px;"><i class="fas fa-plus">Tambah Modal</i>
        </button>
        <table id="" class="table table-bordered table-striped">
          <tr class="text-center">
            <th>NO</th>
            <th>Nilai</th>
            <th>Nomor UKM</th>
            <th>Nama UKM</th>
            <th colspan="2">Aksi</th>
          </tr>
          <?php
          $no = 1;
          foreach ($modal as $mdl) : ?>
           <tr class="text-center">
             <td> <?php echo $no++ ?></td>
             <td><?php echo $mdl-> nilai?></td>
             <td><?php echo $mdl-> nomor_ukm?></td>
             <td><?php echo $mdl-> nama_ukm?></td>
             <td onclick="javascript:return confirm('apakah anda yakin hapus?')"><?php echo anchor('user_modal/hapus/'.$mdl->id_modal,'<i style="color:red" class="fas fa-trash"></i></a>') ?></td>
             <td><?php echo anchor('user_modal/edit/'.$mdl->id_modal,'<i style="color:yellow;" class="fa fa-edit"></i>') ?></td>
           </tr>
         <?php endforeach ?>
       </table>
     </div>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url().'User_modal/tambah_aksi'; ?> ">
            <div class="form-group">
              <label>Nilai</label> 
              <input type="text" name="nilai" class="form-control">
              <div class="form-group">
                <label>Nama - ID UKM</label> 
                <select name="id_ukm" class="form-control">
                  <?php foreach ($dataukm as $key): ?>
                    <option value="<?php echo $key->id_ukm ?> "><?php echo $key->nama_ukm ?>&nbsp;-&nbsp;
                      <?php echo $key->nomor_ukm ?> </option>
                    <?php endforeach ?>
                  </select>
                </div>
                <button type="Reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>