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
<body style="background-color:red;text-align: center;">

       
        <div class="grid_10">
            <div class="box round first" style="margin-left: 200px;">
                <h2>Add Products</h2>
                <div class="block">
                    <form action="" method="post" enctype="multipart/form-data" name="f2">
                        <table class="table">
                            <tr>
                                <td>Product Name: </td>
                                <td><input type="text" name="pname" class="form-control"></td>
                            </tr>
                            
                            <tr>
                                <td>Product Price: </td>
                                <td><input type="text" name="pprice" class="form-control"></td>
                            </tr>
                           
                            
                            <tr>
                                <td>Product Category: </td>
                                <td><select name="cat" class="form-control">
                                    <option value="">select</option>
                                    <option>Magazines</option>
                                    <option>Newspapers</option>
                                     <option>Articles</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Product subcategory: </td>
                                <td>
                                    <input type="checkbox" name="check_list[]" value="education">&nbsp;&nbsp;education&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="travel">&nbsp;&nbsp;travel&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="lifestyle">&nbsp;&nbsp;lifestyle&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="business" >&nbsp;&nbsp;business&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="entertainment">&nbsp;&nbsp;entertainment&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="news" >&nbsp;&nbsp;news&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="fashion">&nbsp;&nbsp;fashion&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="science" >&nbsp;&nbsp;science&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="technology">&nbsp;&nbsp;technology&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="health">&nbsp;&nbsp;health&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="sports" >&nbsp;&nbsp;sports&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="children">&nbsp;&nbsp;children&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="culture">&nbsp;&nbsp;culture&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="art" >&nbsp;&nbsp;art&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="check_list[]" value="cooking" >&nbsp;&nbsp;cooking&nbsp;&nbsp;&nbsp;&nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>Product Image: </td>
                                <td><input type="file" name="pimage" class="form-control"></td>
                            </tr>
                            <tr>
                            <td>Product Issue: </td>
                                <td><input type="date" name="pdate" class="form-control"></td>
                           
                            </tr>
                            <tr>
                                <td>Product Details: </td>
                                <td><textarea name="pdet" cols="30" rows="10" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                            <td>Language: </td>
                                <td>
                                <select name="lang" class="form-control">
                                <option value="">select</option>
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
                            
                           
                              $sql="insert into mag (name,price,category,det,subcat,lan,date,image) values('$n','$p','$c','$d','$chk','$l','$i','$fm')";
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
                    