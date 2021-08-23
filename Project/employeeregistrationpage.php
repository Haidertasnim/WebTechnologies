
<html lang="en">
<head>
    <title>ARAF Group</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <?php include('DB_Employee.php') ?>
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
    </style>
</head>
<body>
    <section id="main-header">
        <div class="container">
        <a href="index.php"><h1>Super Shop</h1></a>
        </div>
    </section>

    <section id="registationform">
        <div class="container">
            <center><h1>Employee Registration System</h1></center>
            <form action="" method="post">
                <fieldset>
                <legend>Employee Registration Form</legend>
                
                    <center>
                    <table border="2">

                        <tr>
                            <th>Name </th>
                            <td> <input type="text" name="ename" class="inputtab" required/> </td>
                        </tr>

                        <tr>
                            <th>Father's Name </th>
                            <td> <input type="text" name="efname" class="inputtab" required/> </td>
                        </tr>

                        <tr>
                            <th>Mother's Name </th>
                            <td> <input type="text" name="emname" class="inputtab" required/> </td>
                        </tr>

                        <tr>
                            <th>Email </th>
                            <td> <input type="email" name="eemail" class="inputtab" required/> </td>
                        </tr>

                        <tr>
                            <th>Phone </th>
                            <td> <input type="text" name="ephone" class="inputtab" required/>  </td>
                        </tr>

                        <tr>
                            <th>NID/BC </th>
                            <td> <input type="text" name="enid" class="inputtab" required/> </td>
                        </tr>

                        <tr>
                            <th>Gender </th> <td><input type="radio" name="gender" value="M">Male <input type="radio" name="gender" value="F">Female <input type="radio" name="gender" value="O">>Others</td>
                        </tr>

                        <tr>
                            <th> Date of birth  </th>
                            <td> <input type="date" name="dob" class="inputtab" required/> </td>
                        </tr>

                        <tr>
                            <th> Blood Group  </th>
                            <td>
                            <select id="cars" name="bg" class="inputtab">
                            <option selected hidden value=""> Selected </option>
                            <option value="A+"> A+ </option>
                            <option value="A-"> A- </option>
                            <option value="AB+"> AB+ </option>
                            <option value="AB-"> AB- </option>
                            <option value="B+"> B+ </option>
                            <option value="B-"> B- </option>
                            <option value="O+"> O+ </option>
                            <option value="O-"> O- </option>
                            </select>
                            </td>
                        </tr>

                        <tr>
                            <th> Educational Status </th>
                            <td> <textarea name="education" id="" rows="4"></textarea> </td>
                        </tr>

                        <tr>
                            <th> Present Address </th>
                            <td> <textarea name="present" id="" cols="26" rows="4"></textarea> </td>
                        </tr>

                        <tr>
                            <th> Permanent Address </th>
                            <td> <textarea name="permanent" id="" cols="26" rows="4"></textarea> </td>
                        </tr>

                        <tr>
                            <th>User ID </th>
                            <td> <input type="text" name="euserid" class="inputtab" required/> </td>
                        </tr>

                        <tr>
                            <th>Password </th>
                            <td> <input type="password" name="epass" class="inputtab" required/> </td>
                        </tr>

                        <tr>
                            <th>Confirm Password </th>
                            <td> <input type="password" name="apass" class="inputtab" required/> </td>
                        </tr>

                    </table>

                    <?php echo $GLOBALS['confirmaton']; ?> 

                    <br/>
                    <input type="submit" name="submit" value="submit">
                    </center>
                </fieldset>
            </form>

        </div>
    </section>

    <section id="main-footer">
        <div class="container">
            Copyright &#169 2021 Atiya Khan
        </div>
    </section>
    
</body>
</html>