<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Sign Up</title>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h1>Sign Up</h1>
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
					<label for="repeatPassword">Repeat Password:</label>
					<input type="text" name="repeatPassword">
				</div>
				<div class="input_field">
					<input type="submit" class="sbt" value="Sign Up">
				</div>
			</form>
		</div>
		<div class="signup_login">
			<p>Already have an account? <a href="index.php">Log In Here</a></p>
		</div>
	</div>
</body>
</html>