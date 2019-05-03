<?php 
    session_start();
    $id=$_GET['id'];
    if($_SESSION["admin"]=="")
    {
?>
<script type="text/javascript">
    window.location="myadminlogin.php";
</script>
<?php
    }
    
    $connect=mysqli_connect("localhost","root","","db1");
    $sv="select * from mag where id='$id'";
    $ru=mysqli_query($connect,$sv);
    
    include("header.php");
    echo "<br><br>";
    include "menu.php";

    
 
    
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

       
        <div class="grid_10">
            <div class="box round first">
                <h2>Update Products</h2>
                <div class="block">
                    <?php 
                        while ($fetch=mysqli_fetch_array($ru))
                        {
                            $ep=explode(",", $fetch['subcat']);
                     ?>   
                    <form action="" method="post" enctype="multipart/form-data" name="f2">
                        <table class="table">
                            <tr>
                                <td>Product Name: </td>
                                <td><input type="text" name="pname" class="form-control" value="<?php echo $fetch['name'] ?>"></td>
                            </tr>
                            
                            <tr>
                                <td>Product Price: </td>
                                <td><input type="text" name="pprice" class="form-control" value="<?php echo $fetch['price'] ?>"></td>
                            </tr>
                           
                            
                            <tr>
                                <td>Product Category: </td>
                                <td><select name="cat" class="form-control">
                                    <option value="<?php echo $fetch['category'] ?>"><?php echo $fetch['category'] ?></option>
                                    <option>Magazines</option>
                                    <option>Newspapers</option>
                                    <option>Articles</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Product subcategory: </td>
                                <td>
                                    <input type="checkbox" name="check_list[]" value="education" <?php if($ep[0]=="education" || $ep[1]=="education" || $ep[2]=="education") { ?> checked <?php } ?>>&nbsp;&nbsp;education&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="checkbox" name="check_list[]" value="travel" <?php if($ep[0]=="travel" || $ep[1]=="travel" || $ep[2]=="travel") { ?> checked <?php } ?>>&nbsp;&nbsp;travel&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="checkbox" name="check_list[]" value="lifestyle" <?php if($ep[0]=="lifestyle" || $ep[1]=="lifestyle" || $ep[2]=="lifestyle") { ?> checked <?php } ?>>&nbsp;&nbsp;lifestyle&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="checkbox" name="check_list[]" value="business" <?php if( $ep[0]=="business"||$ep[1]=="business" || $ep[2]=="business") { ?> checked <?php } ?>>&nbsp;&nbsp;business&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="checkbox" name="check_list[]" value="entertainment" <?php if($ep[0]=="entertainment" || $ep[1]=="entertainment" || $ep[2]=="entertainment") { ?> checked <?php } ?>>&nbsp;&nbsp;entertainment&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="checkbox" name="check_list[]" value="news"  <?php if($ep[0]=="news" || $ep[1]=="news" || $ep[2]=="news") { ?> checked <?php } ?>>&nbsp;&nbsp;news&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="checkbox" name="check_list[]" value="fashion" <?php if($ep[0]=="fashion" || $ep[1]=="fashion" || $ep[2]=="fashion") { ?> checked <?php } ?>>&nbsp;&nbsp;fashion&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="checkbox" name="check_list[]" value="science"  <?php if($ep[0]=="science" || $ep[1]=="science" || $ep[2]=="science") { ?> checked <?php } ?>>&nbsp;&nbsp;science&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="checkbox" name="check_list[]" value="technology"  <?php if($ep[0]=="technology" || $ep[1]=="technology" || $ep[2]=="technology") { ?> checked <?php } ?>>&nbsp;&nbsp;technology&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="checkbox" name="check_list[]" value="health" <?php if($ep[0]=="health" || $ep[1]=="health" || $ep[2]=="health") { ?> checked <?php } ?>>&nbsp;&nbsp;health&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="checkbox" name="check_list[]" value="sports"  <?php if($ep[0]=="sports" || $ep[1]=="sports" || $ep[2]=="sports") { ?> checked <?php } ?>>&nbsp;&nbsp;sports&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="checkbox" name="check_list[]" value="children" <?php if($ep[0]=="children" || $ep[1]=="children" || $ep[2]=="children") { ?> checked <?php } ?>>&nbsp;&nbsp;children&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="checkbox" name="check_list[]" value="culture" <?php if($ep[0]=="culture" || $ep[1]=="culture" || $ep[2]=="culture") { ?> checked <?php } ?>>&nbsp;&nbsp;culture&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="checkbox" name="check_list[]" value="art"  <?php if($ep[0]=="art" || $ep[1]=="art" || $ep[2]=="art") { ?> checked <?php } ?>>&nbsp;&nbsp;art&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                                    <input type="checkbox" name="check_list[]" value="cooking"  <?php if($ep[0]=="cooking" || $ep[1]=="cooking" || $ep[2]=="cooking") { ?> checked <?php } ?>>&nbsp;&nbsp;cooking&nbsp;&nbsp;&nbsp;&nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>Product Image: </td>
                                <td><input type="file" name="pimage" class="form-control">
                                    <img src="../admin/productimage/newspapers/<?php echo $fetch['image'] ?>">
                                    <img src="../admin/productimage/magazines/<?php echo $fetch['image'] ?>">
                                    <img src="../admin/productimage/articles/<?php echo $fetch['image'] ?>">
                                </td>
                            </tr>
                            <tr>
                            <td>Product Issue: </td>
                                <td><input type="date" name="pdate" class="form-control" value="<?php echo $fetch['date'] ?>"></td>
                           
                            </tr>
                            <tr>
                                <td>Product Details: </td>
                                <td><textarea name="pdet" cols="30" rows="10" class="form-control"><?php echo $fetch['det'] ?></textarea></td>
                            </tr>
                            <tr>
                            <td>Language: </td>
                                <td>
                                <select name="lang" class="form-control">
                                <option value="<?php echo $fetch['lan'] ?>"><?php echo $fetch['lan'] ?></option>
                                    <option>English</option>
                                    <option>Hindi</option>
                                    <option>Malayalam</option>
                                    <option>Tamil</option>
                                    <option>Telugu</option>
                                    <option>Gujarati</option>
                                     </select>
                                </td> 
                            </tr>
                            <tr>
                                
                               <td colspan="5" align="center"><input type="submit" name="upload" value="Upload"></td>
                               </tr>
                        </table>
                    </form>

                    <?php
                        } 
                       
                        if(isset($_POST['upload']))
                        {
                            
                            $v1=rand(1111,9999);
                            $v2=rand(1111,9999);
                            $v3=$v1.$v2;
                            $v3=md5($v3);

                            $fm=$_FILES['pimage']['name'];
                            $dst=move_uploaded_file($_FILES['pimage']['tmp_name'],"productimage/".$v3.$fm);

                            $n=$_POST['pname'];
                            $p=$_POST['pprice'];
                           
                            $c=$_POST['cat'];
                            $d=$_POST['pdet'];
                           
                            $i=$_POST['pdate'];
                            $l=$_POST['lang'];
                            $checkbox1=$_POST['check_list'];
                            $chk="";
                            
                                foreach($checkbox1 as $chk1){
                                   $chk .=$chk1.",";
                            }
                            
                           
                              $sql="update mag set(name,price,category,det,subcat,lan,date,image) values('$n','$p','$c','$d','$chk','$l','$i','$fm')";
                              $que=mysqli_query($connect,$sql);
                            
                              if(!$que)
                                  echo mysqli_error($connect);
                        }
                    ?>

                </div>
            </div>
            
<?php
    include "footer.php";       
?>
</body>
</html>
                    