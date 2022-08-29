
<body class="hold-transition login-page">
		
	<!-- </body> -->
	<div class="login-box">
		<div class="login-logo">
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<center>
					<img src="<?php echo base_url('dist/img/logo.png'); ?>" width=170px />
					<br>
					<br>
					<h5>
						<b>Sistem Data Kependudukan</b>
					</h5>
					<br>
				</center>

				<?php if($this->session->flashdata('flash')) : ?>
				  <div class="row mt-3">
				    <div class="pr-2 pl-2" style="width: 100%;">
				      <div class="alert alert-danger alert-dismissible fade show" role="alert">
				        <?php echo $this->session->flashdata('flash'); ?>
				        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				    </div>
				  </div>
				<?php endif; ?>		

				<form action="<?php echo base_url('auth') ?>" method="post" autocomplete="off">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="username" placeholder="Username" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" id="pass" name="password" placeholder="Password" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div style="margin-bottom: 10px;">
                        <input type="checkbox" onclick="myFunction()"><span style="color: grey; font-size: 15px;"> Show Password</span>
					</div>
					<div class="row">
						<div class="col-12">
							<button type="submit" class="btn btn-success btn-block btn-flat" name="btnLogin" title="Masuk Sistem">
								<b>LOGIN SIPANDU</b>
							</button>
						</div>
				</form>

				</div>
			</div>
		</div>
		<!-- /.login-box -->

