<?php
require('connect.php');

if(isset($_POST['sub']))
{
   $name =$_POST['name'];
   $email =$_POST['email'];
   $message = $_POST['message'];
   $sql27="insert into contact(name,email,message) values('$name','$email','$message')";
   $query27=mysqli_query($con,$sql27);
   if($query27== true)
	   echo "<script type=text/javascript>alert('Successfully Submitted');</script>";
   
}

?>