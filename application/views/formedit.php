<?php
	defined('BASEPATH') OR exit('Akses langsung tidak diperbolehkan');
	//echo validation_errors();
?>

<section class="container-fluid">
	<div class="row">
		<div class="form-input clearfix">
			<div class="col-md-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Mobil</div>
					<div class="panel-body">
						<!-- <form action="<?php //echo base_url('home/tambahmobil'); ?>" method="post" class="form-horizontal"> -->
						
						<?php echo form_open('home/updatemobil/'.$db->kdmobil, ['class' => 'form-horizontal', 'method' => 'post']); ?>
							<div class="form-group <?php echo (form_error('kdmobil') != '') ? 'has-error has-feedback' : '' ?>">
								<label for="kdmobil" class="control-label col-sm-2">Kode Mobil </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="kdmobil" value="<?php echo set_value('kdmobil', $db->kdmobil); ?>" readonly>
									<?php echo (form_error('kdmobil') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
									<?php echo form_error('kdmobil'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis" class="control-label col-sm-2">Jenis </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="jenis" value="<?php echo set_value('jenis', $db->jenis); ?>">
									<?php echo form_error('jenis'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tahun" class="control-label col-sm-2">Tahun </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="tahun" value="<?php echo set_value('tahun', $db->tahun); ?>">
									<?php echo form_error('tahun'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga" class="control-label col-sm-2">Harga </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="harga" value="<?php echo set_value('harga', $db->harga); ?>">
									<?php echo form_error('harga'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nopol" class="control-label col-sm-2">No. Polisi </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="nopol" value="<?php echo set_value('nopol', $db->nopol); ?>">
									<?php echo form_error('nopol'); ?>
								</div>
							</div>

							<div class="form-group">
								<div class="btn-form col-sm-12">
									<a href="<?php echo base_url('home/lihatdata'); ?>"><button type="button" class='btn btn-default'>Batal</button></a>
									<button type="submit" class='btn btn-primary'>Simpan</button>
								</div>
							</div>
						<?php echo form_close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>