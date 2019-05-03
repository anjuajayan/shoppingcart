<?php
	session_start();
	$id=$_GET['id'];
    
    $con=mysqli_connect("localhost","root","","db1");


    if(isset($_POST['b1']))
    {
    	if (!isset($_SESSION['uid'])) 
    	{
    		header("location:userlogin.php");
    	}
    	else
    	{
    		$uid=$_SESSION['uid'];
    		
    		
    		$o= "UPDATE mag SET status='2' WHERE id='$id'";
    		$exe=mysqli_query($con,$o);
    		header("location:checkout.php");
    	}
    }

    
   
    ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from astritbublaku.com/demos/sweetpick/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 May 2015 04:02:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Home</title>

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
    


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>

.fa {
  padding: 3px;
  font-size: 20px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}




.fa-yahoo {
  background: #430297;
  color: white;
}


.fa-rss {
  background: #ff6600;
  color: white;
}


		#myCarousel{
			height:700px;
			width:1700px;
		}
        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
         max-width: 300px;
        
        margin: auto;
        padding:1px;
         font-family: arial;
        background-color:light-blue;
        }
        body
       {
        background-color:#f0f0f0;
       }


       .open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
       
	</style>

</head>
<body>

<!-- Preloader -->

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

							<li><a href="logout.php" class="login-window">Logout</a></li>
						</ul>
						

				    </div>
					<div class="clear"></div>
				</div>
			</div>
			

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
						<li><a href="news.php">News</a></li>
						<li><a href="articles.php">Articles</a></li>
						
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
		    	<!-- Navigation -->
			
					</div>

        </header>

        <br>

        <?php 
            $sql="select * from mag where id='$id'";
            $exe=mysqli_query($con,$sql);
            $fetch=mysqli_fetch_array($exe);
        ?>
         <div class="container">
            <div class="card">
            <center>
                <img src="../admin/productimage/newspapers/<?php echo $fetch['image'] ?>" alt="" style="width:80%">
                <img src="../admin/productimage/magazines/<?php echo $fetch['image'] ?>" alt="" style="width:80%">
                <h1><b><?php echo $fetch['name'] ?></b></h1>
                <p class="price" style="color:red;">Price : <?php echo "$".$fetch['price'] ?></p>
               
                
             
             
             
                
                <!--<input type="submit" class="btn btn-primary " name="checkout" value="Checkout Now!"></p>-->
                </center>
            
            
            
           
         </div>
         <center>
             <br>
         <p style="color:black;"><b>Category: <?php echo $fetch['subcat'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Language: <?php echo $fetch['lan'] ?></b> </p>
         <H3 style="color:Tomato;margin-left:10px;"><u>Description</u> </H3>
            <br><br><br></center>
             <p style="color:black;margin-left:10px;"><?php echo $fetch['det'] ?></p>
             <center>
             	<br>
	<form action="" method="post">
         <button style='font-size:24px' class="btn btn-primary" name="b1">Checkout Now ! <i class="fa fa-shopping-cart" formaction=""></i> </button>


        
         
	</form>
	

         </center>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 <br><br>
         <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://twitter.com/" class="fa fa-twitter"></a>
<a href="https://google.com/" class="fa fa-google"></a>
<a href="https://in.linkedin.com/" class="fa fa-linkedin"></a>
<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
<a href="https://in.yahoo.com/" class="fa fa-yahoo"></a>
<a href="https://rss.com/" class="fa fa-rss"></a>
<br><br><br><br><br>
    </body>
    </html>