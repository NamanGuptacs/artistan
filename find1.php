
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
<title>Artist</title>
<style>

</style>
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
                               <h4 class="title">Artist</h4>
							   </div>
							   <div class="content">
							    <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <?php
									  if($data911>0)
									    {
										  ?>
									<thead>
                                        
                                    	<th>Name</th>
                                    	<th>Category</th>
										<th>Profession</th>
                                       	<th>City</th>
										<th>Country</th>
										<th>About</th>
                                    </thead>
									
									<tbody>
									  <?php
									     
										  
										 while($r = mysqli_fetch_array($query67))
										   {
										 ?>
										    
											<tr>
		                                        <td><?php echo $r['firstname']." ".$r['middlename']." ".$r['lastname'];?></td>
												<td><?php echo $data901['Artist_category'];?></td>
												<td><?php echo $data911['a_field'];?></td>
												<td><?php echo $r['city']; ?></td>
                                                <td><?php echo $r['country'] ;?></td>
				 
                                                <td><?php echo $r['about']; ?></td>
                                                 <td><a href="#">Book Now!</a></td>   
											</tr>
											
										 <?php
										  
										   }
									    }
										   else
										   {
										 ?>
										 <thead>
                                        
                                    	<th>Name</th>
                                    	<th>Category</th>
                                    	<th>City</th>
										<th>Country</th>
										<th>About</th>
                                    </thead>
									
									<tbody>
									  <?php
									     
										  
										 while($r = mysqli_fetch_array($query67))
										   {
										 ?>
										    
											<tr>
		                                        <td><?php echo $r['firstname']." ".$r['middlename']." ".$r['lastname'];?></td>
												<td><?php echo $data901['Artist_category'];?></td>
												
												<td><?php echo $r['city']; ?></td>
                                                <td><?php echo $r['country'] ;?></td>
				 
                                                <td><?php echo $r['about']; ?></td>
                                                <td><a href="#">Book Now!</a></td>
											</tr>
											
										 <?php
										  
										   }
										   }
										 ?>
										
									  
									</tbody>
								</table>
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
							   