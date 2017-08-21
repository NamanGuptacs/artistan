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

$sql1= "select category from art_reg where Id='$id' ";
$query1=mysqli_query($con,$sql1);
$row = mysqli_fetch_array($query1);
$cat=$row['category'];
 $pro = "select field from art_reg where category='$cat'";
				  $pro_query = mysqli_query($con,$pro);
				  $pro_fetch = mysqli_fetch_array($pro_query);
				  $profession = $pro_fetch['field']; 
				  
 				    
}
if($cat==2 or $cat==5)
{
$sql11= "select * from doc where profession='$profession'";
$query11=mysqli_query($con,$sql11);

if (isset($_GET['del']))
{
    $delete = $_GET['del'];
	$sql1 = "delete from doc where id='$delete'";
	$query1 = mysqli_query($con,$sql1);
	
}
$up=1;
}
else if($cat==1)
{
   $sql11= "select * from gallery where profession='$profession'";
$query11=mysqli_query($con,$sql11);

if (isset($_GET['del']))
{
    $delete = $_GET['del'];
	$sql1 = "delete from doc where id='$delete'";
	$query1 = mysqli_query($con,$sql1);
}

}
   


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Upload</title>
</head>

<body>
  <?php
   require('header.php');
   ?>
    <div class="content">
            <div class="container-fluid">
                <div class="row">
				    <div class="col-xs-12 col-sm-12 col-md-12">
					   <div class="card">
	                       <div class="header">
                               <h4 class="title">Files</h4>
							   </div>
							   <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <?php
									   if($cat==2 or $cat==5)
										  {
									?>
									<thead>
                                        <th>ID</th>
                                    	<th>Title</th>
                                    	<th>Description</th>
                                    	<th>File name</th>
                                    	<th>File type</th>
										<th>File size</th>
                                    </thead>
									
									<tbody>
									  <?php
									     
										  
										 while($data = mysqli_fetch_array($query11))
										   {
										 ?>
										    
											<tr>
		                                        <td><?php echo $data['Id'];?></td>
												<td><?php echo $data['title'];?></td>
												<td><?php echo $data['about'];?></td>
												<td><?php echo $data['file'] ?></td>
                                                <td><?php echo $data['type'] ?></td>
				 
                                                <td><?php echo $data['size'] ?></td>
                                                <td><a href="../major/uploads/<?php echo $data['file'] ;?>" target="_blank">View file</a></td>
				                                <td><a href="viewfiles.php?del=<?php echo $data['Id'];?>"><span class="pe-7s-trash"></span></a></td>
											</tr>
											
										 <?php
										  
										   }
										 }
										 else
										 {
										  ?>
										    <thead>
                                             <th>ID</th>
                                    	     <th>Title</th>
                                    	     <th>Description</th>
                                    	     <th>File name</th>
                                    	     <th>File type</th>
										
                                            </thead>
									
									<tbody>
									     <?php
									      
										 while($data = mysqli_fetch_array($query11))
										 {
										 ?>
										 <tr>
		                                        <td><?php echo $data['Id'];?></td>
												<td><?php echo $data['title'];?></td>
												<td><?php echo $data['about'];?></td>
												<td><?php echo $data['image'] ?></td>
                                                <td><?php echo $data['type'] ?></td>
				 
                                                <td><a href="../major/<?php echo $data['image'] ;?>" target="_blank">View file</a></td>
				                                <td><a href="viewfiles.php?del=<?php echo $data['Id'];?>"><span class="pe-7s-trash"></span></a></td>
											</tr>
											
										 <?php
										 }
										 }
										 
										 ?>
									  
									</tbody>
								</table>
								</div>
						</div><!--card-->
				 </div><!--col-->
		      </div><!--row-->
			</div><!--container-->
		</div><!--content-->	
		<?php
		require('footer.php');
		?>
     </div><!--main-->
   </div><!--wrapper-->
</body>
</html>
