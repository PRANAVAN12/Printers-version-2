<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Membership</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="UserName" value="<?php echo $UserName; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="Email" value="<?php echo $Email; ?>">
    </div>
    <div class="input-group">
			<label>Mobile</label>
			<input type="number" name="Mobile" value="<?php echo $Mobile; ?>">
    </div>
   
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>