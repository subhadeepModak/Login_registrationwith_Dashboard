<?php
error_reporting(0);
include 'connect.php';
$success=false;
$username = $_POST['username'];
$password =$_POST['password'];
$password=md5($password);
$result = mysqli_query($con, "SELECT * FROM user WHERE `email`='$username' AND `password`='$password';");
while($row = mysqli_fetch_array($result))
{
	
	$success = true;
	$user_id = $row['id'];
	$name = $row['fname'];
	$email= $row['email'];
	$phone=$row['phone'];
}
if($success == true)
{	
	
	session_start();
	$_SESSION['id']=session_id();
	$_SESSION['user_id'] = $user_id;
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	$_SESSION['phone']= $phone;

	header("location: ../dashboard.php");
}
else
{
	
	header("location: ../login.php");
	
}
?>