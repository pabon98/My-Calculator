<?php
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$mysqli = new mysqli("localhost", "root", "", "login");

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = $mysqli->real_escape_string($username);
	$password = $mysqli->real_escape_string($password);


	$result = mysqli_query($mysqli, "SELECT * FROM `users` WHERE username = '".$username."' AND password = '".$password."'");

	$num_rows = mysqli_num_rows($result);

	if($num_rows>0)
		header('Location: open.html');
	else
		echo "Failed";

?>