<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?= base_url('assets/'); ?>" rel="stylesheet">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
			color: #D8C3A5;
			background-image: url("<?= base_url('assets/'); ?>img/BALLROOM.jpg");
			background-size: 100%;
			font-family: 'open-sans', sans-serif;
		}

		.form-control,
		.form-control:focus,
		.input-group-addon {
			border-color: #e1e1e1;
			border-radius: 15px;
			background: #1f1f1f;
		}

		.signup-form {
			width: 390px;
			margin: 0 auto;
			padding: 100px 0;


		}

		.signup-form h2 {
			color: #D8C3A5;
			margin: 0 0 15px;
			text-align: center;
		}

		.signup-form .lead {
			font-size: 14px;
			margin-bottom: 30px;
			text-align: center;
		}

		.signup-form form {
			border-radius: 1px;
			margin-bottom: 15px;
			background: #111;
			border: none;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
			border-radius: 15px;

		}

		.signup-form .form-group {
			margin-bottom: 20px;
		}

		.signup-form label {
			font-weight: normal;
			font-size: 13px;
		}

		.signup-form .form-control {
			min-height: 38px;
			box-shadow: none !important;
			border-width: 0 0 0px 0;
		}

		.signup-form .input-group-addon {
			max-width: 42px;
			text-align: center;
			background: none;
			border-width: 0 0 0px 0;
			padding-left: 5px;
		}

		.signup-form .btn {
			font-size: 16px;
			font-weight: bold;
			background: #E85A4F;
			border-radius: 3px;
			border: none;
			min-width: 140px;
			outline: none !important;
			border-radius: 15px;
		}

		.signup-form .btn:hover,
		.signup-form .btn:focus {
			background: #C44D44;
		}

		.signup-form a {
			color: #E85A4F;
			text-decoration: none;
		}

		.signup-form a:hover {
			text-decoration: underline;
		}

		.signup-form .fa {
			font-size: 21px;
		}

		.signup-form .fa-paper-plane {
			font-size: 17px;
		}

		.signup-form .fa-check {
			color: #fff;
			left: 9px;
			top: 18px;
			font-size: 7px;
			position: absolute;
		}

		.home {
			float: right;
			height: 35px;
			position: absolute;
			bottom: 10px;
			right: 10px;
		}
	</style>
</head>

<body>

	<div class="signup-form">
		<form action="<?= base_url('auth/registrationUser'); ?>" method="post">
			<h2>Create Account</h2>
			<p class="lead">It's free and hardly takes more than 30 seconds.</p>

			<!-- USER FULL NAME -->
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
					<input type="text" class="form-control" id="name" name="name" placeholder="Name" required="required">
					<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>

			<!-- USER EMAIL -->
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>

			<!-- USER ADDRESS -->
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
					<input type="text" class="form-control" id="address" name="address" placeholder="Your Address" value="">
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>

			<!-- USER PASSWORD -->
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					<input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
					<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
					</span>
				</div>
				<br>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-lock"></i>
							<i class="fa fa-check"></i>
						</span>
						<input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password">
					</div>
				</div>
				<!-- REGISTER BUTTON -->
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
				</div>
				<p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
		</form>
		<div class="text-center">Already have an account? <a href="<?= base_url('auth'); ?>">Login here</a>.</div>
	</div>
</body>

</html>