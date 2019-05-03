<?php 
    session_start();
    if($_SESSION["admin"]=="")
    {
?>
<script type="text/javascript">
    window.location="myadminlogin.php";
</script>
<?php
    }
    
    $connect=mysqli_connect("localhost","root","","db1");
    
    $sq="select * from mag";
    $w=mysqli_query($connect,$sq);

    include("header.php");
    echo "<br><br>";
    

   
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body style="background-color:red;";>

       
        <div class="grid_20">
            <div class="box round first">
                
                <div class="block">
                    <h3>Product details</h3>
                    
                    <form action="" method="post" enctype="multipart/form-data" name="f2">
                        <table class="table">
                            <tr>
                                <th>name</th>
                                <th>category</th>
                                <th>price</th>
                                <th>image</th>
                                <th>issue date</th>
                                <th>details</th>
                                <th>language</th>
                                <th>subcategory</th>
                                <th>Edit</th>
                            </tr>
                            <?php 
                                while($fetch=mysqli_fetch_array($w))
                                {
                            ?>
                            <tr>
                                <td><?php echo $fetch['name'] ?></td>
                                <td><?php echo $fetch['category'] ?></td>
                                <td><?php echo $fetch['price'] ?></td>
                                <td><img src="productimage/newspapers/<?php echo $fetch['image'] ?>"><img src="productimage/magazines/<?php echo $fetch['image'] ?>"><img src="productimage/articles/<?php echo $fetch['image'] ?>"></td>
                                <td><?php echo $fetch['date'] ?></td>
                                <td><?php echo $fetch['det'] ?></td>
                                <td><?php echo $fetch['lan'] ?></td>
                                <td><?php echo $fetch['subcat'] ?></td>
                                <td><a href="updatepdt.php?id=<?php echo $fetch['id'] ?>">edit</a></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </form>
                
                </div>
            </div>
       </div>     
<?php

    include "footer.php";       
?>
</body>
</html>
                    