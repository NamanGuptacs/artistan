<!DOCTYPE html>
<html>
<title>Videos</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	</head>
<body class="homepage">
 <div class="w3-margin">
		
  <div class="w3-bar w3-border w3-card-4 w3-light-grey">
  <a href="index.php" class="w3-bar-item w3-button">Home</a>
  <a href="index.php" class="w3-bar-item w3-button w3-hide-small">Gallery</a>
  <a href="videomore.php" class="w3-bar-item w3-button w3-hide-small">Video</a>
  <a href="login.php" class="w3-bar-item w3-button w3-hide-small">LogIn</a>
  <a href="next1.php" class="w3-bar-item w3-button w3-hide-small">Resgister</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onClick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-card-4 w3-light-grey w3-hide w3-hide-large w3-hide-medium">
  
  <a href="index.php" class="w3-bar-item w3-button w3-center">Gallery</a>
  <a href="videomore.php" class="w3-bar-item w3-button w3-center">Video</a>
  <a href="login.php" class="w3-bar-item w3-button w3-center">LogIn</a>
  <a href="next1.php" class="w3-bar-item w3-button w3-center">Resgister</a>
</div>

<div class="w3-container">
  <div class="w3-row-padding">
     <div class="w3-content">
	    		<?php
		       require('connect.php');
              $sql94="select * from doc where profession=8";
              $query94=mysqli_query($con,$sql94);
              	
              while($data94=mysqli_fetch_array($query94))
			  {				  
		 ?>
		      <div class="s12 m12 l12">
                    <div class="w3-pannel w3-padding-32 w3-center">
					   <header>
					       <h1><?php echo strtoupper($data94['title']);?></h1>
						   <p><?php echo $data94['about'];?></p>
					   </header>
					   <section>
		                        <video class="image w3-image"  controls id="myVideo" style="width:100%">
                                  <source src="uploads/<?php echo $data94['file'];?>" type="video/mp4">
						        </video>
					
        				</section>
					</div>
               </div>
                  			   
				<?php
			  }
			  ?>
		
	 
    </div>
  </div>
</div>
</div>
<footer class="w3-black w3-padding-16 w3-center">
 <p>Powered by RNM</p>
  
</footer>
</body>
<script>
var videos = document.getElementsByTagName("video");
fraction = 0.8;
function checkScroll() {

    for(var i = 0; i < videos.length; i++) {

        var video = videos[i];

        var x = video.offsetLeft, y = video.offsetTop, w = video.offsetWidth, h = video.offsetHeight, r = x + w, //right
            b = y + h, //bottom
            visibleX, visibleY, visible;

            visibleX = Math.max(0, Math.min(w, window.pageXOffset + window.innerWidth - x, r - window.pageXOffset));
            visibleY = Math.max(0, Math.min(h, window.pageYOffset + window.innerHeight - y, b - window.pageYOffset));

            visible = visibleX * visibleY / (w * h);

            if (visible > fraction) {
                video.play();
            } else {
                video.pause();
            }

    }

}
function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

window.addEventListener('scroll', checkScroll, false);
window.addEventListener('resize', checkScroll, false);

</script>
</html>