<?php

include "config.php";
	// $error = $email = $psw = "";

	if (isset($_POST['email'])) {
		$email = ($_POST['email']);
		$psw = ($_POST['psw']);
// echo $psw;
		if ($email == "" || $psw == "")
			$error = 'Not all fields were entered';
		else {
			$sql = "SELECT MEmail, MPassword FROM member WHERE MEmail='$email', AND MPassword='$psw'";
			$result = $conn->query($sql);

// echo $sql;
			if ($result->num_rows == 0) {
				$error = "Invalid login";
			}
			else {
				$_SESSION['email'] = $email;
				$_SESSION['psw'] = $psw;
				
				// So far, the code above is processing through.

			}
		}
	}
	echo "Testing <br><br>";
	echo "Hello $email <br><br>";
	echo "Welcome back. You are logged in.";
?>