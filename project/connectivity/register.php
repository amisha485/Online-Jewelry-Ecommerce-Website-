<!Doctype Html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device=width,initial-scale=1,shrink-to-fit=no">
	<title>Welcome to Customer Portal</title>
	
</head>
<body>
	<div class="signup-form">
		<form action="register_a.php" method="post" enctype="multipart/form.data">
			<h2>Register</h2>
			<p class="hint-text">Create your account</p>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
					</div>
					<div class="col">
						<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
					</div>
				</div>
			</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email" placeholder="Email" required="required">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="pass" placeholder="Password" required="required">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="email" placeholder="Confirm Password" required="required">
				</div>
				<div class="form-group">
					<input type="file" name="file" required>
				</div>
				<div class="form-group">
					<label class="form-check-label">
						<input type="checkbox" required="required">I accept the <a href="#">Terms Of Use</a> & <a href="#">Privacy Policy </a>
					</label>
				</div>
				<div class="form-group">
					<button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
				</div>
				<div class="text-center">Already have an Account?
					<a href="login.php">Sign In</a>
				</div>
		</form>
	</div>
</body>
</html>