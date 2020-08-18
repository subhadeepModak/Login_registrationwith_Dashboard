<!-- registration  page -->



<!doctype html>
<html lang="en">
  <head>
       <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- css & script-->
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <script src="js/jquery.min.js"></script>
   
    
    <title>Registration Form</title>
     
   
  </head>

  <body class="container" >



	<div class="text-center">
		  <img class="mb-4" src="img/logo.png" alt="" width="72" height="72">

	    <form class="form-signup  m-auto " name="regform" method="post" action="router/register-router.php" onsubmit="return validateform()" ><br>
	    	
	    	<div class="container pd-20">
	      <h1 class="h3 mb-3 font-weight-normal">Signup</h1>

	      <label for="inputName" class="sr-only">Your Name</label>
	      <input type="name"  name="fname" id="inputName" class="form-control" placeholder="Your Name" required>
        <div id="name_response" ></div><br>

	      <label for="inputEmail" class="sr-only">Email address</label>
	      <input type="email" name="email" id="email" class="form-control" placeholder="Email address"  required >
	     <div id="email_response" ></div><br>

	      <label for="inputPhone" class="sr-only"> Enter Phone Number </label>
	      <input type="number" name="phone" id="inputPhone" class="form-control" placeholder="Phone Number" required>
        <div id="phone_response"></div><br>

	      <label for="inputPassword" class="sr-only">Password</label>
	      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <span id ="password_error"></span><br>

	      <label for="inputPassword" class="sr-only"> Confirm Password</label>
	      <input type="password" name="confirmpass" id="confirmpass" class="form-control" placeholder="Confirm Password" required>
          <div id="conf_response"></div><br>
	   
	      <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">Login</button>
	      <p>Already registered? <a href="login.php" class="mb-3 pd-10"> Click here!</a></p>
	      <br>
	    </div>

	    </form>

 		
	</div>

<!-- validation for phone and password input -->
<script>  
function validateform(){  
var password=document.regform.password.value;  
var confirmpass=document.regform.confirmpass.value;
var  phone =document.regform.phone.value;
  
if(!( phone.length ===10)) // phone number should be 10 digit 
{
  $('#phone_response').html("<span style='color: red;'>Phone number must be 10 digit ! </span>");
  return false;
}
else
{
   $('#phone_response').html("");
}


if(password.length<8) // password shuld be 8 minimum length  of 8 ###task 3(d)
{  
    $('#password_error').html("<span style='color: red;'>Minimum length should be 8! </span>");
    return false;  
}
else
{
 $('#password_error').html("");
}

if (!( password===confirmpass))// both password should be matched  ###task 3(d)
{
    $('#conf_response').html("<span style='color: red;'> Both password should be matched! </span>");
    return false;
}
else
{
   $('#conf_response').html("");
}


} 
</script> 
<!--end validation -->

	<!-- Ajax live  Email availblity   ### task 3(b)-->

  <script>
    $(document).ready(function(){

       $("#email").blur(function(){

          var email = $(this).val().trim();

          if(email != ''){

             $.ajax({
                url: 'router/email.php',
                type: 'post',
                data: {email: email},
                success: function(response){

                  
                    if(!response)
                    {
                      
                       $('#email_response').html("<span style='color: green;'> Email Available.</span>");
                       document.getElementById("submit").disabled = false;
                    }
                    else
                    {
                        $('#email_response').html("<span style='color: red;'>Email already registered! </span>");
                        document.getElementById("submit").disabled = true;
                    }
                    
                 }
             });


          }else{
             $("#email_response").html("");
                
          }

        });

     });
</script>
	
    <!-- enad of ajax Email Availblity-->
	


  </body>
</html>
