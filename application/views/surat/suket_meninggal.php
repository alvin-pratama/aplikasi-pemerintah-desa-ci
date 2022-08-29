<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-file"></i> Laporan Kematian</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Bulan</label>
				<div class="col-sm-4">
					<select name="bulan" id="bulan" class="form-control" required>
						<option selected="selected">- Pilih Bulan -</option>
						<option value="01">Januari</option>
						<option value="02">Februari</option>
						<option value="03">Maret</option>
						<option value="04">April</option>
						<option value="05">Mei</option>
						<option value="06">Juni</option>
						<option value="07">Juli</option>
						<option value="08">Agustus</option>
						<option value="09">September</option>
						<option value="10">Oktober</option>
						<option value="11">November</option>
						<option value="12">Desember</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tahun</label>
				<div class="col-sm-4">
					<select name="tahun" id="tahun" class="form-control" required>
						<option selected="selected">- Pilih Tahun -</option>
						<?php
							for($i=date('Y'); $i>=date('Y')-100; $i-=1){
								echo"<option value='$i'> $i </option>";
							}
						?>
					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Cetak" value="Cetak" class="btn btn-info">
		</div>
	</form>
</div>
