<?php
session_start();
if(!isset($_SESSION['login_user']))
{
	header("location:login.php");
}
?> 

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

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
                    <div class="col-xs-6 col-sm-4 col-md-4">
                       
					    <a href="user.php">
						<div class="card">
                            <div class="header">
                                <h4 class="title">Profile</h4>
                               <hr> 
                            </div>
                            <div class="content">
                                <?php
								if($data['image']!="")
								{
								?> 
								   <div align="center">
                                    <img  class="avatar border-gray img-responsive" src="<?php echo $data['image'];?>" style="width:250px; height:250px;" />
									<?php
									  if(!$data['firstname']=="")
									  {
									  ?>
								      <div style="padding:5px 0 5px 0;">
								         <h5><p><?php echo strtoupper($data['firstname']." ".$data['middlename']." ".$data['lastname']);?></p></h5>
								      </div>
									  <?php
									  }
									  else
									  {
									  ?>
									  <div style="padding:5px 0 5px 0;">
								           <h5><p><?php echo $data['username'];?></p></h5>
								      </div>
									  <?php
									  }?>
								   </div>
								   <?php
								   }
								   else
								   {
								   ?>
								   <div align="center">
								   <img  class="avatar border-gray img-responsive" src="img/default_avatar.png"  style="width:300px; height:250px;"/>
								      <div style="padding:5px 0 5px 0;">
								           <h5><p><?php echo $data['username'];?></p></h5>
								      </div>
								   </div>
								   <?php
								   }?>
                                <div class="footer">
                                    
                                    
                                </div>
                            </div>
                        </div>
						</a>
                    </div><!--col-->
                    
                    <div class="col-xs-6 col-sm-8 col-md-8">
					  <?php
					       if($data['category']==1)
						   {
					      $d=$data['field'];
					      $dis = "select * from gallery where profession='$d'";
						  $qdis = mysqli_query($con,$dis);
						  $rdis = mysqli_fetch_array($qdis);
						   }
						   else
						   {
							 $d=$data['field'];
					      $dis = "select * from doc where profession='$d'";
						  $qdis = mysqli_query($con,$dis);
						  $rdis = mysqli_fetch_array($qdis);   
						   }
						  if($rdis>0)
						  {
					  ?>
					  <a href="upload.php">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Upload Your File</h4>
                                
                            </div>
                            <div class="content">
							 <div align="center">
                                <img class="img-responsive" src="img/up.jpg" style="height:290px">
                              </div>
							  <div class="footer">
                                    
                                    
                                </div>
                            </div>
                        </div>
						</a>
						<?php
						}
						else
						{
						?>
						<a href="upload.php">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Upload Your first File</h4>
                                
                            </div>
                            <div class="content">
							 <div align="center">
                                <img class="img-responsive" src="img/up.jpg" style="min-height:290px">
                              </div>
							  <div class="footer">
                                    
                                    
                                </div>
                            </div>
                        </div>
						</a>
						<?php
						}
						?>
                    </div>
                </div>



              
            </div>
        </div>

      <?php 
	     require('footer.php');
       ?>

    



</body>
</html>
