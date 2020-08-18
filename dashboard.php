<!-- Dashboard.html-->
<?php
error_reporting(0);
include "router/connect.php";
if(!$_SESSION['user_id']){ header("location: login.php");} //if user not logged in return to the login page 
$user_id=  $_SESSION['user_id'];
$name= $_SESSION['name'];
$email= $_SESSION['email'];
$phone =$_SESSION['phone'];
//fetch pic for display
$sql="SELECT `u_pic` FROM user_pic WHERE `u_id` = '$user_id' ";
$result =mysqli_query($con,$sql);
 while($row = $result->fetch_assoc()) { 
 
      $dir="user_pic/".$row['u_pic'];
 }
 
?>


<!doctype html>
<html lang="en">
  <head>
       <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
     
   
    <title>Welcome</title>        
  </head>

  <body>

  	<!-- nav bar-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"> <img src="img/logo.png" width="80" height="30" class="d-inline-block align-top" alt=""></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick=" $('#imageupload').modal('toggle');">Update pic</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link " href="router/logout.php">Logout</a>
      </li>
    </ul>
    
  </div>
</nav>
<!-- navbar end-->


<!-- modal for image update ## task 6(a)-->
        <div id="imageupload" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" >
                    <h4 class="modal-title">Image upload</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button><!--Task 2 -->
                </div>
                <div class="modal-body">
                  <br>
                  <form action="router/ImageUpload.php" method="post" enctype="multipart/form-data">
                    <input class="form-control" type="file" name="fpic" required="Please select a file"><br>
                    <input type="submit" name="submit" class="btn btn-success form-control">
                    <br>
                  </form>

                </div>
            </div>
        </div>
         </div>

  

    <div class="container">

      <div class=" card mt-5">
        <div class="card-header">
          <p class="text-center br" > Welcome to Dashboard</p>
          
        </div>
        <div class="card-body">
          <div class="row "> 
            <div class="col-lg-3 col-sm-12 text-center container1 image">
              <img  class="form-group photo" src="<?php echo $dir; ?>" alt="Profile Photo">
              <div class="middle">
               <button class="btn btn-success change mt-5" onclick=" $('#imageupload').modal('toggle');">Change Pic</button>
             </div>             
            </div>

            <div class="col-lg-6 col-sm-12">
              <strong><?php echo $name; ?></strong>
              <br>
              <strong> <?php echo $phone; ?></strong>
              <br>
              <strong><?php echo $email; ?></strong>
              <br>              
            </div>
          </div>
        </div>
        
        <div class="card-footer">
         <p class="text-center "> <img src="img/logo.png" class= "footer-logo" >Intern Project </p>
        </div>
      </div>
      
    </div>
  	


	

<script src="js/main.js"></script>


</body>
</html>
