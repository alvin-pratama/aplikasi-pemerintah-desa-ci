<div class="card card-dark">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Kelahiran</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">

			<?php if($this->session->flashdata('flash')) : ?>
			  <div class="row mt-3">
			    <div class="pr-2 pl-2" style="width: 100%;">
			      <div class="alert alert-success alert-dismissible fade show" role="alert">
			        Data Lahir <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>.
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			    </div>
			  </div>
			<?php endif; ?>

			<div>
				<a href="<?php echo base_url('Lahir/tambah'); ?>" class="btn btn-primary" style="color: white">
					<i class="fa fa-edit" style="color: white"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr class="bg-dark">
						<th>No</th>
						<th>NIK Bayi</th>
						<th>Nama Bayi</th>
						<th>Jekel</th>
						<th>Tgl Lahir</th>
						<th>Nama Ibu</th>
						<th>KK</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach($lahir as $lhr) : ?>
					<tr>
						<td>
							<?php echo $no; ?>
						</td>
						<td>
							<?php echo $lhr['baby_nik']; ?>
						</td>
						<td>
							<?php echo $lhr['baby_name']; ?>
						</td>
						<td>
							<?php echo $lhr['baby_gender']; ?>
						</td>
						<td>
							<?php echo $lhr['borned_at']; ?>
						</td>
						<td>
							<?php echo $lhr['mother_name']; ?>
						</td>
						<td>
							<?php echo $lhr['kk']; ?>
						</td>
						<td>
							<a href="<?php echo base_url('Lahir/ubah/'); ?><?php echo $lhr['id']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="<?php echo base_url('Lahir/hapus/'); ?><?php echo $lhr['id']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>
					<?php $no++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>