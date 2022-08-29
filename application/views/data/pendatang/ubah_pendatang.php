<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> Ubah Data Pendatang</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="card-body">

			<input type="hidden" name="id" value="<?php echo $datang['id']; ?>">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK Pendatang</label>
				<div class="col-sm-6">
					<input type="number" class="form-control" id="come_nik" name="come_nik" placeholder="NIK Pendatang"  value="<?php echo $datang['come_nik']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap Pendatang</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="come_name" name="come_name" placeholder="Nama Lengkap" value="<?php echo $datang['come_name']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="come_gender" id="come_gender" class="form-control">
						<!-- <option>- Pilih -</option> -->
						<?php
							if ($datang['come_gender'] == "LAKI-LAKI") echo "<option value='LAKI-LAKI' selected>LAKI-LAKI</option>";
							else echo "<option value='LAKI-LAKI'>LAKI-LAKI</option>";

							if ($datang['come_gender'] == "PEREMPUAN") echo "<option value='PEREMPUAN' selected>PEREMPUAN</option>";
							else echo "<option value='PEREMPUAN'>PEREMPUAN</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Datang</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="come_at" name="come_at" value="<?php echo $datang['come_at']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<select name="neighbourhood" id="neighbourhood" class="form-control">
						<!-- <option>- Pilih Rt -</option> -->
						<?php
							if ($datang['neighbourhood'] == "1") echo "<option value='1' selected>1</option>";
							else echo "<option value='1'>1</option>";

							if ($datang['neighbourhood'] == "2") echo "<option value='2' selected>2</option>";
							else echo "<option value='2'>2</option>";

							if ($datang['neighbourhood'] == "3") echo "<option value='3' selected>3</option>";
							else echo "<option value='3'>3</option>";

							if ($datang['neighbourhood'] == "4") echo "<option value='4' selected>4</option>";
							else echo "<option value='4'>4</option>";

							if ($datang['neighbourhood'] == "5") echo "<option value='5' selected>5</option>";
							else echo "<option value='5'>5</option>";

							if ($datang['neighbourhood'] == "6") echo "<option value='6' selected>6</option>";
							else echo "<option value='6'>6</option>";

							if ($datang['neighbourhood'] == "7") echo "<option value='7' selected>7</option>";
							else echo "<option value='7'>7</option>";

							if ($datang['neighbourhood'] == "8") echo "<option value='8' selected>8</option>";
							else echo "<option value='8'>8</option>";

							if ($datang['neighbourhood'] == "9") echo "<option value='9' selected>9</option>";
							else echo "<option value='9'>9</option>";

							if ($datang['neighbourhood'] == "10") echo "<option value='10' selected>10</option>";
							else echo "<option value='10'>10</option>";

							if ($datang['neighbourhood'] == "11") echo "<option value='11' selected>11</option>";
							else echo "<option value='11'>11</option>";

							if ($datang['neighbourhood'] == "12") echo "<option value='12' selected>12</option>";
							else echo "<option value='12'>12</option>";
						?>
					</select>
				</div>
				<div class="col-sm-3">
					<select name="hamlet" id="hamlet" class="form-control">
						<!-- <option>- Pilih Rw -</option> -->
						<?php
							if ($datang['hamlet'] == "1") echo "<option value='1' selected>1</option>";
							else echo "<option value='1'>1</option>";

							if ($datang['hamlet'] == "2") echo "<option value='2' selected>2</option>";
							else echo "<option value='2'>2</option>";

							if ($datang['hamlet'] == "3") echo "<option value='3' selected>3</option>";
							else echo "<option value='3'>3</option>";

							if ($datang['hamlet'] == "4") echo "<option value='4' selected>4</option>";
							else echo "<option value='4'>4</option>";

							if ($datang['hamlet'] == "5") echo "<option value='5' selected>5</option>";
							else echo "<option value='5'>5</option>";

							if ($datang['hamlet'] == "6") echo "<option value='6' selected>6</option>";
							else echo "<option value='6'>6</option>";

							if ($datang['hamlet'] == "7") echo "<option value='7' selected>7</option>";
							else echo "<option value='7'>7</option>";

							if ($datang['hamlet'] == "8") echo "<option value='8' selected>8</option>";
							else echo "<option value='8'>8</option>";

							if ($datang['hamlet'] == "9") echo "<option value='9' selected>9</option>";
							else echo "<option value='9'>9</option>";

							if ($datang['hamlet'] == "10") echo "<option value='10' selected>10</option>";
							else echo "<option value='10'>10</option>";

							if ($datang['hamlet'] == "11") echo "<option value='11' selected>11</option>";
							else echo "<option value='11'>11</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Dusun</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="village" name="village" placeholder="Dusun" value="<?php echo $datang['village']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="urban_village" name="urban_village" placeholder="Desa" value="<?php echo $datang['urban_village']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="district" name="district" placeholder="Kecamatan" value="<?php echo $datang['district']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kabupaten</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="regency" name="regency" placeholder="Kabupaten" value="<?php echo $datang['regency']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK Pelapor</label>
				<div class="col-sm-6">
					<input type="number" class="form-control" id="whistleblower_nik" name="whistleblower_nik" placeholder="NIK Pelapor" value="<?php echo $datang['whistleblower_nik']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap Pelapor</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="whistleblower_name" name="whistleblower_name" placeholder="Nama Lengkap" value="<?php echo $datang['whistleblower_name']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keperluan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="reason" name="reason" placeholder="Keperluan" value="<?php echo $datang['reason']; ?>" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Perbarui" value="Perbarui" class="btn btn-info">
			<a href="<?php echo base_url('Pendatang'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>