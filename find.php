<?php
require('connect.php');
session_start();
if(!isset($_SESSION['login_user']))
{
	header("location:login.php");
}
else if(isset($_POST['sub']))
{
	$cat = $_POST['artist'];
	$fild = $_POST['field'];
	
	$sql901="select * from artist where ID ='$cat'";
$query901 = mysqli_query($con,$sql901);
$data901 = mysqli_fetch_array($query901);

$sql911="select * from art_field where A_id ='$fild'";
$query911 = mysqli_query($con,$sql911);
$data911 = mysqli_fetch_array($query911);
	
	if($fild =="--Select one--")
	 {
		 $sql67="select * from art_reg where category='$cat'";
		 $query67=mysqli_query($con,$sql67);
		 if($query67==true)
		 require('find1.php');
		 
		 
	 }
	 else
	 {
		 $sql67="select * from art_reg where category='$cat' and field='$fild'";
		 $query67=mysqli_query($con,$sql67);
		  if($query67==true)
		 require('find1.php');
	 }
	 
		 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
	
<script src="jquery-3.2.1.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="art.js" type="text/javascript"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Find Artist</title>
</head>

<body>
  <?php
   require('cheader.php');
   ?>
    <div class="content">
            <div class="container-fluid">
                <div class="row">
				    <div class="col-xs-12 col-sm-12 col-md-12">
					   <div class="card">
	                       <div class="header">
                               <h4 class="title">Find Artist</h4>
							   </div>
							   <div class="content">
							     <div>
								       <form method="post">
		                              <lable>Category</label><span class="error">*</span>
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
		                              <lable>Field</label><span class="error">*</span>
	                                      <select class="form-control" id="field" name="field">
		                                   <option selected="selected">--Select one--</option>
	                                        </select>
	                                       </div>
		                                   
		                                   <div align="right" style=" padding:10px 5px 10px 5px; position:relative;">
		                                     <button type="submit" class="btn btn-default w3-card-2" name="sub" >GO</button>
		                                    </div>
											</form>
								 </div>
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
							   