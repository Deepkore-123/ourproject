<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
if(!empty($username)){
	if(!empty($email){
	if(!empty($password)){
		$host = "localhost";
		$dbusername = "root";
		$dbemail="";
		$dbpassword = "";
		$dbname = "loginform";
		$conn = new mysqli ($host, $dbusername, $dbemail, $dbpassword, $dbname);
		if (mysqli_connect_error()){
			die('Connect Error ('.mysqli_connect_errno() .') '.mysqli_connect_error());
		}
		else{
			$sql = "INSERT INTO form (username,email,password) values ('$username','email','$password')";
			if ($conn->query($sql)){
				echo "New record is inserted succesfully";
			}
			else{
				echo "Error:".$sql ."<br>".$conn->error;
			}
			$conn->close();
		}
	else{
		echo "password should not be empty";
		die();
	}
	}
	else{
		echo "email should not be empty";
		die();
	}
	}
	else{
		echo "username should not be empty";
		die();
	}
}
	?>