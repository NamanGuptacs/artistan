<!DOCTYPE HTML>
<html>
	<head>
		<title>Artistan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main1.css" />
		
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<style>
		  #dimg
		  {
		     height:368px;
			 width:256px;
			 }
			 .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.card
{ box-shadow :0 4px 8px o rgba(0,0,0,0.2);
transition:0.3s;
}
		</style>
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
							<div style="padding-bottom:20px">
								<h1><a href="index.php" id="logo">A R T I S T A N</a></h1>
								</div>
								<p><!--[-->Find your art here!<!--]--></p>
							</header>
							<footer>
								<ul class="actions">
						<li><a href="next1.php" class="button1 special">Register</a></li>
						<li><a href="#banner" class="button1 scrolly">See More</a></li>
					</ul>
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
								<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="#gallery" class="scrolly">Gallery</a>
								<ul>
									<li><a href="#gallery" class="scrolly">Panting and Drawing</a></li>
									<li><a href="#gallery" class="scrolly">Paper Craft</a></li>
									<li><a href="#gallery" class="scrolly">Mud Art</a></li>
									<li><a href="#gallery" class="scrolly">Decors</a></li>
									<li><a href="#myVideo" class="scrolly">Videos</a></li>
									<li><a href="#Music" class="scrolly">Music</a></li>
								</ul>
							</li>
							<li><a href="#features" class="scrolly">Contact</a></li>
							<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"> Cart</i></a></li>
							<li><a href="login.php">Login Here</a></li>
						</ul>
						</nav>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2><!--[-->Hi. You're looking at <strong>GiGs</strong>.<!--]--></h2>
						<p>
							<!--[--><strong>Art</strong> is not what you see, but what you make others see and an <strong>Artist</strong> is not paid                                    for his labour but for his Vision. 
							<!--]-->
						</p>
					</header>
				</section>

			<!-- Carousel -->
				<section class="carousel" id="gallery">
					<div class="reel">

                          <?php
						  require('contact_scr.php');
						   require('connect.php');
						   $sql12="select * from gallery";
						   $query12 = mysqli_query($con,$sql12);
						   $row34 = mysqli_fetch_row($query12);
						      if($row34>0)
							  {
							     while($data=mysqli_fetch_array($query12))
								 {
						  ?>
						<article class="card">
						   <div align="center">
							<a href="#" class="image featured"><img src="../major/<?php echo $data['image'];?>" alt="" id="" />
							<header style="padding:5px 0 0 0">
								<h3><?php echo $data['title'];?></h3>
							</header>
								
								</a>
								<a href="buy.php?buy=<?php echo $data['Id'];?>" class="button">Buy Now</a>
								</div>
						</article>
                            <?php
							}
							}
							else
							{
							?>  
						<article>
							<a href="#" class="image featured"><img src="img/pic02.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Mohit Kumar Saini</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>
						
						<article>
							<a href="#" class="image featured"><img src="img/pic02.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Naman Gupta</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>
						
						<article>
							<a href="#" class="image featured"><img src="img/pic02.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Ramandeep Singh</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>
						
						<article>
							<a href="#" class="image featured"><img src="img/pic02.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Shivansh Tiwari</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>
                            <?php
							}
							$sql66="SELECT file,about from doc where profession=8 and id=(SELECT MAX(Id) from doc) ";
							$query66=mysqli_query($con,$sql66);
							$data44=mysqli_fetch_array($query66); 
						  ?>
						    
					</div>
				</section>
				
			<!-- Main -->
				<div class="wrapper style2">
                   <header align="center">
							<h2><a href="#"><?php echo $data44['about'];?></a></h2>
							<p>
								
							</p>
						</header>
					<article id="main" class="container special">
					<div align="center">
						<video class="image featured"  id="" controls>
                         <source src="uploads/<?php echo $data44['file'];?>" type="video/mp4">
						 </video>
						 </div>
						
						
						<footer>
							<a href="videomore.php" class="button">Click here for more!</a>
						</footer>
					</article>

				</div>
				<!-- Carousel -->
				<section class="carousel" id="Music">
					<div class="reel">

                          <?php
						  require('contact_scr.php');
						   require('connect.php');
						   $sql121="select * from doc where profession=5";
						   $query121 = mysqli_query($con,$sql121);
						   $row341 = mysqli_fetch_row($query121);
						      if($row341>0)
							  {
							     while($data11=mysqli_fetch_array($query121))
								 {
						  ?>
						<article class="card">
						   <div align="center">
							<img class="image featured" src="../major/img/song.png" alt="" id="" />
							<header>
								<h3><?php echo $data11['title'];?></h3>
							</header>
								
							
								<a href="uploads/<?php echo $data11['file'] ;?>" target="_blank" class="button">Listen Now</a>
								</div>
								
						</article>
						<?php
								 }
							  }
								?>
					</div>
                 </section>

			<!-- Features -->
				<div class="wrapper style1">
                      
					<section id="features" class="container special">
						<header>
							<h2>Contact Me</h2>
							
						</header>
						<p>
							            <form method="post">
										 <div class="from-group">
                                        <div class="w3-group">
                                        <label>Name</label>
                                        <input class="w3-input w3-border" type="text" name="name" required>
                                        </div>
                                        <div class="w3-group">
                                        <label>Email</label>
                                        <input class="w3-input w3-border" type="text" name="email" required>
                                        </div>
                                       <div class="w3-group" style="padding-bottom:10px">
                                       <label>Message</label>
                                      <input class="w3-input w3-border" type="text" name="message" required>
                                  </div>
                                <button type="submit" name="sub">Send Message</button>
								</div>
                             </form>
						</p>
					</section>
                  
				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3></h3>
										</header>
										<p></p>
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Untitled. All rights reserved.</li><li>Design:RMN</li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
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

window.addEventListener('scroll', checkScroll, false);
window.addEventListener('resize', checkScroll, false);

</script>
	</body>
</html>