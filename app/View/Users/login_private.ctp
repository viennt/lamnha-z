<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home Builder - Xây nhà Trực tuyến Giá rẻ</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- Font Awesome -->
	<?php echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');?>

	<!-- Ionicons -->
	<?php echo $this->Html->css('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');?>

	<!-- Bootstrap -->
	<?php echo $this->Html->css('bootstrap.min'); ?>

	<!-- AdminLTE -->
	<?php echo $this->Html->css('AdminLTE.min'); ?>

</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="#"><b>lamnha-z.com</b></a>
		</div>
		<div class="login-box-body">
			<p class="login-box-msg">Đăng nhập vào hệ thống</p>
			<form action=<?php echo $this->webroot.'dang-nhap.html'; ?> id="UserLoginForm" method="post" accept-charset="utf-8">
				<div class="form-group has-feedback">
					<input name="data[User][username]" maxlength="50" type="text" id="UserUsername" required="required" class="form-control" placeholder="Username">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input name="data[User][password]" type="password" id="UserPassword" required="required" class="form-control" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8">
					</div><!-- /.col -->
					<div class="col-xs-4">
					<input type="submit" class="btn btn-primary btn-block btn-flat" value="Sign In">
					</div><!-- /.col -->
				</div>
			</form>

			<div class="social-auth-links text-center">
			<p>- OR -</p>
			<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Đăng nhập bằng Facebook</a>
			<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Đăng nhập bằng Google+</a>
			</div><!-- /.social-auth-links -->

		</div><!-- /.login-box-body -->
	</div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <?php echo $this->Html->script('jquery-2.1.4.min'); ?>

    <!-- Bootstrap 3.3.5 -->
    <?php echo $this->Html->script('bootstrap.min.js'); ?>
</body>
</html>