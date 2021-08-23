<?php

function db_conn()
{
    $servername ="localhost";
    $username   ="root";
    $password   ="";
    $dbname     ="test";
        
    $conn = mysqli_connect($servername, $username, $password, $dbname);
        
    if(!$conn)
    {
        die("Connection Error!".mysqli_connect_error());
    }
    return $conn;
}

function registration()
{
    $conn = db_conn();

    $uid=$_POST["uid"];
    $name=$_POST["name"];
    $fname =$_POST["fname"];
    $mname=$_POST["mname"];
    $address=$_POST["address"];
    $paddress=$_POST["paddress"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $gender=$_POST["radiobutton"] ?? "";
    $dob  =$_POST["dob"];
    $bg  =$_POST["x"];
    $es  =$_POST["es"];
    $phone  =$_POST["phone"];
    $nid  =$_POST["nid"];
    $image = $_FILES["picture"]["name"];
    
      
    $sql2 = "INSERT INTO employees(euserid, ename, efname, emname, eemail, ephone, enid, gender, dob, bg, education, present, permanent, epassword, picture) VALUES ('".$uid."','".$name."','".$fname."','".$mname."','".$email."','".$phone."','".$nid."','".$gender."','".$dob."','".$bg."','".$es."','".$address."','".$paddress."','".$pass."','".$image."')";

    if(mysqli_query($conn, $sql2))
    {
        echo "Registration Successfull";
    }
    
    else
    echo "<br/> SQL2 Error".mysqli_error($conn);
    
    mysqli_close($conn);
}

?>