<?php 

require('config.php');
session_start();


if(isset($_POST['register'])){

$username =  sanitize($_POST['username']);
$password =  sanitize($_POST['password']);
$email =  sanitize($_POST['email']);
$hashed = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users VALUES ('', '$username', '$hashed', '$email')";

if(!$db->query($sql)){
	echo "Error";
}else{
	$_SESSION['success'] = "Registration complete please login";
	header('location: index.php');

}

}
 ?>
