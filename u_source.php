<?php
require('connect.php');
if(!isset($_SESSION['login_user']))
{
	header("location:login.php");
}
else if(isset($_SESSION['login_user']))
{  
   $id = $_SESSION['login_user'];

$sql1= "select category from art_reg where Id='$id' ";
$query1=mysqli_query($con,$sql1);
$row = mysqli_fetch_array($query1);
$cat=$row['category'];
 $pro = "select field from art_reg where category='$cat'";
				  $pro_query = mysqli_query($con,$pro);
				  $pro_fetch = mysqli_fetch_array($pro_query);
				  $profession = $pro_fetch['field']; 
				  
 				    
}
if(isset($_POST['sub']))
{
    $title = $_POST['title'];
	$about = $_POST['desc'];
	
 if($row['category']==1 || $row['category']==7)
 {
 $by = $_POST['by'];
	$amount = $_POST['amount'];
	$price = $amount."RS";
$target_dir = "upload/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$uploadOk = 1;
	$imagefiletype = pathinfo($target_file,PATHINFO_EXTENSION);
	
	$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
     
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imagefiletype != "jpg" && $imagefiletype != "png" && $imagefiletype != "jpeg"
&& $imagefiletype != "gif" ) {
    
	$message="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				 echo "<script type='text/javascript'>alert('$message');</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
   {
    
	$message="Sorry, your file was not uploaded.";
				 echo "<script type='text/javascript'>alert('$message');</script>";
// if everything is ok, try to upload file
   } else 
        {
   
	
       if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
	     {
        $sql = "insert into gallery(title,art_by,about,image,type,amount,profession) values('$title','$by','$about','$target_file','$imagefiletype','$price','$profession')";
		$query = mysqli_query($con,$sql);
		  if($row999>mysqli_fetch_row($query))
		  {
			  $message="Successfully Uploaded";
				 echo "<script type='text/javascript'>alert('$message');</script>";
		  }
         } 
	else {
        
		$message="Sorry, there was an error uploading your file.";
				 echo "<script type='text/javascript'>alert('$message');</script>";
    }
	}
 }
 else if($row['category']==2)
	{
	         	
				
				  
	              $file = rand(1000,100000)."-".$_FILES['image']['name'];
                  $file_loc = $_FILES['image']['tmp_name'];
                  $file_size = $_FILES['image']['size'];
                  $file_type = $_FILES['image']['type'];
                  $folder="../major/uploads/";
				  $error = 1;
          if($file_type == "mp3" && $file_type == "ogg")
		     $error = 0;
			    if($error==0)
				{
                  move_uploaded_file($file_loc,$folder.$file);
                 $sql6 = "insert into doc(title,about,file,type,size,profession) values('$title','$about','$file','$file_type','$file_size','$profession')";
		         $query6 = mysqli_query($con,$sql6);
				 if($query6==true)
				 {
					 $message="Successfully Uploaded";
				 echo "<script type='text/javascript'>alert('$message');</script>";
				 }
				 }
				 else
				 {
			     $message="file type not supported";
				 echo "<script type='text/javascript'>alert('$message');</script>";
				 }
	}
	else if($row['category']==5)
	 {
	         	
				
				  
	              $file = rand(1000,100000)."-".$_FILES['image']['name'];
                  $file_loc = $_FILES['image']['tmp_name'];
                  $file_size = $_FILES['image']['size'];
                  $file_type = $_FILES['image']['type'];
                  $folder="../major/uploads/";
                 $error = 1;
          if($file_type == "mp4")
		     $error = 0;
			    if($error==0)
				{
                  move_uploaded_file($file_loc,$folder.$file);
                 $sql6 = "insert into doc(title,about,file,type,size,profession) values('$title','$about','$file','$file_type','$file_size','$profession')";
		         $query6 = mysqli_query($con,$sql6);
				 if($query6==true)
				 {
					 $message="Successfully Uploaded";
				 echo "<script type='text/javascript'>alert('$message');</script>";
				 }
				}
				else
				 {
			     $message="file type not supported";
				 echo "<script type='text/javascript'>alert('$message');</script>";
				 }
				 
	}
	else
	{
	  $message="You are not permitted";
				 echo "<script type='text/javascript'>alert('$message');</script>";
	  } 

}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	</head>
	<body>
	</body>
	</html>