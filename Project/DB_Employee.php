<?php  
$confirmaton = "";

function Working(){
    $GLOBALS['confirmaton'] = "";
    $ename = "";
    $efname = "";
    $emname = "";
    $eemail = "";
    $ephone = "";
    $enid = "";
    $gender = "";
    $dob = "";
    $bg = "";
    $education = "";
    $present = "";
    $permanent = "";

    $euserid = "";
    $epass = "";
    $epass = "";


    if(isset($_REQUEST['submit'])){

        $ename = $_REQUEST['ename'];
        $efname = $_REQUEST['efname'];
        $emname = $_REQUEST['emname'];
        $eemail = $_REQUEST['eemail'];
        $ephone = $_REQUEST['ephone'];
        $enid = $_REQUEST['enid'];
        $gender = $_REQUEST['gender'];
        $dob = $_REQUEST['dob'];
        $bg = $_REQUEST['bg'];
        $education = $_REQUEST['education'];
        $present = $_REQUEST['present'];
        $permanent = $_REQUEST['permanent'];

        $euserid = $_REQUEST['euserid'];
        $epass = md5($_REQUEST['epass']);
        $apass = md5($_REQUEST['apass']);
    }

    if(!empty($ename) || !empty($eemail) || empty($ephone) || !empty($enid) || !empty($dob) || !empty($euserid) || !empty($epass)){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";

        $conn = new mysqli($servername, $username, $password, $dbname); // create db connection

        if ($conn->connect_error) {    // check connection
            die("Connection failed: " . $conn->connect_error);
        }
        else{

            $CREATE_TABLE = "CREATE TABLE IF NOT EXISTS Employees (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                euserid VARCHAR(12) UNIQUE NOT NULL,
                ename VARCHAR(30) NOT NULL,
                efname VARCHAR(30) NOT NULL,
                emname VARCHAR(30) NOT NULL,
                eemail VARCHAR(30) UNIQUE NOT NULL,
                ephone VARCHAR(15) NOT NULL,
                enid VARCHAR(15) UNIQUE NOT NULL,
                gender VARCHAR(1),
                dob DATE NOT NULL,
                bg VARCHAR(4),
                education VARCHAR(150),
                present VARCHAR(150),
                permanent VARCHAR(150),
                epassword VARCHAR(64),
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )";

            $statement = $conn->prepare($CREATE_TABLE);
            $statement->execute();
            $statement->close();


            $SELECT = "SELECT eemail FROM Employees WHERE euserid = ? limit 1";
            $INSERT = "INSERT INTO Employees(euserid, ename, efname, emname, eemail, ephone, enid, gender, dob, bg, education, present, permanent, epassword) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $statement = $conn->prepare($SELECT);
            $statement->bind_param('s',$euserid);
            $statement->execute();
            $statement->bind_result($euserid);
            $statement->store_result();
            $num_row = $statement->num_rows();

            if($num_row==0){    // email id varifed or not.
                $statement->close();

                if($epass === $apass){ 
                    $statement = $conn->prepare($INSERT);
                    $statement->bind_param('ssssssssssssss', $euserid, $ename, $efname, $emname, $eemail, $ephone, $enid, $gender, $dob, $bg, $education, $present, $permanent, $epass);
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