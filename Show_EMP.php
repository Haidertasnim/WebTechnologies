<html lang="en">
<head>
    <title>Json</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
    </style>
</head>
<body>
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
            <li><a href="Register_CUS.php">Customer</a></li>
            <li style="float: right;" ><a href="Login.php"><b>Login</a></li>
        </ul>
        </div>
    </section>

    <?php

    $date = $uid = $name = $stime = $sttime = $etime = $zone = "";
    $erdate = $eruid = $ername = $erstime = $ersttime = $eretime = $erzone = "";
    $error = $message = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      //Date
      if(empty($_POST["date"]))
      {  
        $erdate = "Enter Date";
      }

      //Uid
      else if(empty($_POST["uid"]))
      {
        $eruid = "User Id is required";
      }

      //Name
      else if(empty($_POST["name"]))
      {
        $ername = "Enter Name";
      }

      //Shift Time
      else if(empty($_POST["stime"]))
      {
        $erstime = "Shift Time is requied";
      }

      //Start Time
      else if(empty($_POST["sttime"]))
      {
        $ersttime = "Start Time is requied";
      }

      //End Time
      else if(empty($_POST["etime"]))
      {
        $eretime = "End Time is requied";
      }

      //Zone
      else if(empty($_POST["zone"]))
      {
        $erzone = "Zone is requied";
      }
      
      else
      {
        if(file_exists('data.json'))
        {  
          $current_data = file_get_contents('data.json');  
          $array_data = json_decode($current_data, true);  
          $extra = array(  
            'date'          =>     $_POST['date'],
            'uid'           =>     $_POST['uid'],
            'name'          =>     $_POST['name'],
            'stime'         =>     $_POST['stime'],
            'sttime'        =>     $_POST['sttime'],
            'etime'         =>     $_POST["etime"],
            'zone'          =>     $_POST["zone"]);

          $array_data[] = $extra;
          $final_data = json_encode($array_data);

          if(file_put_contents('data.json', $final_data))
          {  
            $message = "<label class='text-success'>File Appended Successfully</p>";
          }
        }
        else  
        {  
          $error = 'JSON File not exits';
        }
      }
    }
?>

    <section id="registationform">
        <div class="container">

            <center><br><fieldset>
            <center><legend><h1>Employee Info</h1></center></legend>
        <form name="Cus_Reg" method="post" style="padding-top: 10px" enctype="multipart/form-data">
                    
                    <center>
                    <table border="2">
                        <tr>
                        <th>Date : <span class="error"></th>
                        <td><input type="date" name="date" class="inputtab" id="date" value="<?php echo $date;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erdate;?> </span><br></td>
                        </tr>

                        <tr>
                        <th>User Id : <span class="error"></th>
                        <td><input type="text" name="uid" class="inputtab" id="uid" value="<?php echo $uid;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $eruid;?> </span><br></td>
                        </tr>

                        <tr>
                        <th>Name : <span class="error"></th>
                        <td><input type="text" name="name" class="inputtab" id="name" value="<?php echo $name;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $ername;?> </span><br></td>
                        </tr>

                        <tr>
                        <th>Shifting Time : <span class="error"></th>
                        <td><input type="time" name="stime" class="inputtab" id="stime" value="<?php echo $stime;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erstime;?> </span><br></td>
                        </tr>

                        <tr>
                        <th>Start Time : <span class="error"></th>
                        <td><input type="time" name="sttime" class="inputtab" id="sttime" value="<?php echo $sttime;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $ersttime;?> </span><br></td>
                        </tr>

                        <tr>
                        <th>End Time : <span class="error"></th>
                        <td><input type="time" name="etime" class="inputtab" id="etime" value="<?php echo $etime;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $eretime;?> </span><br></td>
                        </tr>

                        <tr>
                        <th>Zone : <span class="error"></th>
                        <td><input type="text" name="zone" class="inputtab" id="zone" value="<?php echo $zone;?>"><span class="error"><?php echo "&nbsp&nbsp"?><?php echo $erzone;?> </span><br></td>
                        </tr>

                    </table>

                    <br/>
                    <input type="submit" name="submit" value="Add">
                    <a href="Data.php"><b>Show Info</a>
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
