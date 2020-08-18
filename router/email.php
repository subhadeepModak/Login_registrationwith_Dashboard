<?php

// code for check email is already exists or not
include 'connect.php';

if(isset($_POST['email'])){
   $email = $_POST['email'];

   $query = "select count(*) as email from user where email='".$email."'";

   $result = mysqli_query($con,$query);
  
   $response= false;
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['email'];
    
      if($count > 0){
        
         $response=true;
      }
   
   }
   echo $response;
   die;
}
?>