<div class="gagal-login" data-flashdata="<?php echo $this->session->flashdata('gagal-login'); ?>"></div>
<div class="nama-login" data-flashdata="Login Gagal"></div>
<div class="auth-wrapper">
	<div class="container-fluid h-100">
		<div class="row flex-row h-100 bg-white">
			<div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
				<div class="lavalite-bg"
					style="background-image: url('<?= base_url('assets') ?>/img/auth/bg_login.jpg')">
					<div class="lavalite-overlay"></div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
				<div class="authentication-form mx-auto">
					<div class="logo">
						<center>
							<a href="<?= base_url() ?>"><img src="<?= base_url('assets') ?>/img/logo.png"
									alt="" style="border-radius: 8px; margin-bottom: 70px;" height="120"></a>
						</center>
					</div>
					<h3>Masuk ke Restoran <Kebab></Kebab></h3>
					<p>Senang bertemu Anda kembali!</p>
					<form action="<?= base_url('auth') ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<?php if (form_error('email')) : ?>
							<input type="text" class="form-control form-control-warning form-txt-warning"
								placeholder="<?= strip_tags(form_error('email')) ?>" name="email">
							<i class="ik ik-user"></i>
							<?php else : ?>
							<input type="text" class="form-control" placeholder="Masukkan email" name="email"
								value="<?= set_value('email')?>">
							<i class="ik ik-user"></i>
							<?php endif ?>
						</div>
						<div class="form-group">
							<?php if (form_error('password')) : ?>
							<input type="password" class="form-control form-control-warning form-txt-warning"
								placeholder="<?= strip_tags(form_error('password')) ?>" name="password" ?>
							<i class="ik ik-lock"></i>
							<?php else : ?>
							<input type="password" class="form-control" placeholder="Masukkan password"
								name="password" value="<?= set_value('password')?>">
							<i class="ik ik-lock"></i>
							<?php endif ?>
						</div>
						<div class="row">
							<div class="col text-right">
								<a href="forgot-password.html">Lupa Password ?</a>
							</div>
						</div>
						<div class="sign-btn text-center">
							<button class="btn text-white" style="background-color: #2C2352;">Masuk</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>