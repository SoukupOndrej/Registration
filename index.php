<?php

	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Log In</title>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h1>Log In</h1>
		</div>
		<div id="form">
			<form>
				<div class="input_field">
					<label for="email">Email:</label>
					<input type="email" name="email">
				</div>
				<div class="input_field">
					<label for="password">Password:</label>
					<input type="text" name="password">
				</div>
				<div class="input_field">
					<input type="submit" class="sbt" value="Log In">
				</div>
			</form>
		</div>
		<div class="signup_login">
			<p>Don't have an account? <a href="signup.php">Sign Up Here</a></p>
		</div>
	</div>
</body>
</html>