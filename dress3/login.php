<?php include('server.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>

			<div class="col-lg-6 col-md-6 form-container">
				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
					<div class="logo mb-3">
						<img src="images/login main title.png" alt="" width="300px">
					</div>
					<div class="heading mb-4">
						<h4>Login into your account</h4>
					</div>
					<form method="post" action="login.php">
  					<?php include('errors.php'); ?>
						<div class="form-input">
							<i class="fa fa-user"></i>
							<label>Username</label>
  							<input type="text" name="username" required> 
						</div>
						<div class="form-input">
							<i class="fa fa-lock"></i>
							<label>Password</label>
  							<input type="password" name="password" required>
						</div>
						<div class="row mb-3">
							<div class="col-6 d-flex">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="cb1">
									<label class="custom-control-label" for="cb1">Remember me</label>
								</div>
							</div>
							<div class="col-6 text-right">
								<a href="forget.html" class="forget-link">Forget Password</a>
							</div>
						</div>
						<div class="text-left mb-3">
							<button type="submit" class="btn" name="login_user">LOGIN</button>
						</div>
						<div class="text-center mb-2">
						<p>Don't have an account? <a href="register.php">Sign up</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>