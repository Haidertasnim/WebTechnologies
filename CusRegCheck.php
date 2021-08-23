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

    $name=$_POST["name"];
    $pass=$_POST["pass"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $image = $_FILES["picture"]["name"];
      
    $sql2 = "INSERT INTO customers(cname, cemail, cpassword, cphone, picture) VALUES ('".$name."','".$email."','".$pass."','".$phone."','".$image."')";

    if(mysqli_query($conn, $sql2))
    {
        echo "Registration Successfull";
    }
    
    else
    echo "<br/> SQL2 Error".mysqli_error($conn);
    
    mysqli_close($conn);
}

?>