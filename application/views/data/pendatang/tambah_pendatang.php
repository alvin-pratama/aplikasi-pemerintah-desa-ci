<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> Tambah Data Pendatang</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK Pendatang</label>
				<div class="col-sm-6">
					<input type="number" class="form-control" id="come_nik" name="come_nik" placeholder="NIK Pendatang" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap Pendatang</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="come_name" name="come_name" placeholder="Nama Lengkap" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin Pendatang</label>
				<div class="col-sm-3">
					<select name="come_gender" id="come_gender" class="form-control">
						<option>- Pilih -</option>
						<option value="LAKI-LAKI">LAKI-LAKI</option>
						<option value="PEREMPUAN">PEREMPUAN</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Datang</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="come_at" name="come_at" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<select name="neighbourhood" id="neighbourhood" class="form-control">
						<option>- Pilih Rt -</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
				</div>
				<div class="col-sm-3">
					<select name="hamlet" id="hamlet" class="form-control">
						<option>- Pilih Rw -</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Dusun</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="village" name="village" placeholder="Dusun" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="urban_village" name="urban_village" placeholder="Desa" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="district" name="district" placeholder="Kecamatan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kabupaten</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="regency" name="regency" placeholder="Kabupaten" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK Pelapor</label>
				<div class="col-sm-6">
					<input type="number" class="form-control" id="whistleblower_nik" name="whistleblower_nik" placeholder="NIK Pelapor" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap Pelapor</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="whistleblower_name" name="whistleblower_name" placeholder="Nama Lengkap" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keperluan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="reason" name="reason" placeholder="Keperluan" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="<?php echo base_url('Pendatang'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>