<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/favicon.png">
	<title>Bite System</title>

	<!-- page css -->
	<link href="<?php echo base_url() ?>assets/dist/css/pages/login-register-lock.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?php echo base_url() ?>assets/dist/css/style.min.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

	<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url() ?>">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- ============================================================== -->

	<!-- Preloader - style you can find in spinners.css -->

	<!-- ============================================================== -->

	<div class="preloader">

		<div class="loader">

			<div class="loader__figure"></div>

			<p class="loader__label">Bite System</p>

		</div>

	</div>

	<!-- ============================================================== -->

	<!-- Main wrapper - style you can find in pages.scss -->

	<!-- ============================================================== -->

	<section id="wrapper" class="login-register login-sidebar" style="background-image:url(assets/images/background/login-register.jpg);">

		<div class="login-box card">

			<div class="card-body">

				<form class="form-horizontal form-material" id="form_login" method="post" action="">

					<a href="javascript:void(0)" class="text-center db"><img src="<?php echo base_url() ?>assets/images/logo-icon.png" alt="Home" /><br/><img src="<?php echo base_url() ?>assets/images/logo-text.png" alt="Home" /></a>

					<div class="form-group m-t-40">

						<div class="col-xs-12">

							<input class="form-control" type="text" required="" placeholder="Nome de Usuario" name="usuario" id="usuario">

						</div>

					</div>

					<div class="form-group">

						<div class="col-xs-12">

							<input class="form-control" type="password" required="" placeholder="Senha" name="senha" id="senha">

						</div>

					</div>

					 <div class="alert alert-danger" id="alerta_login" style="display: none;"></div>

					<div class="form-group text-center m-t-20">

						<div class="col-xs-12">

							<button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="button" name="btn_entrar" id="btn_entrar">Entrar</button>

						</div>

					</div>
				
				</form>
			
			</div><!--card-body-->
		
		</div><!--login box-->
		
	</section>
	
	<div class="col-md-3" style="display: none;">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title">Success Message <small>(Click on image)</small></h4>

				<img src="<?php echo base_url() ?>assets/images/alert/alert3.png" alt="alert" class="img-responsive model_img" id="sa-error">

			</div>

		</div>

	</div>

	<!-- ============================================================== -->
	
	<!-- End Wrapper -->
	
	<!-- ============================================================== -->
	
	<!-- ============================================================== -->
	
	<!-- All Jquery -->
	
	<!-- ============================================================== -->
	
	<script src="<?php echo base_url() ?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>

	
	<!-- Sweet-Alert  -->
	    <script src="<?php echo base_url() ?>assets/node_modules/sweetalert/sweetalert.min.js"></script>
	    <script src="<?php echo base_url() ?>assets/node_modules/sweetalert/jquery.sweet-alert.custom.js"></script>
	
	<!-- Bootstrap tether Core JavaScript -->
	
	<script src="<?php echo base_url() ?>assets/node_modules/popper/popper.min.js"></script>
	
	<script src="<?php echo base_url() ?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Login -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/login.js"></script>
	
	<!--Custom JavaScript -->
	
	<script type="text/javascript">
	
		$(function() {
		
			$(".preloader").fadeOut();
		
		});
		
		$(function() {
		$('[data-toggle="tooltip"]').tooltip()
		});
		
			// ============================================================== 
			// Login and Recover Password 
			// ============================================================== 
			$('#to-recover').on("click", function() {
			$("#loginform").slideUp();
			$("#recoverform").fadeIn();
		
		});
	
	</script>

</body>

</html>