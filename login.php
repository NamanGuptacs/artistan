<?php
require('connect.php');
session_start();
$company = "company";

if (isset($_POST['sub']))
{
    $user=$_POST['user'];
	$pass=$_POST['pass'];
	$user = stripslashes($user);
	$pass = stripslashes($pass);
	$user = mysqli_real_escape_string($con,$user);
	$pass = mysqli_real_escape_string($con,$pass);
	$category = $_POST['category'];
	if($category==$company)
	{
	$sql="select * from cuser_reg where username='$user'or email='$user' and password='$pass'";
	
	$query=mysqli_query($con,$sql); 
	$row=mysqli_fetch_array($query);
	
    
	if ($row>0)
	     {
		      $_SESSION['login_user'] = $row['Id'];
	  
	      }
	if(!isset($_SESSION["login_user"]))
        		{
		             
				header("Location:login.php ") ;
				}
				else
				{
					header("Location:cdashboard.php ") ;
				}
	}
	else
	{
	   $sql="select * from art_reg where (username='$user'or email='$user') and password='$pass'";
	
	$query=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($query);
	
	if ($row>0)
	     {
		      $_SESSION['login_user'] = $row['Id'];
	  
	      }
	if(isset($_SESSION["login_user"]))
        		{
		             
				header("Location:dashboard.php ") ;
	            }
	}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>LogIn</title>
<style>
 .bdy
 {
 
 min-width:100%;
  background-repeat:no-repeat;
 background-size:cover;
 background-image:url("/major/img/bgimage.jpg");
 opacity:3es;
  } 
  #log
{
 background:#0099FF; border:#FFFFFF; text-decoration:none; color:#FFFFFF;
 padding:5px 5px 5px 5px;
}
#back
{
 
 color:#333333; 
 background:#FFFFFF; 
 
 transition:0.3s;
 text-decoration:none;
}

</style>
</head>

<body>
<header>
</header>
<section>
  <div class="bdy w3-container w3-padding-32">
      <div class="row" style="padding:50px 10px 10px 10px;">
	     <div class="col-sm-4 col-md-4 col-xs-12 ">
		</div><!--col-->
		  <div class="col-sm-4 col-md-4 col-xs-12">
		    <div class="w3-card-4 w3-padding w3-white">
			  <div align="center" style="padding:10px 10px 10px 10px">
			  <h1>Log In!</h1>
			</div><!--head-->
			  <form method="post">
			<div class="form-group"> 
			   <div style="padding:10px 0 10px 0">
			  <label for="username">Username or EmailId:</label>
			  <input type="text" name="user" class="form-control" required/>
			  </div>
			  <div style="padding:0 0 10px 0">
			   <label for="password">Password:</label>
			  <input type="password" name="pass" class="form-control" required/>
			  </div>
			    <div style="padding-bottom:10px">
				<label for="username">Choose your profile:</label>
				  <select class="form-control" name="category" required>
				    <option >--select one--</option>
					<option value="artist">Artist</option>
					<option value="company">Company</option>
					</select>
				</div>
			    <div>
		   <div align="right" style=" padding:10px 5px 10px 5px; position:relative;">
		 <button type="submit" class="btn btn-default w3-card-2" name="sub" >LogIn</button>
		 </div>
		  <div class="w3-card-2 w3-hover-opacity" 
		  align="left" style="position:absolute; bottom:73px;">
			 <a href="index.php" class="btn btn-default" id="back">Home</a>
			 </div>
			 </div>
				
			</div>
			</form>
			<div align="right">
			   <p style="padding-right:4px">Register Here <a href="next1.php" class="btn btn-default w3-card-2 w3-hover-opacity" id="log" >Sign Up!</a></p>
			</div>
			</div><!--card-->
		  </div><!--col-->
		  <div class="col-sm-4 col-md-4 col-xs-12">
		  </div><!--col-->
		  </div><!--row-->
  </div><!--container-->
</section>
<footer class="w3-black w3-padding-16 w3-center">
 <p>Powered by RNM</p>
  
</footer>
</body>

</html>
