<?php
		session_start();

		if (!isset($_SESSION['uid']))
		 {
			header("location:userlogin.php");
		}

		$con=mysqli_connect("localhost","root","","db1");
		$uid=$_SESSION['uid'];



		/**
		 * 
		 
		class shop 
		{
			
			public function __construct()
			{
				echo "haii";
				$this->_other;
			}

			protected function _other()
			{
				echo "this is the other class";
			}
		}
		*/
	
?>	

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from astritbublaku.com/demos/sweetpick/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 May 2015 04:02:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Magzworld|shop</title>

	<meta charset="utf-8">

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
		.pagination a
		{
			color: black;
			float: leftt;
			padding: 8px 16px;
			margin-top: 500px;
			text-decoration: none;
			transition: background-color .3s;

		}
		.pagination a.active 
		{
			background-color: #4caf50;
			color: #fff;
		}
		.pagination
		{
			margin-top: 1000px;
			margin-left: 150px;
		}
		.pagination a:hover:not(.actve)
		{
			background-color: #ddd;
		}
	</style>
</head>
<body>

<!-- Preloader -->


	<!-- Container -->

<div id="container" style="max-width: 100%;">
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

							<li><a href="logout.php" class="login-window">Logout</a></li>
						</ul>
						

				        </div>
					<div class="clear"></div>
				</div>
			</div>

			
			
												


					
						

				       

					
					<div class="clear"></div>
				</div>
			</div>
			<!-- end topline -->

			<div class="upper-header">
				<div class="container">

					<div class="search-input">
						<form action="search.php" method="post">
							<input type="text" placeholder="Search" name="searchh">
							<input type="submit" value="search" name="submit">
						</form>
					</div>

					<div class="logo">
						<a href="homepage.php"><img src="images/gradient/logo1.png" alt="" width="60px" height="60px">&nbsp;&nbsp; <font style="font-size:30px; color:blue;font-family:Pacific;"> MAGZWORLD</font></a>
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
						<li><a href="shop.php">Shop</a>
							
						</li>
						<li><a href="magazines.php">MAGAZINES</a></li>
						<li><a href="news.php">NEWSPAPERS</a></li>
						<li><a href="art.php">ARTICLES</a></li>
						<li><a href="contact.php">CONTACT</a></li>
					</ul>
				</nav>
		    	<!-- Navigation -->
			</div>
		

		</header>
		<!-- End Header -->



		<!-- content -->
		<div id="content">


			<div class="shop-main container" style="margin-left:5px;">
				<div class="row">
					<div class="col-md-3">
						<aside class="left-shop" style="margin-left:5px;">

							<div class="shop-categories mb30">
								<h1 class="asidetitle">Categories</h1>

								<ul>
									<li><a href="categ.php?category=lifestyle">Lifestyle</a></li>
									<li><a href="categ.php?category=education">Education</a></li>
									<li><a href="categ.php?category=fashion">Fashion</a></li>
									<li><a href="categ.php?category=health">Health</a></li>
									<li><a href="categ.php?category=entertainment">Entertainment</a></li>
									<li><a href="categ.php?category=children">Children</a></li>
									<li><a href="categ.php?category=cooking">Cooking</a></li>
									<li><a href="categ.php?category=travel">Travel</a></li>
									<li><a href="categ.php?category=news">News</a></li>
									<li><a href="categ.php?category=sports">Sports</a></li>
									<li><a href="categ.php?category=business">Business</a></li>
									<li><a href="categ.php?category=culture">Culture</a></li>
									<li><a href="categ.php?category=art">Art</a></li>
									<li><a href="categ.php?category=technology">Technology</a></li>
									<li><a href="categ.php?category=science">Science</a></li>
									<li><a href="categ.php?category=automotive">Automotive</a></li>
									<li><a href="categ.php?category=home">Home</a></li>
								</ul>

								<?php 
									$q="select * from mag";
									$z=mysqli_query($con,$q);
									$f=mysqli_fetch_array($z);
									 ?>
							</div>

							<div class="shop-categories mb30">
								<h1 class="asidetitle">Languages</h1>
								
								<ul>
									
									<li><a href="lan.php?lan=english">English</a></li>
									<li><a href="lan.php?lan=hindi">Hindi</a></li>
									<li><a href="lan.php?lan=malayalam">Malayalam</a></li>
									<li><a href="lan.php?lan=tamil">Tamil</a></li>
									<li><a href="lan.php?lan=telugu">Telugu</a></li>
									<li><a href="lan.php?lan=gujarati">Gujarati</a></li>
									
								</ul>
						
								
							
							</div>

						</aside>
					           
									</div>



					        

					        
							<div class="all">
					        
							<?php		
									$a="select * from mag";

									$exe=mysqli_query($con,$a);
									$nr=mysqli_num_rows($exe);
									$items_per_page=3;
									$total_pages=ceil($nr/$items_per_page);

									if (isset($_GET['page']) && !empty($_GET['page']))
								    {
										$page=$_GET['page'];
										$offset=($page-1)*$items_per_page;
										$er="select * from mag limit $items_per_page OFFSET $offset";
										$result=mysqli_query($con,$er);
										$row_count=mysqli_num_rows($result);
									
									while($fetch=mysqli_fetch_assoc($result))
									{
										
							?>
					       <div class="col-md-3 grid-item mb30" style="margin-left: 30px;margin-bottom: 40px;margin-top: 60px;margin-right: 30px;">
					       	
								<h3 style="text-align:center;margin-top:90px;margin-bottom:30px;"><?php echo $fetch['name'] ?></h3>
								<br><br><br>
								<div class="arrival-overlay" style="margin-top:80px;">

										
									<a href="cart.php?id=<?php echo $fetch['id']; ?>">	
										
										
										
										
										<img class="cover" src="../admin/productimage/newspapers/<?php echo $fetch['image'] ?>" alt="" width="40px" height="400px">
										<img class="cover" src="../admin/productimage/magazines/<?php echo $fetch['image'] ?>" alt="" width="40px" height="400px">
									 </a>
								</div><br><br>
							</div>

							<?php 
								}
									echo "<div class='pagination'>";
										for($i=1;$i<=$total_pages;$i++)
										{
											if ($i==$page)
											{
												echo "<a class='active'>". $i ."</a>";
											}
											else
											{
												echo "<a href='shop.php?page=". $i ."'>".$i."</a>";
											}
										}
									echo "</div>";

									

								

								
							


										if ($page>$total_pages) 
										{
											$page=1;
										}

									}
									else
									{
										$page=1;
										$offset=($page-1)*$items_per_page;
										$er="select * from mag limit $items_per_page OFFSET $offset";
										$result=mysqli_query($con,$er);
										$row_count=mysqli_num_rows($result);
									
									while($fetch=mysqli_fetch_assoc($result))
									{
										
							?>
					       <div class="col-md-3 grid-item mb30" style="margin-left: 30px;margin-bottom: 40px;margin-top: 60px;margin-right: 30px;">
					       	
								<h3 style="text-align:center;margin-top:90px;margin-bottom:30px;"><?php echo $fetch['name'] ?></h3>
								<br><br><br>
								<div class="arrival-overlay" style="margin-top:80px;">

										
									<a href="cart.php?id=<?php echo $fetch['id']; ?>">	
										
										
										
										
										<img class="cover" src="../admin/productimage/newspapers/<?php echo $fetch['image'] ?>" alt="" width="40px" height="400px">
										<img class="cover" src="../admin/productimage/magazines/<?php echo $fetch['image'] ?>" alt="" width="40px" height="400px">
									 </a>
								</div><br><br>
							</div>

							<?php 
								}
									echo "<div class='pagination'>";
										for($i=1;$i<=$total_pages;$i++)
										{
											if ($i==$page)
											{
												echo "<a class='active'>". $i ."</a>";
											}
											else
											{
												echo "<a href='shop.php?page=". $i ."'>".$i."</a>";
											}
										}
									echo "</div>";

									

								} 

								?>
							</div>


					       </div>
					       </div>
					        <br><br><br><br>
					        </div></div>
					        
				</div>
			</div>
			<!-- End shopmain -->
			
			
		</div>
		<!-- End content -->

		<!-- footer 
			================================================== -->
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

<!-- Mirrored from astritbublaku.com/demos/sweetpick/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 May 2015 04:02:19 GMT -->
</html>



	        
	