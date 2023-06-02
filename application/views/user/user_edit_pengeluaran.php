<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<div class=""><a href="<?= base_url('user_dashboard') ?>">Home</a> / Edit Pengeluaran</div>
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
					<?php  foreach($pengeluaran as $luar) { ?>

						<form action="<?php echo base_url().'user_pengeluaran/update'; ?>"
							method="post">
							<div class="form-group">
								<label>Keterangan</label>
								<input type="hidden" name="id_pengeluaran" class="form-control" value="<?php echo $luar->id_pengeluaran ?>"> 
								<input type="text" name="ket" class="form-control" value="<?php echo $luar->ket ?>"> 
							</div>

							<div class="form-group">
								<label>Nilai</label>
								<input type="text" name="nilai" class="form-control" value="<?php echo $luar->nilai ?>"> 
							</div>

							<div class="form-group">
								<label>Tanggal</label>
								<input type="date" name="tanggal" class="form-control" value="<?php echo $luar->tanggal ?>"> 
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
