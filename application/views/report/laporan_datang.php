<?php
	$tanggal = date("m/Y");
	$tgl = date("d");
	$thn = date("Y");
	$tanggal_waktu = date("m");
	if ($tanggal_waktu == "01") {
		$bln = "Januari";
	} elseif ($tanggal_waktu == "02") {
		$bln = "Februari";
	} elseif ($tanggal_waktu == "03") {
		$bln = "Maret";
	} elseif ($tanggal_waktu == "04") {
		$bln = "April";
	} elseif ($tanggal_waktu == "05") {
		$bln = "Mei";
	} elseif ($tanggal_waktu == "06") {
		$bln = "Juni";
	} elseif ($tanggal_waktu == "07") {
		$bln = "Juli";
	} elseif ($tanggal_waktu == "08") {
		$bln = "Agustus";
	} elseif ($tanggal_waktu == "09") {
		$bln = "September";
	} elseif ($tanggal_waktu == "10") {
		$bln = "Oktober";
	} elseif ($tanggal_waktu == "11") {
		$bln = "November";
	} elseif ($tanggal_waktu == "12") {
		$bln = "Desember";
	}

	$queryData = "SELECT * FROM comes WHERE MONTH(come_at) = '".$bulan."' AND YEAR(come_at) = '".$tahun."' ";

	$dataDatang = $this->db->query($queryData)->result_array();

?>

<!DOCTYPE html>
<html>
<head>
	<title>laporan pendatang</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
		}

		b {
			font-family: "Times New Roman", Times, serif;
			font-size: 14px;
		}

		td {
			font-family: "Times New Roman", Times, serif;
			font-size: 12px;
		}

		tr {
			font-family: "Times New Roman", Times, serif;
			font-size: 12px;
		}

		.text {
			font-family: "Times New Roman", Times, serif;
			font-size: 12px;
			font-weight: lighter;
		}

		/*table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}
		font {
			font-family: "Times New Roman", Times, serif;
		}
		.text2 {
			font-family: "Times New Roman", Times, serif;
		}

		table thead tr th {
			font-family: "Times New Roman", Times, serif;
		}*/

	</style>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
	<!-- Ionicons -->
	<!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css; ?>"> -->
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url('plugins/datatables-bs4/css/dataTables.bootstrap4.css'); ?>">
	<!-- overlayScrollbars -->
	<!-- <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css'); ?>"> -->
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url('plugins/select2/css/select2.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>">
	<!-- Google Font: Source Sans Pro -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Times+New+Romans:300,400,400i,700" rel="stylesheet"> -->

</head>
<body>
	<!-- <center>
		<table>
			<tr>
				<td><img src="<?php echo base_url('dist/img/logo.png'); ?>" width="85px"></td>
				<td>
				<center>
					<font size="4"><b>PEMERINTAH KABUPATEN SIDOARJO</b></font><br>
					<font size="4"><b>KECAMATAN TANGGULANGIN</b></font><br>
					<font size="4"><b>DESA KALITENGAH</b></font><br>
					<font size="2"><i>JL.Raya Tanggulangin No.45, Telepon.085645846027, Email : kalitengah45@gmail.com</i></font>
				</center>
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<hr color="black">
				</td>
			</tr>
			<table width="70%">
				<tr>
					<td ></td>
				</tr>
				<td>
					<center>
					</center>
				</td>
			</table>
		</table>
	</center> -->

	<center><img src="<?php echo base_url('dist/img/headers.png'); ?>" height="110px"></center><br>

	<center><font><b>UNTUK ARSIP DESA / KELURAHAN </b></font></center>
	<center><font><b>TABEL DATA PENDATANG</b></font></center><br>


			<!-- <div class="float-right">Sidoarjo, <?php echo $tgl." ".$bln." ".$thn;?></div> -->
	<center>
		<table border="1" >
			<thead>
				<tr>
					<th>No</th>
					<th>NIK</th>
					<th>Nama</th>
					<th>Tanggal Meninggal</th>
					<th>Jenis Kelamin</th>
					<th>RT/RW</th>
					<th>Nik Pelapor</th>
					<th>Nama Pelapor</th>
					<th>Keperluan</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; ?>
				<?php foreach($dataDatang as $datang) : ?>
				<tr>
					<td>
						<?php echo $no; ?>
					</td>
					<td>
						<?php echo $datang['come_nik']; ?>
					</td>
					<td>
						<?php echo $datang['come_name']; ?>
					</td>
					<td>
						<?php echo $datang['come_at']; ?>
					</td>
					<td>
						<?php echo $datang['come_gender']; ?>
					</td>
					<td>
						RT
						<?php echo $datang['neighbourhood']; ?>/ RW
						<?php echo $datang['hamlet']; ?>
					</td>
					<td>
						<?php echo $datang['whistleblower_nik']; ?>
					</td>
					<td>
						<?php echo $datang['whistleblower_name']; ?>
					</td>
					<td>
						<?php echo $datang['reason']; ?>
					</td>
				</tr>
				<?php $no++; ?>
				<?php endforeach; ?>
			</tbody>
		</table>
	</center>
	<br>

	<div style="text-align: right; padding-right: 80px;">
		<div class="text">Sidoarjo, <?php echo $tgl." ".$bln." ".$thn;?></div>
		<br>
		<br>
		<br>
		<br>
		<div class="text">(Kecamatan Tanggulangin)</div>
	</right>

	<script>
		window.print();
	</script>

</body>