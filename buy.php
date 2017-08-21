<?php
require('connect.php');
if(isset($_GET['buy']))
{
	$buy=$_GET['buy'];
	$sql567="select * from gallery where Id='$buy'";
	$query567=mysqli_query($con,$sql567);
	$data567=mysqli_fetch_array($query567);
}
?>
<!DOCTYPE html>
<html>
<title>Videos</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	
	<!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
	
		<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<style>
	body{
		width:100%;
		height:100%;
	}
</style>	
	</head>
<body>
 <div class="w3-margin">
		
  <div class="w3-bar w3-border w3-card w3-light-grey">
  <a href="index.php" class="w3-bar-item w3-button">Home</a>
  <a href="index.php" class="w3-bar-item w3-button w3-hide-small">Gallery</a>
  <a href="videomore.php" class="w3-bar-item w3-button w3-hide-small">Video</a>
  <a href="login.php" class="w3-bar-item w3-button w3-hide-small">LogIn</a>
  <a href="next1.php" class="w3-bar-item w3-button w3-hide-small">Resgister</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onClick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-card w3-light-grey w3-hide w3-hide-large w3-hide-medium">
  
  <a href="index.php" class="w3-bar-item w3-button w3-center">Gallery</a>
  <a href="videomore.php" class="w3-bar-item w3-button w3-center">Video</a>
  <a href="login.php" class="w3-bar-item w3-button w3-center">LogIn</a>
  <a href="next1.php" class="w3-bar-item w3-button w3-center">Resgister</a>
</div>
<div class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 w3-padding-16">
                      <div class="card">
		     
		                 <img class="img-responsive" src="../major/<?php echo $data567['image'];?>"></img>
		              </div>
				   </div>
            <div class="col-sm-8 col-md-8 col-xs-12 w3-padding-16">
			   <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo strtoupper($data567['title']);?></h4>
                                
                            </div>
                            <div class="content">
				               <p>Artist Name : <?php echo $data567['art_by'];?></p></br>			  
							   <p>Description : <?php echo $data567['about'];?></p></br> 
							   <p>Rate        : <?php echo $data567['amount'];?></p></br>
							   <div style="width:100px" align="center" >
							   <a href="#" class="btn btn-default">Buy</a>
							   </div>
                            </div>
                </div>
		   </div>		   
         </div>		
		
	 
    </div>
  </div>
</div>
<footer class="w3-black w3-padding-16 w3-center">
 <p>Powered by RNM</p>
  
</footer>
</body>
<script>

function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}


</script>
</html>