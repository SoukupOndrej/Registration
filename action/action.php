<?php

	session_start();
	$errors = [];

	if (isset($_POST['email']) AND empty($_POST['email'])) {
		$errors['email'] = "Fill in your email, please";
	} else {
		$_SESSION['ok']['email'] = $_POST['email'];
	}

	if (isset($_POST['password']) AND empty($_POST['password'])) {
		$errors['password'] = "Fill in your password, please";
	} else {
		if (isset($_POST['repeatPassword']) AND empty($_POST['repeatPassword'])) {
			$errors['repeatPassword'] = "Confirm your password, please";
		}
	}

	if (count($errors) == 0) {
		$password = $_POST['password'];
		$uppercase = preg_match('@[A-Z]@', $password);
		$lowercase = preg_match('@[a-z]@', $password);
		$number = preg_match('@[0-9]@', $password);
		$specialChars = preg_match('@[^\w]@', $password);
		if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
		    $errors['repeatPassword'] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
		} elseif ($_POST['password'] != $_POST['repeatPassword']) {
			$errors['repeatPassword'] = "Passwords don't match";
		}
	}

	if (count($errors) > 0) {
		$_SESSION['errors'] = $errors;
		header("location: ../signup.php");
	} else {
		echo "Everything is OK";
	}

	foreach ($errors as $key => $value) {
		echo $value;
	}

?>