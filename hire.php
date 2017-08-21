<?php
require('connect.php');
$userErr = $emailErr = $passErr =$re_passErr = $mobileErr =  "";
$user = $email = $pass = $re_pass = $company = $mobile = "";

if(isset($_POST['sub']))
  {
       if(empty($_POST["user"])){
	       $userErr = "Username is reqired";
	   }
	   else
	   {
	      $user = test_input($_POST["user"]);
	   
	   if (!preg_match("/^[a-zA-Z ]*$/",$user)) {
	   $error = true;
      $userErr = "Only letters and white space allowed"; 
    }
	}
	
	if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$error = true;
      $emailErr = "Invalid email format"; 
    }
  }
  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
      }
	  if (empty($_POST["rpass"])) {
	  $error = true;
    $re_passErr = "Enter a password again";
  } else if($_POST["rpass"]!= $pass)
      {
	  $error = true;
    $re_passErr = "Password should be same";
	  }
	  else
	  {
	  $re_pass = test_input($_POST["rpass"]); 
	  }
 

if(is_numeric($_POST['mobile'])== false)
   {  
      $error = true;
     $mobileErr = "Enter a numeric value";
 }
   else if(strlen($_POST['mobile'])== 10)
   {
      $mobile = test_input($_POST['mobile']);
      
   }
   else
   {
      $error = true;
      $mobileErr = "Enter a valid mobile number";
   }
    $company = $_POST['com'];
     
	 if(!$error)
	 {
	   $sql = "insert into cuser_reg(username,email,firstname,lastname,password,rpass,company,mobile,designation) 
   values('$user','$email','','','$pass','$re_pass','$company','$mobile','')";
   $query = mysqli_query($con,$sql);
   if ($query>0)
   {
      header("location:login.php");
   } 

	 }
    
 }//if
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
 
  return $data;
}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Company </title>
<style>

#log
{
 background:#0099FF; border:#FFFFFF; text-decoration:none; color:#FFFFFF;
 padding:5px 5px 5px 5px;
}
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.card
{ box-shadow :0 4px 8px o rgba(0,0,0,0.2);
transition:0.3s;
}
#back
{
 
 color:#FFFFFF; 
 background:#0099FF; 
 box-shadow:0 2px 4px 0 rgba(0,0,0,0.2);
 transition:0.3s;
 text-decoration:none;
}
</style>
</head>

<body>
<header>
</header>
<section>
<div class="w3-container w3-margin">
  <div class="card">
    <div class="row">
        <div class="col-sm-3 col-md-3 col-xs-12">
		</div>
		 
		<div class="col-sm-6 col-md-6 col-xs-12">
		 <div style="padding:10px 5px 20px 5px; font-family:Verdana, Arial, Helvetica, sans-serif;">
		     <h1 align="center">Registration</h1>
			 </div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	  
	  <div class="form-group">
	  <div style="padding:10px 0 10px 0">
	       <div style="padding-bottom:5px">
	       <label for="username">Username:</label><span class="error">* <?php echo $userErr;?></span>   
		    <input type="text"  class="form-control" placeholder="Enter Username" name="user" id="user" required  />
			</div>
	    
		    <div style="padding-bottom:5px">
			<label for="email">EmailId:</label><span class="error">* <?php echo $emailErr;?></span> 
			 <input type="text" class="form-control" placeholder="Enter your EmailId" name="email" id="email" required />
			 </div>
		
		<div style="padding-bottom:5px">
		     <label for="password">Password:</label><span class="error">* <?php echo $passErr;?></span> 
	    <input type="password" class="form-control" placeholder="Enter Password"  name="pass" id="pass" required/></div>
		<div style="padding-bottom:5px">
		   
		    <label for="re-password">Re-password:</label><span class="error">* <?php echo $re_passErr;?></span> 
	    <input type="password" class="form-control" placeholder="Re-enter Password" name="rpass" id="rpass" required/>
	    </div>
		  <div style="padding-bottom:10px">
		    <label for="company">Company name:</label><span class="error">*</span>
			<input type="text" class="form-control" name="com" placeholder="Enter company name" required />
			</div>
			<div style="padding-bottom:10px">
			<label for="company">Mobile number:</label><span class="error" ><?php echo $mobileErr;?></span> 
			<input type="text" class="form-control" name="mobile" placeholder="Enter your mobile number"/>
			</div>
			
			<div>
			   <div align="right" style="padding:10px 5px 10px 5px; position:relative;">
			<button type="submit" name="sub" class="btn btn-default">GO</button>
			</div>
			
			
			 <div class="w3-hover-opacity" 
			 align="left" style="padding-bottom:10px; position:absolute; bottom:27px">
			 <a href="next1.php" class="btn btn-default" id="back">BACK</a>
			 </div>
			</div> 
			 
		</div>
		    
		</div>
		<div class="col-sm-3 col-md-3 col-xs-12">
		</div>
	 </div><!--form-control-->
	 </form>
	 </div><!--row-->
	  <div class="row-padding">
	    <div class="col-sm-3 col-md-3">
      </div>
	   <div class="col-sm-9 col-md-9 col-xs-12" align="right">
	   <p>Already a member?
	    <a class="btn btn-default w3-card-2 w3-hover-opacity" href="login.php" id="log">
		Log In</a></p>
	   </div>
	 </div><!--card-->
</div><!--container-->
</section>
<footer class="w3-black w3-padding-16 w3-center">
 <p>Powered by RNM</p>
  
</footer>
 </body>
</html>
