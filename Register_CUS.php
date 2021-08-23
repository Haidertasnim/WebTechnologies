<html lang="en">
<head>
    <title>Customer Registration</title>

    <link rel="stylesheet" type="text/css" href="style.css"/>
    
    <?php include ('CusRegCheck.php');?>
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
      background-color: #C0C0C0;
    }
    </style>

<script type="text/javascript">

    function submit()
    {
      document.getElementById("Cus_Reg").reset();
    }
    function validateForm()
    {
      var name = document.Cus_Reg.name.value;
      var email = document.Cus_Reg.email.value;
      var pass = document.Cus_Reg.pass.value;
      var cpass = document.Cus_Reg.cpass.value;
      var phone = document.Cus_Reg.phone.value;
      var picture = document.Cus_Reg.picture.value;
      

      if(name == "")
      {
        document.Cus_Reg.name.focus();
        document.getElementById("errorBox").innerHTML = "Name is required, Enter Full Name";
        return false;
      }
      if(email == "")
      {
        document.Cus_Reg.email.focus();
        document.getElementById("errorBox").innerHTML = "Email is required";
        return false;
      }
      if(phone == "")
      {
        document.Cus_Reg.phone.focus();
        document.getElementById("errorBox").innerHTML = "Phone is required";
        return false;
      }
      if(pass == "")
      {
        document.Cus_Reg.pass.focus();
        document.getElementById("errorBox").innerHTML = "Password is required!!";
        return false;
      }
      if(cpass == "")
      {
        document.Cus_Reg.cpass.focus();
        document.getElementById("errorBox").innerHTML = "Retype Password!!";
        return false;
      }
      if(picture.files.length == 0)
      {
        document.Cus_Reg.picture.focus();
        document.getElementById("errorBox").innerHTML = "Select Your Image";
        return false;
      }

      //Alert
      if(name != '' && pass  != '' && cpass != '' && email != '' && picture != '')
      {
        alert( "Submitting Registerform? ");
      }
    }

    function checkName()
    {
      var nameRegex = /^[a-zA-Z-. ?!]{5,}$/;

      if(document.getElementById("name").value == "")
      {
        document.Cus_Reg.name.focus();
        document.getElementById("errorBox").innerHTML = "Name is required, Enter Full Name";
        return false;
      }
      else if(!document.getElementById("name").value.match(nameRegex))
      {
        document.Cus_Reg.name.focus();
        document.getElementById("errorBox").innerHTML = "At least five words and can only contain letters,period,dash";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkEmail()
    {
      var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;

      if(document.getElementById("email").value == "")
      {
        document.Cus_Reg.email.focus();
        document.getElementById("errorBox").innerHTML = "Email is required";
        return false;
      }
      else if(!document.getElementById("email").value.match(emailRegex))
      {
        document.Cus_Reg.email.focus();
        document.getElementById("errorBox").innerHTML = "Invalid email format. Format: example@something.com";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    
    function checkPassword()
    {
      var passRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;

      if(document.getElementById("pass").value == "")
      {
        document.Cus_Reg.pass.focus();
        document.getElementById("errorBox").innerHTML = "Password is required!!";
        return false;
      }
      else if(!document.getElementById("pass").value.match(passRegex))
      {
        document.Cus_Reg.pass.focus();
        document.getElementById("errorBox").innerHTML = "Your Password Must Contain At Least one uppercase, lowercase letter and special character!";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkCPassword()
    {
      if(document.getElementById("cpass").value == "")
      {
        document.Cus_Reg.cpass.focus();
        document.getElementById("errorBox").innerHTML = "Retype Password!!";
        return false;
      }
      else if(document.getElementById("cpass").value != document.getElementById("pass").value)
      {
        document.Cus_Reg.cpass.focus();
        document.getElementById("errorBox").innerHTML = "Both Password must be same";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkPhone()
    {
      var phoneRegex = /^[a-zA-Z0-9-., ?!]{11,}$/;

      if(document.getElementById("phone").value == "")
      {
        document.Cus_Reg.phone.focus();
        document.getElementById("errorBox").innerHTML = "Phone is required!!";
        return false;
      }
      else if(!document.getElementById("phone").value.match(phoneRegex))
      {
        document.Cus_Reg.phone.focus();
        document.getElementById("errorBox").innerHTML = "At least 11 words!!";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkPicture()
    {
      var picture = document.Cus_Reg.picture.value;
      var file_ext = /(\.jpg|\.jpeg|\.bmp|\.gif|\.png)$/i;
      var size = document.getElementById("picture").files[0];

      //Image
      if(picture == "")
      {
        document.Cus_Reg.picture.focus();
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

$name = $email = $pass = $cpass = $phone = $picture ="";
$ername = $eremail = $erpass = $ercpass = $erphone ="";
$error = $message = "";
$check = 1;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
      //Name
      if(empty($_POST["name"]))  
      {  
        $ername = "Enter Cumtomer Name";
        $check = 0;
      }
      else if(preg_match("/^[0-9]/", ($_POST["name"])))
      {
        $ername = "Letters Only";
        $check = 0;
      } 
      else if(!preg_match("/^[a-zA-Z-. ?!]{2,}$/",($_POST["name"])))
      {
        $ername = "At least two words and can only contain letters,period,dash";
        $check = 0;
      }
      //Email
      if(empty($_POST["email"]))
      {
        $eremail = "Email is required";
        $check = 0;
      }
      else if(!filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL))
      {
        $eremail = "Invalid email format. Format: example@something.com";
        $check = 0;
      }
      //Password
      if(empty($_POST["pass"]) && empty($_POST["cpass"]))
      {
        $erpass = "Password can't be empty!";
        $check = 0;
      }
      else if (strlen($_POST["pass"]) <= 7) 
      {
        $erpass = "Your Password Must Contain At Least 8 Characters!";
        $check = 0;
      }
      else if(!preg_match("#[a-zA-Z0-9-. ?!]+#",($_POST["pass"]))) 
      {
        $erpass = "Your Password Must Contain At Least one Number or Character!";
        $check = 0;
      }
      else if(!preg_match('/[$%@#]/', ($_POST["pass"])))
      {
        $erpass = "Your Password Must Contain At Least one special character(@,#,$,%)!";
        $check = 0;
      }
      else if(($_POST["pass"]) != ($_POST["cpass"]))
      {
        $ercpass = "Password and Confirm password must be same!";
        $check = 0;
      }
      //Phone
      if(empty($_POST["phone"]))
      {
        $erphone = "Phone can't be empty!";
        $check = 0;
      }
      else if (strlen($_POST["phone"]) <= 10) 
      {
        $erphone = "Your Phone Must Contain At Least 11 Characters!";
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
            <center><legend><h1>Membership Registration</h1></center></legend>
            <center><table><div id="errorBox"></div></table></center>
        <form name="Cus_Reg" method="post" style="padding-top: 10px" enctype="multipart/form-data">
                    
                    <center>
                    <table border="2">
                        <tr>
                        <th>Name : <span class="error"></th>
                        <td><input type="text" name="name" class="inputtab" id="name" onkeyup="checkName()" onblur="checkName()" value="<?php echo $name;?>" > <span class="error"><?php echo "&nbsp&nbsp"?><?php echo $ername;?> </span><br></td>
                        </tr>

                        <tr>
                        <th>Email : <span class="error"></th>
                        <td><input type="email" class="inputtab" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()" value="<?php echo $email;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $eremail;?></span><br></td>
                        </tr>

                        <tr>
                        <th>Phone : <span class="error"></th>
                        <td><input type="number" class="inputtab" name="phone" id="phone" onkeyup="checkPhone()" onblur="checkPhone()" value="<?php echo $phone;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erphone;?></span><br></td>
                        </tr>

                        <tr>
                        <th>Password : <span class="error"></th>
                        <td><input type="password" class="inputtab" name="pass" id="pass" onkeyup="checkPassword()" onblur="checkPassword()" value="<?php echo $pass;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erpass;?></span><br></td>
                        </tr>

                        <tr>
                        <th>Confirm password : <span class="error"></th>
                        <td><input type="password" class="inputtab" name="cpass" id="cpass" onkeyup="checkCPassword()" onblur="checkCPassword()" value="<?php echo $cpass;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $ercpass;?></span><br></td>
                        </tr>

                        <tr>
                        <th>Picture <span class="error"></th>
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
