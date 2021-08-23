<html lang="en">
<head>
    <title>Add Product</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <?php include ('Add_Product_Check.php');?>
    
    <style>
        input {
            font-size: 18px;
        }

        table {
            width: 100%;
        }

        .inputtab {
            width: 100%;
        }

        td {
            margin: 5px;
            padding: 15px;
        }

        fieldset {
            width:60%;
            margin:auto;
            overflow:hidden;
            margin-bottom:2%;
        }
        .error
    {
      color: RED;
    }
    .text
    {
      text-align: center;
    }
    #errorBox
    {
      color:#F00;
    }
    body
    {
      background-color: #FFF0F5;
    }
    </style>

<script type="text/javascript">

    function submit()
    {
      document.getElementById("Add_Product").reset();
    }
    function validateForm()
    {
      var pname = document.Add_Product.pname.value;
      var pprice = document.Add_Product.pprice.value;
      var numofproduct = document.Add_Product.numofproduct.value;
      var pbrand = document.Add_Product.pbrand.value;
      var picture = document.Add_Product.picture.value;
      

      if(pname == "")
      {
        document.Add_Product.pname.focus();
        document.getElementById("errorBox").innerHTML = "Name is required";
        return false;
      }
      if(pprice == "")
      {
        document.Add_Product.pprice.focus();
        document.getElementById("errorBox").innerHTML = "Price is required";
        return false;
      }
      if(numofproduct == "")
      {
        document.Add_Product.numofproduct.focus();
        document.getElementById("errorBox").innerHTML = "Quantity is required";
        return false;
      }
      if(pbrand == "")
      {
        document.Add_Product.pbrand.focus();
        document.getElementById("errorBox").innerHTML = "Brand is required!!";
        return false;
      }
      if(picture.files.length == 0)
      {
        document.Add_Product.picture.focus();
        document.getElementById("errorBox").innerHTML = "Select Your Image";
        return false;
      }

      //Alert
      if(pname != '' && pprice  != '' && numofproduct != '' && pbrand != '' && picture != '')
      {
        alert( "Add Product? ");
      }
    }

    function checkName()
    {
      var nameRegex = /^[a-zA-Z-. ?!]{5,}$/;

      if(document.getElementById("pname").value == "")
      {
        document.Add_Product.pname.focus();
        document.getElementById("errorBox").innerHTML = "Name is required, Enter Full Name";
        return false;
      }
      else if(!document.getElementById("pname").value.match(nameRegex))
      {
        document.Add_Product.pname.focus();
        document.getElementById("errorBox").innerHTML = "At least five words and can only contain letters,period,dash";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    
    function checkPrice()
    {
      var priceRegex = /^[a-zA-Z0-9-., ?!]{1,}$/;

      if(document.getElementById("pprice").value == "")
      {
        document.Add_Product.pprice.focus();
        document.getElementById("errorBox").innerHTML = "Price is required!!";
        return false;
      }
      else if(!document.getElementById("pprice").value.match(priceRegex))
      {
        document.Add_Product.pprice.focus();
        document.getElementById("errorBox").innerHTML = "At least 1 word!!";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkQn()
    {
      var qnRegex = /^[a-zA-Z0-9-., ?!]{1,}$/;

      if(document.getElementById("numofproduct").value == "")
      {
        document.Add_Product.numofproduct.focus();
        document.getElementById("errorBox").innerHTML = "Quantity is required!!";
        return false;
      }
      else if(!document.getElementById("numofproduct").value.match(qnRegex))
      {
        document.Add_Product.numofproduct.focus();
        document.getElementById("errorBox").innerHTML = "At least 1 word!!";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkBrand()
    {
      var brandRegex = /^[a-zA-Z-. ?!]{5,}$/;

      if(document.getElementById("pbrand").value == "")
      {
        document.Add_Product.pbrand.focus();
        document.getElementById("errorBox").innerHTML = "Brand is required";
        return false;
      }
      else if(!document.getElementById("pbrand").value.match(brandRegex))
      {
        document.Add_Product.pbrand.focus();
        document.getElementById("errorBox").innerHTML = "At least five words and can only contain letters,period,dash";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkPicture()
    {
      var picture = document.Add_Product.picture.value;
      var file_ext = /(\.jpg|\.jpeg|\.bmp|\.gif|\.png)$/i;
      var size = document.getElementById("picture").files[0];

      //Image
      if(picture == "")
      {
        document.Add_Product.picture.focus();
        document.getElementById("errorBox").innerHTML = "Image is required";
        return false;
      }
      else if(!file_ext.exec(picture))
      {
        document.getElementById("errorBox").innerHTML = "Extension not allowed, please choose a JPEG or PNG or JPG file.";
        return false;
      }
      else if (size.size > 4194304)
      {
        document.getElementById("errorBox").innerHTML = "File size must not be greater than 4 MB";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    
  </script>

</head>
<body>

<?php

$pname = $pprice = $numofproduct = $pbrand = $pcetegory = $picture ="";
$erpname = $erpprice = $ernumofproduct = $erpbrand = $ercat ="";
$error = $message = "";
$check = 1;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
      if(empty($_POST["pcetegory"]))  
      {  
        $ercat = "Enter Product Category";
        $check = 0;
      }
      //Name
      if(empty($_POST["pname"]))  
      {  
        $erpname = "Enter Product Name";
        $check = 0;
      }
      else if(preg_match("/^[0-9]/", ($_POST["pname"])))
      {
        $erpname = "Letters Only";
        $check = 0;
      } 
      else if(!preg_match("/^[a-zA-Z-. ?!]{2,}$/",($_POST["pname"])))
      {
        $erpname = "At least two words and can only contain letters,period,dash";
        $check = 0;
      }
      //Price
      if(empty($_POST["pprice"]))
      {
        $erpprice = "Price can't be empty!";
        $check = 0;
      }
      else if (strlen($_POST["pprice"]) <= 0) 
      {
        $erpprice = "Price Must Contain At Least 1 Characters!";
        $check = 0;
      }
      //Available Quantity
      if(empty($_POST["numofproduct"]))
      {
        $ernumofproduct = "Available Quantity can't be empty!";
        $check = 0;
      }
      else if (strlen($_POST["numofproduct"]) <= 0) 
      {
        $ernumofproduct = "Available Quantity Must Contain At Least 1 Characters!";
        $check = 0;
      }
      //Brand
      if(empty($_POST["pbrand"]))  
      {  
        $erpbrand = "Enter Brand Name";
        $check = 0;
      }
      else if(preg_match("/^[0-9]/", ($_POST["pbrand"])))
      {
        $erpbrand = "Letters Only";
        $check = 0;
      } 
      else if(!preg_match("/^[a-zA-Z-. ?!]{2,}$/",($_POST["pbrand"])))
      {
        $erpbrand = "At least two words and can only contain letters,period,dash";
        $check = 0;
      }
      $target_dir = "image/";
      $target_file = $target_dir . basename($_FILES["picture"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

      if ($_FILES["picture"]["size"] > 4194304)
      {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }

      if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg")
      {
        move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
      }
      else
      {
        $error = "Select an Image";
        $check=0; 
      }

      if ($check==1)
      {
        registration();
        //echo "<meta http-equiv='refresh' content='0'>";
      }
} 
?>

<section id="main-header">
        <div class="container">
        <a href="Home.php"><h1 style="float: left;">Super Shop</h1></a>
        <a href="Show_All_Product.php"><h1 style="float: right;">Show All Products</h1></a>

        <form action="" method="post" style="float: right; margin-top: 15px;"></form>
        </div>
    </section>

    <section id="navbar">
        <div class="container">
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="Add_Product.php">Product</a></li>
            <li><a href="Register_EMP.php">Employee</a></li>
            <li><a href="Register_CUS.php">Customer</a></li>
            <li style="float: right;" ><a href="Login.php"><b>Login</a></li>
        </ul>
        </div>
    </section>

    <section id="registationform">
        <div class="container">

            <br><fieldset>
                <center><legend><h1>Product Information</h1></center></legend>
                <center><table><div id="errorBox"></div></table></center>
                <form name="Add_Product" method="post" style="padding-top: 10px" enctype="multipart/form-data">
                    
                    <center>
                    <table border="2">
                        
                        <tr>
                        <th>Product Cetegory<span class="error"></th>
                        <td><select id="cars" name="pcetegory"  class="inputtab" value="<?php echo $pcetegory;?>" > <span class="error"><?php echo "&nbsp&nbsp"?><?php echo $ercat;?> </span><br>>
                            <option selected hidden value=""> Select Cetegory </option>
                            <option value="Fruit"> Fruit </option>
                            <option value="Vegetable"> Vegetable </option>
                            <option value="Meat"> Meat </option>
                            <option value="Fish"> Fish </option>
                            <option value="Groceries"> Groceries </option>
                            <option value="Milk"> Milk </option>
                            <option value="Cook"> Cooking Essential </option>
                            </select></td>
                        </tr>

                        <tr>
                        <th>Product Name<span class="error"></th>
                        <td>
                            <input type="text" name="pname" class="inputtab" id="pname" onkeyup="checkName()" onblur="checkName()" value="<?php echo $pname;?>" > <span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erpname;?> </span><br>
                        </td>
                        </tr>
                        
                        <tr>
                        <th>Unit Price <span class="error"></th>
                        <td><input type="number" name="pprice" class="inputtab" id="pprice" onkeyup="checkPrice()" onblur="checkPrice()" value="<?php echo $pprice;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erpprice;?></span><br></td>
                        </tr>

                        <tr>
                        <th>Number of Product <span class="error"></th>
                        <td><input type="number" name="numofproduct" class="inputtab" id="numofproduct" onkeyup="checkQn()" onblur="checkQn()" value="<?php echo $numofproduct;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $ernumofproduct;?></span><br></td>
                        </tr>

                        <tr>
                        <th>Product Brand <span class="error"></th>
                        <td><input type="text" name="pbrand" class="inputtab" id="pbrand" onkeyup="checkBrand()" onblur="checkBrand()" value="<?php echo $pbrand;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erpbrand;?></span><br></td>
                        </tr>

                        <tr>
                        <th>Product Picture <span class="error"></th>
                        <td><input type="file" name="picture" id="picture" onkeyup="checkPicture()" onblur="checkPicture()" value="<?php echo $picture;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $error;?></span><br></td>
                        </tr>

                    </table>

                    <br/>
                    <input type="submit" name="submit" onClick="return validateForm();" value="Submit"/>
                    </center>
                </form>
            </fieldset>
        </div>
    </section>

    <section id="main-footer">
        <div class="container">
            Copyright &#169 2021 Tasnim Haider
        </div>
    </section>
    
</body>
</html>
