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

	// $data_mendu = $meninggal['id_pdd'];
	// $bln_mendu = ['data_bulan'];
	// $bln_men = $data_tahun;

	// echo $bulan;
	// echo $tahun;
    // var_dump($bln_men);
    // die;

	// $data_mendu = $meninggal['id_pdd'];
	// $datas = $meninggal['sebab'];

	// $queryData = "SELECT *
 //                    FROM `tb_mendu` JOIN `tb_pdd`
 //                      ON `tb_mendu`.`id_pdd` = `tb_pdd`.`id_pend`
 //                   WHERE `tb_pdd`.`id_pend` = `id_pdd` AND MONTH(tgl_mendu) = '".$bulan."' AND YEAR(tgl_mendu) = '".$tahun."'
 //                  ";

    // $dataPenduduk = $this->db->query($queryData)->result_array();

	$queryData = "SELECT * FROM deaths WHERE MONTH(dead_at) = '".$bulan."' AND YEAR(dead_at) = '".$tahun."' ";

	$dataKematian = $this->db->query($queryData)->result_array();

	// $dataKematian = $this->db->query()->result_array();
    // var_dump($dataKematian);
    // die;
?>


<!DOCTYPE html>
<html>
<head>
	<title>laporan meninggal</title>
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
	<center><font><b>TABEL DATA KEMATIAN</b></font></center><br>


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
					<th>Sebab</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; ?>
				<?php foreach($dataKematian as $meninggoy) : ?>
				<tr>
					<td>
						<?php echo $no; ?>
					</td>
					<td>
						<?php echo $meninggoy['nik']; ?>
					</td>
					<td>
						<?php echo $meninggoy['name']; ?>
					</td>
					<td>
						<?php echo $meninggoy['dead_at']; ?>
					</td>
					<td>
						<?php echo $meninggoy['gender']; ?>
					</td>
					<td>
						RT
						<?php echo $meninggoy['neighbourhood']; ?>/ RW
						<?php echo $meninggoy['hamlet']; ?>
					</td>
					<td>
						<?php echo $meninggoy['reason']; ?>
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
	</right>

	<script>
		window.print();
	</script>

</body>

</html>
