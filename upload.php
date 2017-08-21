<?php
   require('connect.php');
   session_start();
   if(!isset($_SESSION['login_user']))
   {
	   header("location:login.php");
   }
   
else if(isset($_SESSION['login_user']))
{  
   $id = $_SESSION['login_user'];

$sql101= "select category from art_reg where Id='$id' ";
$query101=mysqli_query($con,$sql101);
$row101 = mysqli_fetch_array($query101);
}
if($row101['category']==1 || $row101['category']==7 )
require('upload1.php');
else
require('upload2.php');
									
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>upload</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	</head>
	<body>
	</body>
	</html>