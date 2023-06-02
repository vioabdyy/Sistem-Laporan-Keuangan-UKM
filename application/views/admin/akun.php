<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class=""><a href="<?= base_url('dashboard') ?>">Home</a> / Akun</div>         </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Akun UMKM</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

          <div class="input-group">
            <div class="form-outline">
              <?php echo form_open('akun/search')?>
              <input type="text" name="keyword" class="form-control" placeholder="Search"/>
              <label class="form-label"></label>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 23px; margin-left: 8px;">
              <i class="fas fa-search"></i>
            </button>
            <?php echo form_close()?>
          </div>

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px;">+ Tambah Akun
          </button>
          <table id="" class="table table-bordered table-striped">
            <tr class="text-center">
              <th>NO</th>
              <th>Nomor UKM</th>
              <th>Username</th>
              <th>Nama UKM</th>
              <th>Alamat</th>
              <th>No Handphone</th>
              <th>Email</th>
              <th>Level</th>
              <th colspan="2">Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($akun_ukm as $akn) : ?>
             <tr class="text-center">
               <td> <?php echo $no++ ?></td>
               <td><?php echo $akn-> nomor_ukm?></td>
               <td><?php echo $akn-> username?></td>
               <td><?php echo $akn-> nama_ukm?></td>
               <td><?php echo $akn-> alamat?></td>
               <td><?php echo $akn-> nohp?></td>
               <td><?php echo $akn-> email?></td>
               <td><?php echo $akn-> level?></td>
               <td><?php echo anchor('Akun/edit/'.$akn->id_ukm,'<i style="color:#343A40;" class="fa fa-edit"></i>') ?></td>
               <td onclick="javascript:return confirm('apakah anda yakin hapus?')"><?php echo anchor('Akun/hapus/'.$akn->id_ukm,'<i style="color:red" class="fas fa-trash"></i></a>') ?></td>
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
            <h5 class="modal-title" id="exampleModalLabel">Tambah Akun UKM</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url().'Akun/tambah_aksi'; ?> ">
              <div class="form-group">
                <label>Nomor UKM</label> 
                <input type="text" name="nomor_ukm" class="form-control">
              </div>
              <div class="form-group">
                <label>Username</label> 
                <input type="text" name="username" class="form-control">
              </div>
              <div class="form-group">
                <label>Password</label> 
                <input type="text" name="password" class="form-control">
              </div>
              <div class="form-group">
                <label>Nama UKM</label> 
                <input type="text" name="nama_ukm" class="form-control">
              </div>
              <div class="form-group">
                <label>Alamat</label> 
                <input type="text" name="alamat" class="form-control">
              </div>
              <div class="form-group">
                <label>No Handphone</label> 
                <input type="text" name="nohp" class="form-control">
              </div>
              <div class="form-group">
                <label>Email</label> 
                <input type="text" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label>Pilih Level</label>
                <select  name="level" class="form-control">
                  <option value="user">User</option>
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