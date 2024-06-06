<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/logo.png" type="image/x-icon" />
	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Open+Sans:300,400,600,700"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
				urls: ['../assets/css/fonts.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/azzara.min.css">
</head>

<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<?php if (session()->getFlashdata('msg')) : ?>
				<div class="alert alert-warning">
					<?= session()->getFlashdata('msg') ?>
				</div>
			<?php endif; ?>
			<div class="row d-flex justify-content-center">
				<a href="<?= base_url() ?>">
					<img src="assets/img/logo.png" alt="" class="img-fluid" width="200em" height="auto">
				</a>
			</div>
			<!-- <h3 class="text-center text-success"><a href="<?= base_url() ?>">Desa Wisata Bumi Arum</a></h3> -->

			<form action="<?= base_url(); ?>/auth/aksi" method="post">
				<div class=" login-form">
					<div class="form-group form-floating-label">
						<input id="username" name="username" type="text" class="form-control input-border-bottom">
						<label for="username" class="placeholder">Username</label>
					</div>
					<div class="form-group form-floating-label">
						<input id="password" name="password" type="password" class="form-control input-border-bottom">
						<label for="password" class="placeholder">Password</label>
						<div class="show-password">
							<i class="flaticon-interface"></i>
						</div>
					</div>
					<div class="form-action mb-3">
						<button class="btn btn-primary btn-rounded" style="width: 6rem;">Login</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	</div>
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<script src="../assets/js/ready.js"></script>
</body>

</html>