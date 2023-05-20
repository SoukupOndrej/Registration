<?php

	session_start();

	function get_error($errorArg){
		if (isset($_SESSION['errors'][$errorArg]) AND !empty($_SESSION['errors'][$errorArg])) {
			$ret = $_SESSION['errors'][$errorArg];
		} else {
			$ret = null;
		}
		return $ret;
	}

	function get_value($valueArg){
		if (isset($_SESSION['ok'][$valueArg]) AND !empty($_SESSION['ok'][$valueArg])) {
			$ret = $_SESSION['ok'][$valueArg];
		} else {
			$ret = null;
		}
		return $ret;
	}

?>
<!DOCTYPE html>
<html lang="en">
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
			<form action="act/signupAct.php" method="post">
				<div class="input_field">
					<label id="email">Email:</label>
					<input type="email" name="email" value="<?=get_value("email")?>">
				</div>
				<?php if (get_error('email')): ?>
					<div class="error">
						<p><?=get_error('email')?></p>
					</div>
				<?php endif; ?>
				<div class="input_field">
					<label id="password">Password:</label>
					<input type="password" name="password">
				</div>
				<?php if (get_error('password')): ?>
					<div class="error">
						<p><?=get_error('password')?></p>
					</div>
				<?php endif; ?>
				<div class="input_field">
					<label id="repeatPassword">Repeat Password:</label>
					<input type="password" name="repeatPassword">
				</div>
				<?php if (get_error('repeatPassword')): ?>
					<div class="error">
						<p><?=get_error('repeatPassword')?></p>
					</div>	
				<?php endif; ?>
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
<?php
	unset($_SESSION['errors']);
	unset($_SESSION['ok']);
?>