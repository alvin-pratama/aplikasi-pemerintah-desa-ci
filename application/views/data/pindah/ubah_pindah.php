<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title" style="color: white">
			<i class="fa fa-edit" style="color: white"></i> Ubah Data Pindah</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<input type="hidden" name="id" value="<?php echo $pindah['id']; ?>">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="number" class="form-control" id="nik" name="nik" placeholder="NIK"  value="<?php echo $pindah['nik']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" value="<?php echo $pindah['name']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="gender" id="gender" class="form-control">
						<!-- <option>- Pilih -</option> -->
						<?php
							if ($pindah['gender'] == "LAKI-LAKI") echo "<option value='LAKI-LAKI' selected>LAKI-LAKI</option>";
							else echo "<option value='LAKI-LAKI'>LAKI-LAKI</option>";

							if ($pindah['gender'] == "PEREMPUAN") echo "<option value='PEREMPUAN' selected>PEREMPUAN</option>";
							else echo "<option value='PEREMPUAN'>PEREMPUAN</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Pindah</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="moved_at" name="moved_at" value="<?php echo $pindah['moved_at']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<select name="neighbourhood" id="neighbourhood" class="form-control">
						<!-- <option>- Pilih Rt -</option> -->
						<?php
							if ($pindah['neighbourhood'] == "1") echo "<option value='1' selected>1</option>";
							else echo "<option value='1'>1</option>";

							if ($pindah['neighbourhood'] == "2") echo "<option value='2' selected>2</option>";
							else echo "<option value='2'>2</option>";

							if ($pindah['neighbourhood'] == "3") echo "<option value='3' selected>3</option>";
							else echo "<option value='3'>3</option>";

							if ($pindah['neighbourhood'] == "4") echo "<option value='4' selected>4</option>";
							else echo "<option value='4'>4</option>";

							if ($pindah['neighbourhood'] == "5") echo "<option value='5' selected>5</option>";
							else echo "<option value='5'>5</option>";

							if ($pindah['neighbourhood'] == "6") echo "<option value='6' selected>6</option>";
							else echo "<option value='6'>6</option>";

							if ($pindah['neighbourhood'] == "7") echo "<option value='7' selected>7</option>";
							else echo "<option value='7'>7</option>";

							if ($pindah['neighbourhood'] == "8") echo "<option value='8' selected>8</option>";
							else echo "<option value='8'>8</option>";

							if ($pindah['neighbourhood'] == "9") echo "<option value='9' selected>9</option>";
							else echo "<option value='9'>9</option>";

							if ($pindah['neighbourhood'] == "10") echo "<option value='10' selected>10</option>";
							else echo "<option value='10'>10</option>";

							if ($pindah['neighbourhood'] == "11") echo "<option value='11' selected>11</option>";
							else echo "<option value='11'>11</option>";

							if ($pindah['neighbourhood'] == "12") echo "<option value='12' selected>12</option>";
							else echo "<option value='12'>12</option>";
						?>
					</select>
				</div>
				<div class="col-sm-3">
					<select name="hamlet" id="hamlet" class="form-control">
						<!-- <option>- Pilih Rw -</option> -->
						<?php
							if ($pindah['hamlet'] == "1") echo "<option value='1' selected>1</option>";
							else echo "<option value='1'>1</option>";

							if ($pindah['hamlet'] == "2") echo "<option value='2' selected>2</option>";
							else echo "<option value='2'>2</option>";

							if ($pindah['hamlet'] == "3") echo "<option value='3' selected>3</option>";
							else echo "<option value='3'>3</option>";

							if ($pindah['hamlet'] == "4") echo "<option value='4' selected>4</option>";
							else echo "<option value='4'>4</option>";

							if ($pindah['hamlet'] == "5") echo "<option value='5' selected>5</option>";
							else echo "<option value='5'>5</option>";

							if ($pindah['hamlet'] == "6") echo "<option value='6' selected>6</option>";
							else echo "<option value='6'>6</option>";

							if ($pindah['hamlet'] == "7") echo "<option value='7' selected>7</option>";
							else echo "<option value='7'>7</option>";

							if ($pindah['hamlet'] == "8") echo "<option value='8' selected>8</option>";
							else echo "<option value='8'>8</option>";

							if ($pindah['hamlet'] == "9") echo "<option value='9' selected>9</option>";
							else echo "<option value='9'>9</option>";

							if ($pindah['hamlet'] == "10") echo "<option value='10' selected>10</option>";
							else echo "<option value='10'>10</option>";

							if ($pindah['hamlet'] == "11") echo "<option value='11' selected>11</option>";
							else echo "<option value='11'>11</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Dusun</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="village" name="village" placeholder="Dusun" value="<?php echo $pindah['village']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="urban_village" name="urban_village" placeholder="Desa" value="<?php echo $pindah['urban_village']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="district" name="district" placeholder="Kecamatan" value="<?php echo $pindah['district']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kabupaten</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="regency" name="regency" placeholder="Kabupaten" value="<?php echo $pindah['regency']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sebab</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="reason" name="reason" placeholder="Penyebab" value="<?php echo $pindah['reason']; ?>" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Perbarui" value="Perbarui" class="btn btn-info">
			<a href="<?php echo base_url('Pindah'); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>