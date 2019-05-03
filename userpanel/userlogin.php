<?php 
    session_start();
    $con=mysqli_connect("localhost","root","","db1");

    if(isset($_POST['submit']))
     {
      $e=$_POST['email'];
      $p=$_POST['psw'];
      $m="select * from users where email='$e' && password='$p'";
      $exe=mysqli_query($con,$m);

      if(mysqli_num_rows($exe)>0)
      {
        $fetch=mysqli_fetch_array($exe);
        $_SESSION['uid']=$fetch['uid'];
        header("location:shop.php");
      }
      else
      {
        ?>
        <script>
          alert("Invalid User!!");
        </script>
        <?php
      }
    }

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="images/gradient/logo1.png" type="image/x-icon">
  <link rel="icon" href="images/gradient/logo1.png" type="image/x-icon">


<style>
body {font-family: Arial, Helvetica, sans-serif;background: url("images/m9.jpg");background-size: cover;}
form {border: 3px}

input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  
}
input[type=email] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 14px 0 5px 0;
}

img.avatar {
  width: 10%;
  border-radius: 20%;
}

.container {
  padding: 6px;
  text-align:center;
}

span.psw {
  
  padding-top: 16px;
}
.header {
  overflow: hidden;
  
  padding: 20px 10px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div class="header">
<img src="images/gradient/logo1.png" alt="" width="60px" height="60px">&nbsp;&nbsp; <font style="font-size:30px; color:blue;font-family:Pacific;"> MAGZWORLD</font></a>
				
</div>
<h2> <center>Login Form</center> </h2>

<form action="" method="post">
  <div class="imgcontainer">
    <img src="images/avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <center>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="email"><b>Email:</b></label>
    <td><input type="email" placeholder="Enter Email Id" name="email" required></td></center>
<br>
    <center><label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required></center>
        <br><br>
    <center><input type="submit" name="submit" value="submit" class="btn btn-success" style="padding: 14px 40px;width:20%;"></center>
    
  </div>
  </form>
  
  <div class="container" >
    <a href="user_reg.php">New User? Regiser</a>&nbsp;  &nbsp;&nbsp;
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  
</body>
</html>
