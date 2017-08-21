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
$sql22="select * from cuser_reg where Id='$id'";
$query22 = mysqli_query($con,$sql22);
$row22=mysqli_fetch_array($query22);
}
if(isset($_POST['sub']))
{
  
   $email = $_POST['email'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $mobile = $_POST['mobile'];
   $designation = $_POST['designation'];
   $dir = "profilepic/";
   $image = $_FILES['img']['name'];
   $temp = $_FILES['img']['tmp_name'];
   $path = $dir.$image;
   move_uploaded_file($temp,$path);
   $sql3 = "UPDATE cuser_reg SET email='$email',firstname='$fname',lastname='$lname',mobile='$mobile',designation='$designation',image='$path' where Id='$id'";
   $query3 = mysqli_query($con,$sql3);
   
   
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>User profile</title>

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
                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="user" class="form-control" placeholder="Username" value="<?php echo $row22['username'];?>" disabled="disabled"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" placeholder="Email" value="<?php echo $row22['email'];?>" name="email"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" value="<?php echo $row22['firstname'];?>" name="fname"/ >
                                            </div>
                                        </div>
										
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value="<?php echo $row22['lastname'];?>" name="lname" />
                                            </div>
                                        </div>
                                    </div>

                                   

                                    

                                    <div class="row">
									<div class="col-md-1">
                                            <div class="form-group">
											<label></label>
                                                <input type="text" class="form-control" placeholder="your mobile number" disabled="disabled" value="+91" name="code"/>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="your mobile number" value="<?php echo $row22['mobile'];?>" name="mobile"/>
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Your Designation</label>
                                                <input type="text" class="form-control" placeholder="Designation in company" 
												value="<?php echo $row22['designation'];?>" name="designation"/>
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
								        if($row22['image']!="")
										{
								      ?>
                                     <a href="">
                                    <img class="avatar border-gray" src="<?php echo $row22['image'];?>" alt="..."/>
                                      <div align="center">
									    <input type="file" name="img" value="upload photo" />
										</div></a>
										<?php
										}
										else
										{
										?>
										<a href="">
                                    <img class="avatar border-gray" src="img/default_avatar.png" alt="..."/>
                                      <div align="center">
									    <input type="file" name="img" value="upload photo" />
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

    

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>