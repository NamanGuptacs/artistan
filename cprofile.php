<?php
require('connect.php');
session_start();
if(isset($_SESSION['login_user']))
{  
   $id = $_SESSION['login_user'];
$sql99="select * from cuser_reg where Id='$id'";
$query99 = mysqli_query($con,$sql99);
$row99=mysqli_fetch_array($query99);

}
$sql19 = "select * from com_reg where Id='$id'";
$query19 = mysqli_query($con,$sql19);
$row19 = mysqli_fetch_array($query19);
$email1=$row19['email'];
$imag=$row19['image'];
  if(!$row19=="")
  {
    if(isset($_POST['sub']))
    {
       $user = $row99['username'];
	   $company = $row99['company'];
	   $email = $_POST['email'];
	   $mobile = $_POST['mobile'];
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
   
       $sql4= "update com_reg set username='$user',email='$email',company='$company',mobile='$mobile',city='$city',country='$country',
          zip='$zip',about='$about',image='$imag' where Id='$id'"; 
           
       $query4= mysqli_query($con,$sql4);
	   
	   if($query4==true)
		 header("Location:cprofile.php");
		 }
		 else
		 {
		      $sql4= "update com_reg set username='$user',email='$email',company='$company',mobile='$mobile',city='$city',country='$country',
          zip='$zip',about='$about',image='$path' where Id='$id'"; 
           
       $query4= mysqli_query($con,$sql4);
	   
	   if($query4==true)
		 header("Location:cprofile.php");
		 }
     }
 } 
 else
 {
      if(isset($_POST['sub']))
	  {
       $user = $row99['username'];
	   $company = $row99['company'];
	   $email = $_POST['email'];
	   $mobile = $_POST['mobile'];
       $city = $_POST['city'];
       $country = $_POST['country'];
       $zip = $_POST['zip'];
       $about = $_POST['about'];
       $dir = "profilepic/";
       $image = $_FILES['img']['name'];
       $temp = $_FILES['img']['tmp_name'];
       $path = $dir.$image;
       move_uploaded_file($temp,$path);
	   
	   $sql8 = "insert into com_reg(username,email,company,mobile,city,country,zip,about,image,Id) 
	            values('$user','$email','$company','$mobile','$city','$country','$zip','$about','$path','$id')";
		$query8 = mysqli_query($con,$sql8);
		
		if($query8==true)
		 header("Location:cprofile.php");
	   }
 }
     

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Company profile</title>

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
require('cheader.php');
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
									
                                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" 
												value="<?php echo $row99['username'];?>" disabled="disabled"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Company email address</label>
                                                <input type="email" class="form-control" name="email" value="<?php echo $email1;?>"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Comapny Name</label>
                                                <input type="text" class="form-control" placeholder="company Name" 
												value="<?php echo $row99['company'];?>" disabled="disabled" />
                                            </div>
                                        </div>
										
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Company Number</label>
                                                <input type="text" class="form-control" placeholder="Company number" name="mobile"
												value="<?php echo $row19['mobile'];?>"/>
                                            </div>
                                        </div>
									</div>

                                   <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Company location</label>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City" name="city" 
												value="<?php echo $row19['city'];?>"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country"  name="country"
												value="<?php echo $row19['country'];?>"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="text" class="form-control" placeholder="ZIP Code" name="zip"
												value="<?php echo $row19['zip'];?>"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
									
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label>About Company</label>
												
                                                <textarea rows="5" class="form-control" placeholder="Description about comapny.." 
												name="about"><?php echo $row19['about'];?></textarea>
												
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
                                     <a href="#">
                                    <img class="avatar border-gray" src="<?php echo $imag;?>" alt="..."/>
                                      <div align="center">
									    <input type="file" name="img" value="upload photo" />
										</div></a>
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

    
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>