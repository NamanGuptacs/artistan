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
$sql55="select * from art_reg where Id='$id'";
$query55 = mysqli_query($con,$sql55);
$row55=mysqli_fetch_array($query55);
$category=$row55['category'];
$pro = $row55['field'];
}
$sql90="select * from artist where ID ='$category'";
$query90 = mysqli_query($con,$sql90);
$data90 = mysqli_fetch_array($query90);

$sql91="select * from art_field where A_id ='$pro'";
$query91 = mysqli_query($con,$sql91);
$data91 = mysqli_fetch_array($query91);
$image1 =  $row55['image'];

if(isset($_POST['sub']))
{
  
   $email = $_POST['email'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $middle = $_POST['middlename'];
   
   $city = $_POST['city'];
   $country = $_POST['country'];
   $zip = $_POST['zip'];
   $about = $_POST['about'];
   $dir = "profilepic/";
   $image = $_FILES['img']['name'];
   $temp = $_FILES['img']['tmp_name'];
   $path = $dir.$image;
    if($path=="profilepic/")
	{
	   move_uploaded_file($temp,$path);
   $sql3 = "UPDATE art_reg SET email='$email',firstname='$fname',lastname='$lname',
            middlename='$middle',city='$city',country='$country',zip='$zip',about='$about',image='$image1' where Id='$id'";
   $query3 = mysqli_query($con,$sql3);
   if($query3==true)
    header("Location:user.php");
	}
	   else
	   {
	   move_uploaded_file($temp,$path);
   $sql3 = "UPDATE art_reg SET email='$email',firstname='$fname',lastname='$lname',
            middlename='$middle',city='$city',country='$country',zip='$zip',about='$about',image='$path' where Id='$id'";
   $query3 = mysqli_query($con,$sql3);
   if($query3==true)
    header("Location:user.php");
	}
   
   
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>user profile</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<?php
require('header.php');
?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="row">
                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="user" class="form-control" placeholder="Username" value="<?php echo $row55['username'];?>" disabled="disabled"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" placeholder="Email" value="<?php echo $row55['email'];?>" name="email"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" 
												value="<?php echo $row55['firstname'];?>" name="fname"/ >
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label>Middle Name</label>
                                                <input type="text" class="form-control" placeholder="Middle Name" 
												value="<?php echo $row55['middlename'];?>" name="middlename"/ >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" 
												value="<?php echo $row55['lastname'];?>" name="lname"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <input type="text" class="form-control" placeholder="category" 
												value="<?php echo $data90['Artist_category'];?>" disabled="disabled"/>
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Profession</label>
                                                <input type="text" class="form-control" placeholder="Profession" 
												value="<?php echo $data91['a_field'];?>" disabled="disabled"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City" 
												value="<?php echo $row55['city'];?>" name="city"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" 
												value="<?php echo $row55['country'];?>" name="country"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="text" class="form-control" placeholder="ZIP Code" 
												value="<?php echo $row55['zip'];?>" name="zip"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your description" 
												name="about"><?php echo $row55['about'];?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right" name="sub">Update Profile</button>
                                    <div class="clearfix"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
								      <?php 
									       if(!$row55['image']=="")
										   {
										   ?>
                                     <a href="#">
                                    <img class="avatar border-gray" src="<?php echo $row55['image'];?>" alt="..."/>
                                      <div align="center">
									    <input type="file" name="img" value="<?php echo $row55['image'];?>" />
										</div></a>
										<?php 
										}
										else
										{
										?>
										<a href="#">
                                    <img class="avatar border-gray" src="img/default_avatar.png" alt="..."/>
                                      <div align="center">
									    <input type="file" name="img" value="default_avatar.png" />
										</div></a>
										<?php
										}
										?>
										</form>
                                </div>
                                <p class="description text-center">
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php
		require('footer.php');
        ?>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>