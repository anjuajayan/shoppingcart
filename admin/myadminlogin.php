<?php
    session_start();
    $con=mysqli_connect("localhost","root","","db1");

?>    
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login Form</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>

  <span href="#" class="button" id="toggle-login">Log in</span>

<div id="login">
  <div id="triangle"></div>
  <h1>Log in</h1>
  <form action="" method="post" name="ff"  class="login-container">
    <p><input type="text" name="username" placeholder="Username" class="form-control" required /></p>
    <p><input type="password" placeholder="Password" name="password" class="form-control" required/></p>
    <p><input type="submit" value="Log in" name="submit" /></p>
  </form>
</div>

  <script src='admin/js/jquery.min.js'></script>

  <script src="js/index.js"></script>

  <?php 
        if(isset($_POST['submit']))
        {
            $u=$_POST['username'];
            $p=$_POST['password'];

            $sql="select * from adminlogin where username='$u' && password='$p'";
            $q=mysqli_query($con,$sql);

            while($row=mysqli_fetch_array($q))
            {
              $_SESSION["admin"]=$row["username"];
  ?>
  <script>
      window.location="demo.php";
  </script>  
  <?php            
            }
        }
    ?>
</body>

</html>