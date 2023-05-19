<?php

	include_once "../db.php";
	session_start();

	$password = $_POST['password'];
	$email = $_POST['email'];

	$sql = "SELECT COUNT(*) FROM users WHERE email LIKE '%$email%'";

	$sql_com = $db->prepare($sql);
	$sql_com->execute();
	$data = $sql_com->fetchColumn();

	if ($data == 1) {
		$hash = hash('sha512', $password . $email);

		$sql = "SELECT COUNT(*) FROM users WHERE password LIKE '%$hash%'";

		$sql_com = $db->prepare($sql);
		$sql_com->execute();
		$data = $sql_com->fetchColumn();

		if ($data == 1) {
			echo "success";
		} else {
			echo "wrong";
		}	
	} else {
		echo "dany email neni registrovany";
	}

?>