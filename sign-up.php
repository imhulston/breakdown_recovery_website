<?php

	// Include config.php file for connecting to the server and database.
	include "config.php";
	
	$fname = $_POST["fname"];
	$lname = $_POST["surname"];
	$email = $_POST["email"];
	$psw = $_POST["psw"];
	$vehreg = $_POST["vehreg"];
	$vehmake = $_POST["vehmake"];
	$vehmodel = $_POST["vehmodel"];
	
	// Inserting the values into member table columns from the first 4 input boxes on the form.
	$sql = "INSERT INTO member (MFName, MLName, MEmail, MPassword) VALUES ('$fname', '$lname', '$email', '$psw')";
	$result = $conn->query($sql);

	// Inserting the the the last three values into vehicle table columns plus inserting the auto_incremented value from the MemberID in the member table, also inserting the value into MemberID column in the vehicle table using last_insert_id statement.
	$sql2 = "INSERT INTO vehicle (VehReg, VehMake, VehModel, MemberId) VALUES ('$vehreg', '$vehmake', '$vehmodel', last_insert_id())";
	$result2 = $conn->query($sql2);

	$conn->close();

	echo "<p>Thank you.</p>";
	echo "Your information has been entered and your account has been set up.</p>";
?>