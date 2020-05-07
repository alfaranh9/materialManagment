<?php
$enter_valid_email = 'Please Enter Contact Number';
$enter_password = 'The Password is required.';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet"
		  href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet"
		  href="<?php echo base_url(); ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/dist/css/AdminLTE.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/iCheck/square/blue.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin/style.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<!--<div class="register-logo">
		<img src="<?php /*echo base_url(); */?>assets/icon/logo.png">
	</div>-->
	<?php
	if (!empty($errorMsg)) {
		?>
		<div class="alert alert-danger alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<?php echo $errorMsg; ?>
		</div>
		<?php
	}
	?>

	<?php
	if (!empty($successMsg)) {
		?>
		<div class="alert alert-success alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<?php echo $successMsg; ?>
		</div>
		<?php
	}
	?>

	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Mobile Number Login</p>

		<form action="<?php echo base_url(); ?>admin/login" id="register-form" method="post">
			<div class="form-group has-feedback">
				<input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Contact Number" maxlength="10">
				<div class="error_msg1"><?php echo form_error('phone'); ?></div>
<!--				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->

			</div>
			<div class="row">
				<div class="col-xs-4">
					<button type="submit" style="margin-left: 118px;" class="btn btn-primary btn-login">
						LogIn
					</button>
				</div>
			</div>
		</form>

	</div>
</div>


<!-- /.login-box-body -->

<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/admin/plugins/iCheck/icheck.min.js"></script>
<!--<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' /* optional */
		});
	});
</script>-->


<script src="<?php echo base_url(); ?>assets/js/admin/jquery.validate.min.js"></script>
<!-- jQuery Form Validation code -->
<script>

	$(function () {
		$("#register-form").validate({
			rules: {
				phone: {
					required: true,


				}
			},
			// Specify the validation error messages
			messages: {
				phone: "<b id='juqey_7815'><?php echo $enter_valid_email?></b>"

			},
			submitHandler: function (form) {
				form.submit();
			}
		});


	});

</script>


</body>
</html>
