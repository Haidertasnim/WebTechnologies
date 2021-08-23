<html lang="en">
<head>
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
      background-color: #FAF0E6;
    }
    </style>

</head>
<body>

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


<fieldset style="width: 1000px">
<legend class="text"><b>LOGIN</b></legend>
<form name="login" action="DB_Login.php" method="POST">

  <center><table><div id="errorBox"></div></table></center>

<center><h2>Enter Username and Password</h2></center>

<center><input type="text" name="userid" placeholder="User ID / Email Address"><br>
<br>

<input type="password" name="userpassword" placeholder="User password"><br>
<br>

<button type="submit" name="login" style="width: 100px"><b>Login</button>

</fieldset>
</form>

    <section id="main-footer">
        <div class="container">
            Copyright &#169 2021 Tasnim Haider
        </div>
    </section>
    
</body>
</html>
