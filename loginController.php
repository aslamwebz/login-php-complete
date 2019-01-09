<?php 

require('config.php');

session_start();

if($_POST['submit']){
	$username = sanitize($_POST['username']);
	$password = sanitize($_POST['password']);
	$sql = "SELECT * FROM users WHERE username='$username'";
	$result = $db->query($sql);
	$row_count = mysqli_num_rows($result);
	if($row_count == 1){
		$user = mysqli_fetch_assoc($result);
		$hashed = $user['password'];
		if(!password_verify($password, $hashed)){
			$_SESSION['error'] = 'username or password Error';
			header('location: index.php');
		}else{
			$_SESSION['user'] = $user['username'];
			$_SESSION['uid'] = $user['id'];
			echo "Login Successful";
		}
	}else{
		$_SESSION['error'] = 'username or password Error';
			header('location: index.php');

	}

}


