<?php  
$confirmaton = "";

$usertext = "";
$userpassword = "";

$uname = "";
$uemail = "";
$uphone = "";
$euserid = "";


if(isset($_REQUEST['login']))
{
    $usertext = $_REQUEST['userid'];
    //$userpassword = md5($_REQUEST['userpassword']);
    $userpassword = $_REQUEST['userpassword'];
    
    
    $flag=false;
    for($i=0; $i<strlen($usertext); $i++){
        if($usertext[$i]=='@'){
            $flag=true;
        }
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = new mysqli($servername, $username, $password, $dbname); 

    if ($conn->connect_error) {    // check connection
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        
        session_start();
        $_SESSION['euserid']= $id;

        if($flag)
        { // check user email
            $SELECT = "SELECT * FROM Customers WHERE cemail='$usertext'";

            if($result = mysqli_query($conn, $SELECT))
            {
                if(mysqli_num_rows($result) == 1)
                {
                    $row = mysqli_fetch_array($result);
                    if($userpassword == $row['cpassword'])
                    {
    
                        $_SESSION['uname'] = $row['cname'];
                        $_SESSION['uemail'] = $row['cemail'];
                        $_SESSION['uphone'] = $row['cphone'];
                        

                        mysqli_free_result($result);
                        return header("Location: Profile_CUS.php");
                    }
                else
                {
                    return header("Location: Home.php");
                }
                    
                    mysqli_free_result($result);
                } 
                else{
                    echo "Sorry. There is no account!!!";
                }
            }
        }
        else{  // check user id
            $SELECT = "SELECT * FROM Employees WHERE euserid='$usertext'";

            if($result = mysqli_query($conn, $SELECT))
            {
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_array($result);
                    
                    if($userpassword == $row['epassword'])
                    {
                        $_SESSION['uname'] = $row['ename'];
                        $_SESSION['uemail'] = $row['eemail'];
                        $_SESSION['uphone'] = $row['ephone'];
                        $_SESSION['euserid'] = $row['euserid'];

                        mysqli_free_result($result);
                        return header("Location: Profile_EMP.php");
                    }
                    else
                    {
                        return header("Location: Home.php");
                    }
                    
                    mysqli_free_result($result);
                } 
                else{
                    echo "Sorry. There is no account!!!";
                }
            }

        }
        
    }
    $conn->close();
}

if(isset($_REQUEST['logout'])){
    unset($_SESSION['uname']);
    unset($_SESSION['uemail']);
    unset($_SESSION['uphone']);;
    session_destroy();
    return header("Location: Home.php");
}

?>  