<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
require('connect.php');
if (isset($_REQUEST["artist"] ))
{
 
 $art=$_REQUEST["artist"];
   
   $sql = "select * from art_field where ID ='$art'";
   $query = mysqli_query($con,$sql);
   ?>
     <select class="form-control">
	 <option selected="selected">--Select one--</option>
   <?php
    while($row=mysqli_fetch_array($query))
			 { 
		  ?>
		   
		  <option value="<?php echo $row['A_id'];?>"><?php echo $row['a_field'];?></option>
		 <?php
		 }
		 
}
?>
</body>
</html>
