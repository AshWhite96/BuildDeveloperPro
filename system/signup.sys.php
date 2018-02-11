<?php

if (isset($_POST['submit'])) {
	
	include_once 'init.php';

	$first = mysqli_real_escape_string($db, $_POST['firstname']);
	$surname = mysqli_real_escape_string($db, $_POST['surname']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$password_con = mysqli_real_escape_string($db, $_POST['confirm_password']);

	//Error Handlers
	//Check for empty fields
	if (empty($first) || empty($surname) || empty($email) || empty($password) || empty($password_con)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
		//Check if input characters are valid 
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $surname)) {
			header("Location: ../signup.php?signup=invalidchar");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=invalidEmail");
				exit();
			} else {
				$sql = "SELECT * FROM tbl_User WHERE Email ='$email'";
				$result = mysqli_query($db, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../signup.php?signup=invalidUser");
					exit();
				} else {
					//Hashing the password
					$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
					//Insert the usuer into the database
					$sql = "INSERT INTO tbl_User (FirstName, Surname, Email, Password) VALUES ('$first', '$surname', '$email', '$hashedpassword');";
					mysqli_query($db, $sql);
					header("Location: ../signup.php?signup=success");
					exit();	
				}
			}
		}
	}
	

} else{
	header("Location: signup.php");
	exit();
}

?>