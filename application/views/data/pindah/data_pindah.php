<div class="card card-dark">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pindah</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">

			<?php if($this->session->flashdata('flash')) : ?>
			  <div class="row mt-3">
			    <div class="pr-2 pl-2" style="width: 100%;">
			      <div class="alert alert-success alert-dismissible fade show" role="alert">
			        Data Penduduk Pindah <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>.
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			    </div>
			  </div>
			<?php endif; ?>

			<div>
				<a href="<?php echo base_url('Pindah/tambah'); ?>" class="btn btn-primary" style="color: white">
					<i class="fa fa-edit" style="color: white"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr class="bg-dark">
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Jekel</th>
						<th>Tanggal</th>
						<th>RT/RW</th>
						<th>Alasan</th>
						<!-- <th>Kecamatan Pindah</th> -->
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach($pindah as $pdh) : ?>
					<tr>
						<td>
							<?php echo $no; ?>
						</td>
						<td>
							<?php echo $pdh['nik']; ?>
						</td>
						<td>
							<?php echo $pdh['name']; ?>
						</td>
						<td>
							<?php echo $pdh['gender']; ?>
						</td>
						<td>
							<?php echo $pdh['moved_at']; ?>
						</td>
						<td>
							RT
							<?php echo $pdh['neighbourhood']; ?>/ RW
							<?php echo $pdh['hamlet']; ?>.
						</td>
						<td>
							<?php echo $pdh['reason']; ?>
						</td>
						<!-- <td>
							<?php echo $pdh['kec_pindah']; ?>
						</td> -->
						<td>
							<a href="<?php echo base_url('Pindah/ubah/'); ?><?php echo $pdh['id']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="<?php echo base_url('Pindah/hapus/'); ?><?php echo $pdh['id']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
						<?php $no++; ?>
						<?php endforeach; ?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>