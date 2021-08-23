<html lang="en">
<head>
    <title>ARAF Group</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <?php include('DB_Customer.php') ?>
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
    </style>
</head>
<body>
    <section id="main-header">
        <div class="container">
            
            <a href="index.php"><h1 style="float: left;">Super Shop</h1></a>
            <section style="float: right; margin-top: 17px;">
            <form action="">
                <input type="text" name="userid" placeholder="User ID / Email Address">
                <input type="password" name="userpassword" placeholder="User password">
                <input type="submit" value="Log in"/>
            </form>
            </section>
        </div>
    </section>

    <section id="registationform">
        <div class="container">
            <center><h1>Customer Registration System</h1></center>
            <fieldset>
                <legend>Membership Registration Form</legend>
                <form action="" method="post">
                    
                    <center>
                    <table border="2">
                        <tr>
                        <th>Name :</th>
                        <td><input type="text" name="cusname" class="inputtab" required/></td>
                        </tr>

                        <tr>
                        <th>Email :</th>
                        <td><input type="email" name="cusemail" class="inputtab" required/></td>
                        </tr>

                        <tr>
                        <th>Phone :</th>
                        <td><input type="text" name="cusphone" class="inputtab" required/></td>
                        </tr>

                        <tr>
                        <th>Password :</th>
                        <td><input type="password" name="cuspassword" class="inputtab" required/></td>
                        </tr>

                        <tr>
                        <th>Confirm password :</th>
                        <td><input type="password" name="againpassword" class="inputtab" required/></td>
                        </tr>

                    </table>

                    <?php echo $GLOBALS['confirmaton']; ?> 

                    <br/>
                    <input type="submit" name="submit" value="submit"/>
                    </center>
                </form>
            </fieldset>
        </div>
    </section>

    <section id="main-footer">
        <div class="container">
            Copyright &#169 2021 Atiya Khan
        </div>
    </section>
    
</body>
</html>