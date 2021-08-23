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

    $cat=$_POST["pcetegory"];
    $name=$_POST["pname"];
    $price=$_POST["pprice"];
    $numofproduct=$_POST["numofproduct"];
    $brand=$_POST["pbrand"];
    $image = $_FILES["picture"]["name"];
      
    $sql2 = "INSERT INTO products(pcetegory, pname, pprice, numofproduct, pbrand, picture) VALUES ('".$cat."','".$name."','".$price."','".$numofproduct."','".$brand."','".$image."')";

    if(mysqli_query($conn, $sql2))
    {
        echo "Product Added Successfully";
    }
    
    else
    echo "<br/> SQL2 Error".mysqli_error($conn);
    
    mysqli_close($conn);
}

?>