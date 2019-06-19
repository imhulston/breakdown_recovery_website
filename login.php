<?php
include "config.php";
	$error = $email = $psw = "";

	if (isset($_POST['email'])) {
		$email = ($_POST['email']);
		$psw = ($_POST['psw']);

		if ($user == "" || $psw == "")
			$error = 'Not all fields were entered';
		else {
			$result = $queryMySQL("SELECT email,psw FROM member WHERE MEmail='$email' AND MPassword='$psw'");

			if ($result->num_rows == 0) {
				$error = "Invalid login";
			}
			else {
				$_SESSION['email'] = $email;
				$_SESSION['psw'] = $psw;

				echo "You are now logged in.";

			}
		}
	}
?>