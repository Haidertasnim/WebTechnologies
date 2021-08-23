<?php  
$confirmaton = "";

function Working(){
    $GLOBALS['confirmaton'] = "";
    $cname = "";
    $cemail = "";
    $cphone = "";
    $cpass = "";
    $apass = "";


    if(isset($_REQUEST['submit'])){
        $cname = $_REQUEST['cusname'];
        $cemail = $_REQUEST['cusemail'];
        $cphone = $_REQUEST['cusphone'];
        $cpass = md5($_REQUEST['cuspassword']);
        $apass = md5($_REQUEST['againpassword']);
    }

    if(!empty($cname) || !empty($cemail) || empty($cphone) || !empty($cpass)){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";

        $conn = new mysqli($servername, $username, $password, $dbname); // create db connection

        if ($conn->connect_error) {    // check connection
            die("Connection failed: " . $conn->connect_error);
        }
        else{

            $CREATE_TABLE = "CREATE TABLE IF NOT EXISTS Customers (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                cname VARCHAR(30) NOT NULL,
                cemail VARCHAR(30) UNIQUE NOT NULL,
                cphone VARCHAR(15),
                cpassword VARCHAR(64),
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )";

            $statement = $conn->prepare($CREATE_TABLE);
            $statement->execute();
            $statement->close();


            $SELECT = "SELECT cemail FROM Customers WHERE cemail = ? limit 1";
            $INSERT = "INSERT INTO Customers(cname,cemail,cphone,cpassword) VALUES (?, ?, ?, ?)";

            $statement = $conn->prepare($SELECT);
            $statement->bind_param('s',$cemail);
            $statement->execute();
            $statement->bind_result($cemail);
            $statement->store_result();
            $num_row = $statement->num_rows();

            if($num_row==0){    // email id varifed or not.
                $statement->close();

                if($cpass === $apass){ 
                    $statement = $conn->prepare($INSERT);
                    $statement->bind_param('ssss', $cname, $cemail, $cphone, $cpass);
                    $statement->execute();

                    $GLOBALS['confirmaton'] = "New record inserted";
                }
                else{
                    $GLOBALS['confirmaton'] = "Password does't match!!!";
                }
            }
            else{
                $GLOBALS['confirmaton'] = "Someone is already register in this email";
            }
            $statement->close();
            $conn->close();
        }
    }
    else{
        $GLOBALS['confirmaton'] = "All field are required!!";
        die();
    }
}

if(isset($_REQUEST['submit'])){
    Working();
}

?>  