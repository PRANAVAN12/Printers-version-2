<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2> ADMIN Login</h2>
	</div>
	
	<form method="post" action="AdminLogin.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>AdminName</label>
			<input type="text" name="UserName" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_admin">Login</button>
		</div>
		
	</form>


</body>
</html>