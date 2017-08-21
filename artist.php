<?php
require('connect.php');
$userErr = $emailErr = $passErr =$re_passErr = $catErr = $fieldErr =  "";
$user = $email = $pass = $re_pass = $category = $field = "";

if(isset($_POST['sub']))
  {
       if(empty($_POST["user"])){
	     $error = true;
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
	  $errror = true;
    $re_passErr = "Enter a password again";
  } else if($_POST["rpass"]!= $_POST["pass"])
      {
	  $error = true;
    $re_passErr = "Password should be same";
	  }
	  else
	  {
	  $re_pass = test_input($_POST["rpass"]); 
	  }
	  
	  $category = $_POST['artist'];
	
	   $field = $_POST['field'];
 if(!$error){
   $sql = "insert into art_reg(username,firstname,middlename,lastname,email,password,rpass,category,field,image) 
   values('$user','','','','$email','$pass','$re_pass','$category','$field','')";
   $query = mysqli_query($con,$sql);
   if ($query>0)
   {
      header("location:login.php");
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
<meta charset="utf-8" />
<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1"
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="art.js" type="text/javascript"></script>
<script src="jquery-3.2.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Artist category</title>
<style>
#back
{
  
 color:#FFFFFF; 
 background:#0099FF; 
 box-shadow:0 2px 1px 0 rgba(0,0,0,0.2);
 transition:0.3s;
 text-decoration:none;
}
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
</style>
</head>

<body>

<div class="w3-container w3-margin">
  <div class="card"> 
   <header>
     <div class="w3-pannel w3-padding-16 w3-center"> 
	    <h1>Registeration</h1> 
	 </div>
  </header>
  <section>
    <div class="row-padding">
	 <div class="col-sm-3 col-md-3 col-xs-12">
	 </div>
	   
	   <div class="col-sm-6 col-md-6 col-xs-12">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	  
	  <div class="form-group">
	    <div style="padding:5px 0 5px 0">
	       <div style="padding-bottom:5px">
	       <label for="username">Username</label><span class="error">* <?php echo $userErr;?></span>   
		    <input type="text"  class="form-control" placeholder="Enter Username" name="user" id="user" required  />
			</div>
	    
		    <div style="padding-bottom:5px">
			<label for="email">EmailId</label><span class="error">* <?php echo $emailErr;?></span> 
			 <input type="text" class="form-control" placeholder="Enter your EmailId" name="email" id="email" required />
			 </div>
		
		<div style="padding-bottom:5px">
		     <label for="password">Password</label><span class="error">* <?php echo $passErr;?></span> 
	    <input type="password" class="form-control" placeholder="Enter Password"  name="pass" id="pass" required/>
		</div>
		<div style="padding-bottom:5px">
		   
		    <label for="re-password">Re-password</label><span class="error">* <?php echo $re_passErr;?></span> 
	    <input type="password" class="form-control" placeholder="Re-enter Password" name="rpass" id="rpass" required/>
	    </div>
		
		<div>
		<strong><lable for="art">Category</label></strong><span class="error">* <?php echo $catErr;?></span>
		<select class="form-control" name="artist" id="artist" required>
		  
		  <option selected="selected">--Select one--</option>
		  <?php
		     require('connect.php');
			 $sql="select * from artist";
			 $query = mysqli_query($con,$sql);
			 
			 if($query==true)
			   echo "connect";
			 
			 while($row=mysqli_fetch_array($query))
			 { 
		  ?>
		  <option value="<?php echo $row['ID'];?>"><?php echo $row['Artist_category'];?></option>
		 <?php
		 }
		 ?>
		 
		 </select>
		 
		 </div>
		 <div style="padding:10px 0 10px 0">
		 <strong><lable>Field</label></strong><span class="error">* <?php echo $fieldErr;?></span>
	    <select class="form-control" id="field" name="field" >
		  <option selected="selected">--Select one--</option>
	     </select>
	     </div>
		 <div>
		   <div align="right" style=" padding:10px 5px 10px 5px; position:relative;">
		 <button type="submit" class="btn btn-default w3-card-2" name="sub" >GO</button>
		 </div>
		  <div class="w3-card-2 w3-hover-opacity" 
		  align="left" style=" position:absolute; bottom:29px">
			 <a href="next1.php" class="btn btn-default" id="back">BACK</a>
			 </div>
			 </div>
	  </div>
	  
	  </form>
	</div>
	</div>
	<div class="col-sm-3 col-md-3 col-xs-12">
	</div>
	</div><!--row-->
	  <div class="row" >
	    <div class="col-sm-3 col-md-3">
      </div>
	   <div class="col-sm-9 col-md-9 col-xs-12"align="right">
	   <p>Already a member?
	    <a class="w3-card-2 w3-hover-opacity btn btn-default" href="login.php" id="log">
		Log In</a></p>
	   </div>
	   </div>
	   </section>
	   </div>
	
</div><!--container-->
<footer class="w3-black w3-padding-16 w3-center">
 <p>Powered by RNM</p>
  
</footer>


</body>
</html>
