<?php
    
    session_start();
    $uid=$_SESSION['uid'];
    
    $con=mysqli_connect("localhost","root","","db1");

    
    $rr="select * from users where uid='$uid'";
    $re=mysqli_query($con,$rr);
    $fetch=mysqli_fetch_array($re);

    $uu=$fetch['email'];


    if (isset($_POST['remove']))
    {
      $id=$_GET['id'];
      $v="UPDATE mag SET status='0' WHERE id='$id'";
      $ex=mysqli_query($con,$v);
    }

if (isset($_POST['checkout']))
{
  

  $f=$_POST['firstname'];
  $em=$_POST['email'];
  $a=$_POST['address'];
  $c=$_POST['city'];
  $so=$_POST['state'];
  $z=$_POST['zip'];
  $ccn=$_POST['cardname'];
  $ccd=$_POST['cardnumber'];
  $m=$_POST['expmonth'];
  $yt=$_POST['expyear'];
  $cv=$_POST['cvv'];

  if($uu==$em)
  {
  $insert="insert into checks(fname,email,address,city,state,zip,cardname,cardnumber,expmonth,expyear,cvv) values('$f','$em','$a','$c','$so','$z','$ccn','$ccd','$m','$yt','$cv')";

    $we=mysqli_query($con,$insert);

    $m="update mag SET status='0'";
    $ll=mysqli_query($con,$m);

    session_unset();
    header("location:homepage.php");
    
  }
  else
  {
    ?>
    <script type="text/javascript">
        alert("Your email address is incorrect!");
    </script>
    <?php
  }


  
}


    ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="images/gradient/logo1.png" type="image/x-icon">
  <link rel="icon" href="images/gradient/logo1.png" type="image/x-icon">

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

.btn {
  
  color: white;
  padding: 8px;
  margin: 10px 0;
  border: none;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background: red;
}
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #F0F8FF;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}



a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<div class="header">
<img src="images/gradient/logo1.png" alt="" width="60px" height="60px">&nbsp;&nbsp; <font style="font-size:30px; color:blue;font-family:Pacific;"> MAGZWORLD</font></a>
				
</div>

<br><br>
  <div class="col-25">
    <div class="container">
     
        
        


      <?php 
        $sql="select * from mag where status='2'";
        $exe=mysqli_query($con,$sql);
        $i=0;
        ?>
        <h4><b>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <?php echo mysqli_affected_rows($con) ?></span>
          </b></h4>
          <table class="table">
       <tr>
        
        <th><center>PRODUCT</center></th> 
         <th>PRICE</th>
          <th><center>REMOVE</center></th>

        </tr>
          <?php
        while ($value=mysqli_fetch_array($exe)) 
        {
        ?>



      <tr>
        <td><?php echo $value['name'] ?></td>
        <td>$<?php echo $value['price'] ?></td>
        <form action="checkout.php?id=<?php echo $value['id'] ?>" method="post">
        <td><center><input type="submit" name="remove" value="remove" class="btn btn-danger"></center></td>
      </form>
      </tr>
      
      <?php } ?>
      </table>
      <?php
        $aa="select sum(price) as total from mag where status='2'";
        $exe1=mysqli_query($con,$aa);
        $row = mysqli_fetch_array($exe1); 
        $sum = $row['total'];
      ?>
      <hr>
      <p>Total <span class="price" style="color:black"><b><?php echo $sum ?></b></span></p>

    
    </div>
  </div>
</div>
<br>

<div class="col-75">
    <CENTER><h3><font color="green">CHECKOUT FORM</font></h3></CENTER>
    <div class="container">
      <form action="" method="post" name="fm" enctype="multipart/form-data">
        
        <div class="row">
          
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <center><input type="submit" value="Continue to checkout" class="btn btn-danger" name="checkout"></center>
      </form>
    </div>
  </div>

</body>
</html>
