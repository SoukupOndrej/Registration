<?php

	session_start();

	if (!isset($_SESSION['logged'])) {
		header("Location: index.php");
		exit();
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Success</title>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h1>Welcome to Your Dashboard!</h1>
		</div>
  		<p>You are now logged in.</p>
  		<a class="logout-btn" href="index.php">Logout</a>
	</div>
</body>
</html>
<?php

	unset($_SESSION['logged']);

?>