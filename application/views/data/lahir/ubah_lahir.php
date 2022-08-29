<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> Ubah Data Lahir</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="card-body">

			<input type="hidden" name="id" value="<?php echo $lahir['id']; ?>">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Kartu Keluarga</label>
				<div class="col-sm-6">
					<input type="number" class="form-control" id="kk" name="kk" placeholder="KK" value="<?php echo $lahir['kk']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK Bayi</label>
				<div class="col-sm-6">
					<input type="number" class="form-control" id="baby_nik" name="baby_nik" placeholder="NIK"value="<?php echo $lahir['baby_nik']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap Bayi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="baby_name" name="baby_name" placeholder="Nama Lengkap Bayi"value="<?php echo $lahir['baby_name']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="baby_gender" id="baby_gender" class="form-control">
						<!-- <option>- Pilih -</option> -->
						<?php
							if ($lahir['baby_gender'] == "LAKI-LAKI") echo "<option value='LAKI-LAKI' selected>LAKI-LAKI</option>";
							else echo "<option value='LAKI-LAKI'>LAKI-LAKI</option>";

							if ($lahir['baby_gender'] == "PEREMPUAN") echo "<option value='PEREMPUAN' selected>PEREMPUAN</option>";
							else echo "<option value='PEREMPUAN'>PEREMPUAN</option>";
						?>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Lahir</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="borned_at" name="borned_at"value="<?php echo $lahir['borned_at']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap Ibu</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Nama Lengkap Ibu"value="<?php echo $lahir['mother_name']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<select name="neighbourhood" id="neighbourhood" class="form-control">
						<!-- <option>- Pilih Rt -</option> -->
						<?php
							if ($lahir['neighbourhood'] == "1") echo "<option value='1' selected>1</option>";
							else echo "<option value='1'>1</option>";

							if ($lahir['neighbourhood'] == "2") echo "<option value='2' selected>2</option>";
							else echo "<option value='2'>2</option>";

							if ($lahir['neighbourhood'] == "3") echo "<option value='3' selected>3</option>";
							else echo "<option value='3'>3</option>";

							if ($lahir['neighbourhood'] == "4") echo "<option value='4' selected>4</option>";
							else echo "<option value='4'>4</option>";

							if ($lahir['neighbourhood'] == "5") echo "<option value='5' selected>5</option>";
							else echo "<option value='5'>5</option>";

							if ($lahir['neighbourhood'] == "6") echo "<option value='6' selected>6</option>";
							else echo "<option value='6'>6</option>";

							if ($lahir['neighbourhood'] == "7") echo "<option value='7' selected>7</option>";
							else echo "<option value='7'>7</option>";

							if ($lahir['neighbourhood'] == "8") echo "<option value='8' selected>8</option>";
							else echo "<option value='8'>8</option>";

							if ($lahir['neighbourhood'] == "9") echo "<option value='9' selected>9</option>";
							else echo "<option value='9'>9</option>";

							if ($lahir['neighbourhood'] == "10") echo "<option value='10' selected>10</option>";
							else echo "<option value='10'>10</option>";

							if ($lahir['neighbourhood'] == "11") echo "<option value='11' selected>11</option>";
							else echo "<option value='11'>11</option>";

							if ($lahir['neighbourhood'] == "12") echo "<option value='12' selected>12</option>";
							else echo "<option value='12'>12</option>";
						?>
					</select>
				</div>
				<div class="col-sm-3">
					<select name="hamlet" id="hamlet" class="form-control">
						<!-- <option>- Pilih Rw -</option> -->
						<?php
							if ($lahir['hamlet'] == "1") echo "<option value='1' selected>1</option>";
							else echo "<option value='1'>1</option>";

							if ($lahir['hamlet'] == "2") echo "<option value='2' selected>2</option>";
							else echo "<option value='2'>2</option>";

							if ($lahir['hamlet'] == "3") echo "<option value='3' selected>3</option>";
							else echo "<option value='3'>3</option>";

							if ($lahir['hamlet'] == "4") echo "<option value='4' selected>4</option>";
							else echo "<option value='4'>4</option>";

							if ($lahir['hamlet'] == "5") echo "<option value='5' selected>5</option>";
							else echo "<option value='5'>5</option>";

							if ($lahir['hamlet'] == "6") echo "<option value='6' selected>6</option>";
							else echo "<option value='6'>6</option>";

							if ($lahir['hamlet'] == "7") echo "<option value='7' selected>7</option>";
							else echo "<option value='7'>7</option>";

							if ($lahir['hamlet'] == "8") echo "<option value='8' selected>8</option>";
							else echo "<option value='8'>8</option>";

							if ($lahir['hamlet'] == "9") echo "<option value='9' selected>9</option>";
							else echo "<option value='9'>9</option>";

							if ($lahir['hamlet'] == "10") echo "<option value='10' selected>10</option>";
							else echo "<option value='10'>10</option>";

							if ($lahir['hamlet'] == "11") echo "<option value='11' selected>11</option>";
							else echo "<option value='11'>11</option>";
						?>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Dusun</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="village" name="village" placeholder="Dusun" value="<?php echo $lahir['village']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="urban_village" name="urban_village" placeholder="Desa" value="<?php echo $lahir['urban_village']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="district" name="district" placeholder="Kecamatan" value="<?php echo $lahir['district']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kabupaten</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="regency" name="regency" placeholder="Kabupaten" value="<?php echo $lahir['regency']; ?>" required>
				</div>
			</div>
			<div class="card-footer">
				<input type="submit" name="Perbarui" value="Perbarui" class="btn btn-info">
				<a href="<?php echo base_url('Lahir'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
			</div>
	</form>
</div>