<?php

	session_start();

	if (isset($_SESSION['success']) AND !empty($_SESSION['success'])) {
		$success = $_SESSION['success'];
	} else {
		$success = null;
	}

	function get_error($errorArg){
		if (isset($_SESSION['errors'][$errorArg]) AND !empty($_SESSION['errors'][$errorArg])) {
			$ret = $_SESSION['errors'][$errorArg];
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
	<title>Log In</title>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h1>Log In</h1>
		</div>
		<?php if ($success): ?>
			<div class="success">
				<p><?=$success?></p>
			</div>
		<?php endif; ?>
		<div id="form">
			<form action="act/loginAct.php" method="post">
				<div class="input_field">
					<label id="email">Email:</label>
					<input type="email" name="email">
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
<?php
	
	unset($_SESSION['success']);
	unset($_SESSION['errors']);

?>