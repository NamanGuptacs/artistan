<?php
$userErr = $emailErr = $passErr =$re_passErr = "";
$user = $email = $pass = $re_pass = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
  {
       if(empty($_POST["user"])){
	       $userErr = "Username is reqired";
	   }
	   else
	   {
	      $user = test_input($_POST["user"]);
	   
	   if (!preg_match("/^[a-zA-Z ]*$/",$user)) {
      $userErr = "Only letters and white space allowed"; 
    }
	}
	
	if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
 }
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration</title>
<style>
#title
{ font-family:"Times New Roman", Times, serif;
padding:10px 5px 5px 5px;
}
.error {color: #FF0000;}
#log
{
 background:#0099FF; border:#FFFFFF; text-decoration:none; color:#FFFFFF;
 padding:5px 5px 5px 5px;
}
</style>
</head>

<body>
<div class="container" style="background:#CCCCCC">

   <div class="container">
     <div style="padding:100px 10px 100px 10px ">
     <div class="form-group">
	  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	  <div class="row">
	    <div class="col-xs-3 col-sm-3 col-md-3">
      </div>
   <div class="col-xs-6 col-sm-6 col-md-6" id="title" align="center">
    <h1>Sign Up</h1>
   </div>
   <div class="col-xs-3 col-sm-3 col-md-3">
      </div>
   </div><!--row-->            
	  <div class="row" style="padding-bottom:10px; padding-top:10px">
    <div class="col-xs-3 col-sm-3 col-md-3">
      </div>
   <div class="col-xs-6 col-sm-6 col-md-6">
             <label for="username">Enter Username:</label>   
		    <input type="text" class="form-control" placeholder="Enter Username" name="user" id="user" /><span class="error">* <?php echo $userErr;?></span>
	   </div>
	    <div class="col-xs-3 col-sm-3 col-md-3">
      </div>
	   </div><!--row-->
	   <div class="row" style="padding-bottom:10px">
	    <div class="col-xs-3 col-sm-3 col-md-3">
      </div>
	   <div class="col-xs-6 col-sm-6 col-md-6">
	   <label for="username">Enter your EmailId:</label>
	    <input type="text" class="form-control" placeholder="Enter your EmailId" 
		name="email" id="email" />
	   </div>
	    <div class="col-xs-3 col-sm-3 col-md-3">
      </div>
	   </div><!--row-->
	   <div class="row" style="padding-bottom:10px">
	    <div class="col-xs-3 col-sm-3 col-md-3">
      </div>
	   <div class="col-xs-6 col-sm-6 col-md-6">
	   <label for="username">Enter your password:</label>
	    <input type="password" class="form-control" placeholder="Enter Password"  name="pass" id="pass"/>
	   </div>
	    <div class="col-xs-3 col-sm-3 col-md-3">
      </div>
	   </div><!--row-->
	   <div class="row" style="padding-bottom:10px">
	    <div class="col-xs-3 col-sm-3 col-md-3">
      </div>
	  <div class="col-xs-6 col-sm-6 col-md-6">
	  <label for="username">Re-enter password:</label>
	    <input type="password" class="form-control" placeholder="Re-enter Password" name="rpass" id="rpass" />
	   </div>
	    <div class="col-xs-3 col-sm-3 col-md-3">
      </div>
	   </div><!--row-->
	   <div class="row" style="padding-top:20px">
	    <div class="col-xs-3 col-sm-3 col-md-3">
      </div>
	   <div class="col-xs-6 col-sm-6 col-md-6" align="right">
	    <button type="submit" class="btn btn-default" name="sub" id="sub">Next</button>
	   </div>
     	 
	 <div class="col-xs-3 col-sm-3 col-md-3">
     </div>
	 </div>
	 	  </form>
		  <div class="row" style="padding-top:20px">
	    <div class="col-xs-3 col-sm-3 col-md-3">
      </div>
	   <div class="col-xs-6 col-sm-6 col-md-6" align="right">
	   <p>Already a member?
	    <a href="#" id="log">
		Log In</a></p>
	   </div>
     	 
	 <div class="col-xs-3 col-sm-3 col-md-3">
     </div>
	 </div>
	  </div><!--form group-->
	  </div>
	  </div>
 </div><!--container-->
</body>
</html>
