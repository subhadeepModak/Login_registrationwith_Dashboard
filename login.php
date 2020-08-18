

<!-- login.php-->


<!doctype html>
<html lang="en">
  <head>
       <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!--  CSS -->    
   <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Login Form</title>
     
   
  </head>

  <body class="container"  >



	<div class="text-center">
		  <img class="mb-4" src="img/logo.png" alt="" width="72" height="72">

		  	<!-- login form with email and password input fields ###task 5-->
	    <form class="form-signin  m-auto " method="post"   action="router/router.php" >
	    	<br>
	    	<div class="container pd-20">
	      <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
	      <label for="inputEmail" class="sr-only"  >Email address</label>
	      <input type="email" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus><br>
	      <label for="inputPassword" class="sr-only">Password</label>
	      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required><br>
	   
	      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
	      <p>New user? <a href="registration.php"> Click here!</a></p>
	      <br>
	    </div>

	    </form>

 		 <p class="mt-5 mb-3 text-muted">&copy; Developed by Subhadeep </p>
	</div>


	<script src="js/main.js"></script>

  </body>
</html>
