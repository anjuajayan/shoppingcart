<?php

$con=mysqli_connect("localhost","root","","db1");
if(isset($_POST['submit']))
{
    $f=$_POST['firstname'];
    $l=$_POST['lastname'];
    $s=$_POST['subject'];
    $e=$_POST['emailid'];

    $sql="insert into contact(fname,lname,subject,email) values('$f','$l','$s','$e')";
    $exec=mysqli_query($con,$sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from astritbublaku.com/demos/sweetpick/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 May 2015 04:02:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Magzworld|Contact us</title>

	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800,900,200,100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400,200,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">	

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />

	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
	
	<link rel="shortcut icon" href="images/gradient/logo1.png" type="image/x-icon">
	<link rel="icon" href="images/gradient/logo1.png" type="image/x-icon">

	<!-- Style Switch -->
	<link rel="alternate stylesheet" type="text/css" href="css/colors/yellow-black.css" title="yellow" media="screen" />
   	<link rel="alternate stylesheet" type="text/css" href="css/colors/violet-black.css" title="black" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/orange-black.css" title="orange" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/blue-black.css" title="blue" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/red-black.css" title="red" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/green-black.css" title="green" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/pink-black.css" title="pink" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/pale-green-black.css" title="pale-green" media="screen" />

<style>

    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.contain {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
	

</head>

<div id="container">
	<!-- Container -->
	
		<!-- Header
		    ================================================== -->
		<header class="clearfix">

			<div class="top-line">
				<div class="container">
				
					<div class="right-line clearfix">
						<ul>
							<li><a href="user_reg.php">Register</a></li>
						
							<li><a href="userlogin.php" class="login-window">Login</a></li>
						</ul>
						<div class="mobile-version">
							<div class="cart-icon">
								<a href="#"><img src="images/cart-white.png" alt="">
								<span>8 Items</span></a>	
							</div>
						</div>

				        </div>
					<div class="clear"></div>
				</div>
			</div>
			<!-- end topline -->

			<div class="upper-header">
				<div class="container">

					<div class="search-input">
						<form action="#">
							<input type="text" placeholder="Type and Search">
							<input type="submit" value="">
						</form>
					</div>

					<div class="logo">
						<a href="homepage.php"><img src="images/gradient/logo1.png" alt="" width="60px" height="60px">&nbsp;&nbsp; <font style="font-size:30px; color:blue;font-family:Pacific;"> MAGZWORLD</font></a>
				
					</div>
					
					<div class="cart">
						
						</div>
					</div>

					<div class="clear"></div>

				</div>
				<!-- End container -->	
			</div>
			<!-- End Upper-header -->		
			<div class="nav-border"></div>
			<div class="container">
				<!-- Navigation -->
				<nav id="nav">
					<ul id="navlist" class="sf-menu clearfix">
						<li><a href="homepage.php">Home</a>
							
						</li>
						<li class="current"><a href="shop.php">Shop</a>
							
						</li>
						<li><a href="magazines.php">Magazines</a></li>
						<li><a href="news.php">Newspapers</a></li>
						<li><a href="articles.php">Articles</a></li>
						<li><a href="offers.php">Offers</a>
							
						
						
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
		    	<!-- Navigation -->
			
					</div>

		</header>
		<!-- End Header -->
        <br><br>
        <center><h3> <font color="orangered">Contact Form</font> </h3></center>
        <div class="content">

        
        <br><br>

<div class="contain">
  <form action="" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="email">Email</label>
    <input type="email" id="email" name="emailid" placeholder="Your email id..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="submit">
  </form>
  <br>
  <br>
  <h3><u>Location</u></h3>
  <br><br><br>
  Anglade Globals,<br>
  3rd floor,Haroon Plaza<br>
  SH 16, Periyar Nagar,<br> Aluva,<br> Kerala 683101
  <br><br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15711.475270185994!2d76.3589287!3d10.1098224!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a60800dc6e6b0a6!2sAnglade+Globals!5e0!3m2!1sen!2sin!4v1552645876548" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

        </div>

        
	        
		<footer>
			<div class="inner-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="f-about">
								<h1>ABOUT SHOP</h1>
								<p class="mb20">We possess within us two minds. So far I have written only of the conscious mind.We further know that the subconscious has recorded every event. This is just perfect theme.</p>
								
							</div>
						</div>
						<div class="col-md-3">
							<div class="infos">
								<h1>Information</h1>
								<ul>
									
									<li><a href="about.php">• About Us</a></li>
									<li><a href="terms.php">• Terms and Conditions</a></li>
									<li><a href="privacy.php">• Privacy Policy</a></li>
									<li><a href="contact.php">• Contact Us</a></li>
									
								</ul>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="gettouch">
								<h1>Get in Touch with us</h1>
								<p><i class="fa fa-home"></i> Kerala</p>
								
								<p class="mb20"><i class="fa fa-envelope"></i> anj@gmail.com</p>
								<h1>FIND US ON</h1>
								<ul class="footer-socials">
									<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://in.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<div id="back-to-top">
	          <a href="#top">Back to Top</a>
	        </div>
			</div>
			<!-- end contanir & inner-footer -->
			<div class="container">
				<div class="last-div">
					<div class="row">
						<div class="copyright">
							© 2019 MagzWorld  |  <a href="#">Designed by Anju Ajayan</a>
						</div>
						<div class="payment">
							<a href="#"><img src="upload/payments.png" alt=""></a>
						</div>
						<div class="clear"></div>
					</div>

				</div>
			</div>



	        
		</footer>
		<!-- End footer -->



        <!-- Style Switch -->
		<div id="customizer" class="s-close">
			
		<!-- Style Switch -->

		</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script>
	$(function() {
	    $( "#slider-range" ).slider({
	      range: true,
	      min: 0,
	      max: 500,
	      values: [ 0, 500 ],
	      slide: function( event, ui ) {
	        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	      }
	    });
	    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	  });</script>
	<script type="text/javascript" src="js/jquery.superfish.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.html"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.html"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/jquery.countTo.js"></script>
	<script src="js/jquery.parallax.html"></script>
     <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	
    <!-- Style Switcher -->
	<script src="js/styleswitch.js"></script>
	<script src="js/style_switch_custom.js"></script>
</body>
</html>