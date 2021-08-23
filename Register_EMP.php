<html lang="en">
<head>
    <title>Employee Registration</title>

    <link rel="stylesheet" type="text/css" href="style.css"/>

    <?php include ('EmpRegCheck.php');?>
    <style>
    
        input {
            font-size: 18px;
        } 

        table {
            width: 100%;
        }

        td {
            margin: 5px;
            padding: 15px;
        }

        .inputtab {
            width: 100%;
        }

        textarea {
            width: 100%;
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
      background-color: #7FFFD4;
    }
    </style>
</head>
<body>

<script type="text/javascript">

    function submit()
    {
      document.getElementById("Emp_Reg").reset();
    }
    function validateForm()
    {
      var name = document.Emp_Reg.name.value;
      var fname = document.Emp_Reg.fname.value;
      var mname = document.Emp_Reg.mname.value;
      var address = document.Emp_Reg.address.value;
      var paddress = document.Emp_Reg.paddress.value;
      var email = document.Emp_Reg.email.value;
      var pass = document.Emp_Reg.pass.value;
      var cpass = document.Emp_Reg.cpass.value;
      var radiobutton = document.Emp_Reg.radiobutton.value;
      var dob = document.Emp_Reg.dob.value;
      var x = document.Emp_Reg.x.value;
      var uid = document.Emp_Reg.uid.value;
      var es = document.Emp_Reg.es.value;
      var phone = document.Emp_Reg.phone.value;
      var nid = document.Emp_Reg.nid.value;
      var picture = document.Emp_Reg.picture.value;

      var myDate = new Date(dob);
      var today = new Date();

      if(name == "")
      {
        document.Emp_Reg.name.focus();
        document.getElementById("errorBox").innerHTML = "Name is required, Enter Full Name";
        return false;
      }
      if(fname == "")
      {
        document.Emp_Reg.fname.focus();
        document.getElementById("errorBox").innerHTML = "Father Name is required, Enter Full Name";
        return false;
      }
      if(mname == "")
      {
        document.Emp_Reg.mname.focus();
        document.getElementById("errorBox").innerHTML = "Mother Name is required, Enter Full Name";
        return false;
      }
      if(email == "")
      {
        document.Emp_Reg.email.focus();
        document.getElementById("errorBox").innerHTML = "Email is required";
        return false;
      }
      if(address == "")
      {
        document.Emp_Reg.address.focus();
        document.getElementById("errorBox").innerHTML = "Address is required!!";
        return false;
      }
      if(paddress == "")
      {
        document.Emp_Reg.paddress.focus();
        document.getElementById("errorBox").innerHTML = "Address is required!!";
        return false;
      }
      if(pass == "")
      {
        document.Emp_Reg.pass.focus();
        document.getElementById("errorBox").innerHTML = "Password is required!!";
        return false;
      }
      if(cpass == "")
      {
        document.Emp_Reg.cpass.focus();
        document.getElementById("errorBox").innerHTML = "Retype Password!!";
        return false;
      }
      if(x == "")
      {
        document.Emp_Reg.x.focus();
        document.getElementById("errorBox").innerHTML = "Enter Your Blood Group";
        return false;
      }
      if(document.Emp_Reg.radiobutton[0].checked == false && document.Emp_Reg.radiobutton[1].checked == false && document.Emp_Reg.radiobutton[2].checked == false)
      {
        document.Emp_Reg.radiobutton.value;
        document.getElementById("errorBox").innerHTML = "Gender must be selected";
        return false;
      }
      if(dob == "")
      {
        document.Emp_Reg.dob.focus();
        document.getElementById("errorBox").innerHTML = "Select your Date Of Birth";
        return false;
      }
      else if(myDate > Date.now())
      {
        document.Emp_Reg.dob.focus();
        document.getElementById("errorBox").innerHTML = "Future date cannot be selected";
        return false;
      }
      if(phone == "")
      {
        document.Emp_Reg.phone.focus();
        document.getElementById("errorBox").innerHTML = "Phone is required";
        return false;
      }
      if(uid == "")
      {
        document.Emp_Reg.uid.focus();
        document.getElementById("errorBox").innerHTML = "User Id is required";
        return false;
      }
      if(nid == "")
      {
        document.Emp_Reg.nid.focus();
        document.getElementById("errorBox").innerHTML = "NID is required";
        return false;
      }
      if(es == "")
      {
        document.Emp_Reg.es.focus();
        document.getElementById("errorBox").innerHTML = "Educational Status is required";
        return false;
      }
      if(picture.files.length == 0)
      {
        document.Emp_Reg.picture.focus();
        document.getElementById("errorBox").innerHTML = "Select Your Image";
        return false;
      }

      //Alert
      if(name != '' && mname  != '' && fname  != '' && pass  != '' && cpass != '' && email != '' && address != '' && paddress != '' && radiobutton != '' && dob != '' && nid != '' && phone != '' && es != '' && x != '' && uid != '' && picture != '')
      {
        alert( "Submitting Registerform? ");
      }
    }
    function checkName()
    {
      var nameRegex = /^[a-zA-Z-. ?!]{5,}$/;

      if(document.getElementById("name").value == "")
      {
        document.Emp_Reg.name.focus();
        document.getElementById("errorBox").innerHTML = "Name is required, Enter Full Name";
        return false;
      }
      else if(!document.getElementById("name").value.match(nameRegex))
      {
        document.Emp_Reg.name.focus();
        document.getElementById("errorBox").innerHTML = "At least five words and can only contain letters,period,dash";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkMName()
    {
      var mnameRegex = /^[a-zA-Z-. ?!]{5,}$/;

      if(document.getElementById("mname").value == "")
      {
        document.Emp_Reg.mname.focus();
        document.getElementById("errorBox").innerHTML = "Mother Name is required, Enter Full Name";
        return false;
      }
      else if(!document.getElementById("mname").value.match(mnameRegex))
      {
        document.Emp_Reg.mname.focus();
        document.getElementById("errorBox").innerHTML = "At least five words and can only contain letters,period,dash";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkFName()
    {
      var fnameRegex = /^[a-zA-Z-. ?!]{5,}$/;

      if(document.getElementById("fname").value == "")
      {
        document.Emp_Reg.fname.focus();
        document.getElementById("errorBox").innerHTML = "Father Name is required, Enter Full Name";
        return false;
      }
      else if(!document.getElementById("fname").value.match(fnameRegex))
      {
        document.Emp_Reg.fname.focus();
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
        document.Emp_Reg.email.focus();
        document.getElementById("errorBox").innerHTML = "Email is required";
        return false;
      }
      else if(!document.getElementById("email").value.match(emailRegex))
      {
        document.Emp_Reg.email.focus();
        document.getElementById("errorBox").innerHTML = "Invalid email format. Format: example@something.com";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkAddress()
    {
      var addressRegex = /^[a-zA-Z0-9-., ?!]{6,}$/;

      if(document.getElementById("address").value == "")
      {
        document.Emp_Reg.address.focus();
        document.getElementById("errorBox").innerHTML = "Address is required!!";
        return false;
      }
      else if(!document.getElementById("address").value.match(addressRegex))
      {
        document.Emp_Reg.address.focus();
        document.getElementById("errorBox").innerHTML = "At least six words!!";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkPAddress()
    {
      var paddressRegex = /^[a-zA-Z0-9-., ?!]{6,}$/;

      if(document.getElementById("paddress").value == "")
      {
        document.Emp_Reg.paddress.focus();
        document.getElementById("errorBox").innerHTML = "Address is required!!";
        return false;
      }
      else if(!document.getElementById("paddress").value.match(paddressRegex))
      {
        document.Emp_Reg.paddress.focus();
        document.getElementById("errorBox").innerHTML = "At least six words!!";
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
        document.Emp_Reg.pass.focus();
        document.getElementById("errorBox").innerHTML = "Password is required!!";
        return false;
      }
      else if(!document.getElementById("pass").value.match(passRegex))
      {
        document.Emp_Reg.pass.focus();
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
        document.Emp_Reg.cpass.focus();
        document.getElementById("errorBox").innerHTML = "Retype Password!!";
        return false;
      }
      else if(document.getElementById("cpass").value != document.getElementById("pass").value)
      {
        document.Emp_Reg.cpass.focus();
        document.getElementById("errorBox").innerHTML = "Both Password must be same";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkBg()
    {
      if(document.getElementById("x").value == "")
      {
        document.Emp_Reg.x.focus();
        document.getElementById("errorBox").innerHTML = "Enter Your Blood Group (Eg. A+, A-, B+, B-, O+, O-, AB+, AB-)";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkUid()
    {
      if(document.getElementById("uid").value == "")
      {
        document.Emp_Reg.uid.focus();
        document.getElementById("errorBox").innerHTML = "Enter Your User Id";
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
        document.Emp_Reg.phone.focus();
        document.getElementById("errorBox").innerHTML = "Phone is required!!";
        return false;
      }
      else if(!document.getElementById("phone").value.match(phoneRegex))
      {
        document.Emp_Reg.phone.focus();
        document.getElementById("errorBox").innerHTML = "At least 11 words!!";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkNID()
    {
      var nidRegex = /^[a-zA-Z0-9-., ?!]{5,}$/;

      if(document.getElementById("nid").value == "")
      {
        document.Emp_Reg.nid.focus();
        document.getElementById("errorBox").innerHTML = "NID is required!!";
        return false;
      }
      else if(!document.getElementById("nid").value.match(nidRegex))
      {
        document.Emp_Reg.nid.focus();
        document.getElementById("errorBox").innerHTML = "At least 5 words!!";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkEs()
    {
      if(document.getElementById("es").value == "")
      {
        document.Emp_Reg.es.focus();
        document.getElementById("errorBox").innerHTML = "Enter Your Educational Status";
        return false;
      }
      else
      {
        document.getElementById("errorBox").innerHTML = "";
      }
    }
    function checkPicture()
    {
      var picture = document.Emp_Reg.picture.value;
      var file_ext = /(\.jpg|\.jpeg|\.bmp|\.gif|\.png)$/i;
      var size = document.getElementById("picture").files[0];

      //Image
      if(picture == "")
      {
        document.Emp_Reg.picture.focus();
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

<?php

$name = $mname = $fname = $email = $address = $paddress = $pass = $cpass = $dob = $radiobutton = $uid = $x = $es = $phone = $nid = $bg = $picture ="";

$ername = $ermname = $erfname = $eremail = $eradd = $erpadd = $erdob = $ergender = $erpass = $ercpass = $eruid = $erbg = $erphone = $ernid = $eres ="";

$error = $message = "";
$check = 1;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
      if(empty($_POST["uid"]))  
      {  
        $eruid = "Enter User ID";
        $check = 0;
      }
      //Name
      if(empty($_POST["name"]))  
      {  
        $ername = "Enter Name";
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
      //Mother Name
      if(empty($_POST["mname"]))  
      {  
        $ermname = "Enter Mother Name";
        $check = 0;
      }
      else if(preg_match("/^[0-9]/", ($_POST["mname"])))
      {
        $ermname = "Letters Only";
        $check = 0;
      } 
      else if(!preg_match("/^[a-zA-Z-. ?!]{2,}$/",($_POST["mname"])))
      {
        $ermname = "At least two words and can only contain letters,period,dash";
        $check = 0;
      }
      //Father Name
      if(empty($_POST["fname"]))  
      {  
        $erfname = "Enter Father Name";
        $check = 0;
      }
      else if(preg_match("/^[0-9]/", ($_POST["fname"])))
      {
        $erfname = "Letters Only";
        $check = 0;
      } 
      else if(!preg_match("/^[a-zA-Z-. ?!]{2,}$/",($_POST["fname"])))
      {
        $erfname = "At least two words and can only contain letters,period,dash";
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
      //NID
      if(empty($_POST["nid"]))
      {
        $ernid = "NID can't be empty!";
        $check = 0;
      }
      else if (strlen($_POST["nid"]) <= 4) 
      {
        $ernid = "Your NID Must Contain At Least 5 Characters!";
        $check = 0;
      }
      //Date Of Birth
      if(empty($_POST["dob"]))
      {
        $erdob = "Must be valid numbers(dd:1-31,mm: 1-12,yyyy: 1950-2000)";
        $check = 0;
      }
      //Gender
      if(!isset($_POST["radiobutton"]))
      {
        $ergender = "At least one of the Gender must be selected";
        $check = 0;
      }

      //Address
      if(empty($_POST["address"]))
      {
        $eradd = "Address is requied";
        $check = 0;
      }
      else if(preg_match("/^[0-9]/", ($_POST["address"])))
      {
        $eradd = "Letters Only";
        $check = 0;
      } 
      else if(!preg_match("/^[a-zA-Z0-9-., ?!]{6,}$/",($_POST["address"])))
      {
        $eradd = "At least six words";
        $check = 0;
      }
      //PAddress
      if(empty($_POST["paddress"]))
      {
        $erpadd = "Address is requied";
        $check = 0;
      }
      else if(preg_match("/^[0-9]/", ($_POST["address"])))
      {
        $erpadd = "Letters Only";
        $check = 0;
      } 
      else if(!preg_match("/^[a-zA-Z0-9-., ?!]{6,}$/",($_POST["address"])))
      {
        $erpadd = "At least six words";
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
      //Blood Group
      if(empty($_POST["x"]))  
      {  
        $erbg = "Enter Blood Group";
        $check = 0;
      }
      //E Status
      if(empty($_POST["es"]))  
      {  
        $eres = "Enter Educational Status";
        $check = 0;
      }
      else if(preg_match("/^[0-9]/", ($_POST["es"])))
      {
        $eres = "Letters Only";
        $check = 0;
      } 
      else if(!preg_match("/^[a-zA-Z-. ?!]{2,}$/",($_POST["es"])))
      {
        $eres = "At least two words and can only contain letters,period,dash";
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
        <a href="Home.php"><h1>Super Shop</h1></a>
        </div>
    </section>

    <section id="navbar">
        <div class="container">
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="Add_Product.php">Product</a></li>
            <li><a href="Register_EMP.php">Employee</a></li>
            <li><a href="Show_EMP.php">Employee Info</a></li>
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
        <form name="Emp_Reg" method="post" style="padding-top: 10px" enctype="multipart/form-data">
                
                    <center>
                    <table border="2">

                        <tr>
                            <th>Name <span class="error"></th>
                            <td> <input type="text" name="name" class="inputtab" id="name" onkeyup="checkName()" onblur="checkName()" value="<?php echo $name;?>" > <span class="error"><?php echo "&nbsp&nbsp"?><?php echo $ername;?> </span><br> </td>
                        </tr>

                        <tr>
                            <th>Father's Name <span class="error"></th>
                            <td> <input type="text" name="fname" class="inputtab" id="fname" onkeyup="checkFName()" onblur="checkFName()" value="<?php echo $fname;?>" ><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erfname;?> </span><br> </td>
                        </tr>

                        <tr>
                            <th>Mother's Name <span class="error"></th>
                            <td> <input type="text" name="mname" class="inputtab" id="mname" onkeyup="checkMName()" onblur="checkMName()" value="<?php echo $mname;?>" ><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $ermname;?> </span><br> </td>
                        </tr>

                        <tr>
                            <th>Email <span class="error"></th>
                            <td> <input type="email" name="email" class="inputtab" id="email" onkeyup="checkEmail()" onblur="checkEmail()" value="<?php echo $email;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $eremail;?></span><br> </td>
                        </tr>

                        <tr>
                            <th>Phone <span class="error"></th>
                            <td> <input type="text" name="phone" class="inputtab" id="phone" onkeyup="checkPhone()" onblur="checkPhone()" value="<?php echo $phone;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erphone;?></span><br>  </td>
                        </tr>

                        <tr>
                            <th>NID/BC <span class="error"></th>
                            <td> <input type="text" name="nid" class="inputtab" id="nid" onkeyup="checkNID()" onblur="checkNID()" value="<?php echo $nid;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $ernid;?></span><br> </td>
                        </tr>

                        <tr>
                            <th>Gender </th> <td>
                            <input type="radio" name="radiobutton"<?php if(isset($radiobutton) && $radiobutton=="male") echo "checked";?> value="Male">Male

                            <input type="radio" name="radiobutton" <?php if (isset($radiobutton) && $radiobutton=="female") echo "checked";?> value="Female">Female  

                            <input type="radio" name="radiobutton" <?php if (isset($radiobutton) && $radiobutton=="other") echo "checked";?> value="Other">Other
                            <br>  
                            <span class="error"><?php echo "&nbsp&nbsp"?><?php echo $ergender;?></span ></br>
                            </td>
                        </tr>

                        <tr>
                            <th> Date of birth  <span class="error"></th>
                            <td> 
                                <input type="date" name="dob" value="<?php echo $dob;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erdob;?></span><br></br>
                            </td>
                        </tr>

                        <tr>
                            <th> Blood Group  <span class="error"></th>
                            <td> <input type="text" name="x" class="inputtab" id="x" onkeyup="checkBg()" onblur="checkBg()" value="<?php echo $x;?>" > <span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erbg;?> </span><br></td>
                        </tr>

                        <tr>
                            <th> Educational Status <span class="error"></th>
                            <td> <input type="text" name="es" class="inputtab" id="es" onkeyup="checkEs()" onblur="checkEs()" value="<?php echo $es;?>" > <span class="error"><?php echo "&nbsp&nbsp"?><?php echo $eres;?> </span><br></td>
                        </tr>

                        <tr>
                            <th>Present Address <span class="error"></th>
                            <td> <input type="text" name="address" class="inputtab" id="address" onkeyup="checkAddress()" onblur="checkAddress()" value="<?php echo $address;?>" > <span class="error"><?php echo "&nbsp&nbsp"?><?php echo $eradd;?> </span><br> </td>
                        </tr>

                        <tr>
                            <th>Permanent Address <span class="error"></th>
                            <td> <input type="text" name="paddress" class="inputtab" id="paddress" onkeyup="checkPAddress()" onblur="checkPAddress()" value="<?php echo $paddress;?>" > <span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erpadd;?> </span><br> </td>
                        </tr>

                        <tr>
                            <th>User ID <span class="error"></th>
                            <td> <input type="text" name="uid" class="inputtab" id="uid" onkeyup="checkUid()" onblur="checkUid()" value="<?php echo $uid;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $eruid;?></span><br> </td>
                        </tr>

                        <tr>
                            <th>Password <span class="error"></th>
                            <td> <input type="password" name="pass" class="inputtab" id="pass" onkeyup="checkPassword()" onblur="checkPassword()" value="<?php echo $pass;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erpass;?></span><br> </td>
                        </tr>

                        <tr>
                            <th>Confirm Password <span class="error"></th>
                            <td> <input type="password" name="cpass" class="inputtab" id="cpass" onkeyup="checkCPassword()" onblur="checkCPassword()" value="<?php echo $cpass;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $ercpass;?></span><br> </td>
                        </tr>

                        <tr>
                        <th>Picture <span class="error"></th>
                        <td><input type="file" name="picture" id="picture" onkeyup="checkPicture()" onblur="checkPicture()" value="<?php echo $picture;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $error;?></span><br></td>
                        </tr>

                    </table>

                    <br/>
                    <input type="submit" name="submit" onClick="return validateForm();" value="Submit">
                    </center>
                </fieldset>
            </form>

        </div>
    </section>

    <section id="main-footer">
        <div class="container">
            Copyright &#169 2021 Tasnim Haider
        </div>
    </section>
    
</body>
</html>