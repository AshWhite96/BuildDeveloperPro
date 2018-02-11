<?php

session_start();

if (isset($_POST['submit'])) {
	include 'init.php';

	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	//Error Handlers
	//check if inputs are empty
	if (empty($email) || empty($password)) {
		header("Location:../login.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM tbl_User WHERE Email='$email'";
		$result = mysqli_query($db, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location:../login.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPasswordCheck = password_verify($password, $row['Password']);
				if ($hashedPasswordCheck == false) {
					header("Location:../login.php?login=inncorectpassword");
					exit();
					
				} elseif ($hashedPasswordCheck == true) {
					//log in the user here
					$_SESSION['u_id'] = $row['UserID'];
					$_SESSION['u_first'] = $row['FirstName'];
					$_SESSION['u_surname'] = $row['Surname'];
					$_SESSION['u_email'] = $row['Email'];
					$date = date("Y-m-d H:i:s");
					$db->query("UPDATE tbl_User SET LatestLogin = '$date' WHERE UserID = '$u_id");
					header("Location:../login.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../login.php?login=error");
	exit();
}


?>