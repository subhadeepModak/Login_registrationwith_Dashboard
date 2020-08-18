<?php
error_reporting(0);


include "connect.php";

$name = $_POST['fname'];
$password =$_POST['password'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$confpass=$_POST['confirmpass'];
  
  $password=md5($password);

  $sql = "INSERT INTO `user`(`fname`, `email`, `phone`, `password`) VALUES ('$name','$email','$phone','$password')";

  if($con->query($sql)==true)
  {
      $id= $con->insert_id;
       $query= "INSERT INTO `user_pic` (`u_id`, `u_pic`) VALUES ($id , 'user_sample.png') ";// insert a sample image for better ui 
      if($con->query($query)==true)
      {
        
        header("location: ../login.php");
      }

  }
  else 
  {
  
    header("location: ../registration.php");
  }






?>