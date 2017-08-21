<?php
require('u_source.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

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
<title>Upload</title>
</head>

<body>
  <?php
   require('header.php');
   ?>
    <div class="content">
            <div class="container-fluid">
                <div class="row">
	                <div class="col-xs-12 col-sm-4 col-md-3">
		        </div><!--col-->
				    <div class="col-xs-12 col-sm-6 col-md-6">
					   <div class="w3-card-2">
					     <div class="header" style="padding:10px 10px 10px 10px;" align="center">
						   <h4>Upload files here!</h4>
						   <hr style="border-color:#999999;"/>
						   </div>
						   <div class="content">
					    <form method="post" enctype="multipart/form-data">
						 <div class="form-group" style="padding:5px 12px 5px 12px">
						    <div style="padding-bottom:5px">
						   <label>Title</label>
						   <input type="text" name="title" class="form-control" placeholder="enter the name of art" />
						   </div>
						   <div style="padding-bottom:5px">
						   <?php
						   if(!$data['category']==4)
						   {
						   ?>
						   <label>Art By</label>
						   <?php
						   }
						   else
						   {
						   ?>
						   <label>Design By</label>
						   <?php
						   }
						   ?>
						   <input type="text" name="by" class="form-control" placeholder="enter the name of artist" />
						   </div>
						   <div style="padding-bottom:5px">
						   <label>Description</label>
						   <textarea class="form-control" rows="3" name="desc" placeholder="Describe about your art..."></textarea>
						   </div>
						   <div style="padding-bottom:5px">
						   <label>Amount</label>
						   <input type="text" name="amount" class="form-control" placeholder="enter the amount in INR" />
						   </div>
						   <label>Choose your file</label>
						   <input type="file" name="image" class="form-control" />
						   <div align="right" style="padding:10px 0 10px 0">
						   <button type="submit" name="sub" class="btn btn-info btn-fill ">Upload</button>
						   </div> 
						 </div>
						</form>
						  </div>
						</div><!--card-->
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3">
					</div>
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
