<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> TAMBAH DATA LAHIR</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Kartu Keluarga</label>
				<div class="col-sm-6">
					<input type="number" class="form-control" id="kk" name="kk" placeholder="KK" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK Bayi</label>
				<div class="col-sm-6">
					<input type="number" class="form-control" id="baby_nik" name="baby_nik" placeholder="NIK" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap Bayi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="baby_name" name="baby_name" placeholder="Nama Lengkap Bayi" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="baby_gender" id="baby_gender" class="form-control">
						<option>- Pilih -</option>
						<option value="LAKI-LAKI">LAKI-LAKI</option>
						<option value="PEREMPUAN">PEREMPUAN</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Lahir</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="borned_at" name="borned_at" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap Ibu</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Nama Lengkap Ibu" required>
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
		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="<?php echo base_url('Lahir'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>