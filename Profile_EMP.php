<?php
    session_start();
?>
<?php include "conn.php"; ?>
<?php include('DB_Login.php') ?>

<!DOCTYPE html>

<html>
    <head>
        <title>EmployeeProfilePage</title>
        
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <section id="main-header">
        <div class="container">
        <a href="Home.php"><h1 style="float: left;">Super Shop</h1></a>
        <a href="Logout.php"><h1 style="float: right;">Logout</h1></a>
        
            <section style="float: right; margin-top: 17px;">
            </section>
        </div>
        </section>

            <div align="center">
            <h1>Employee Profile</h1>

            <div style="width: 70%;">
                <fieldset align="left">
                <form action="#" method="POST">
                    <div style="width: calc(80%); height: calc(100%); float: left;" align="left">
                        <table>
            <tr>
                
                <?php
                $name = $email = $phone = $error = $id ="";

                $sql="select * from iemployee where euserid= '".$_SESSION["euserid"]."'";

                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>=1)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $date=$row['date'];
                        $stime=$row['stime'];
                        $jtime=$row['jtime'];
                        $etime=$row['etime'];
                        $ltime=$row['ltime'];
                        $zone=$row['zone'];
                        $comment=$row['comment'];
                    }
                }
                else
                {
                    $error = "Not available!!";
                }
                    
                ?>
            </tr>
                            <tr>
                                <td><span style="font-size:24px;">Name: <?php  echo $_SESSION['uname']; ?></span></td>
                                <td><span style="font-size:22px;"></span></td>
                            </tr>
                            <tr>
                                <td><span style="font-size:24px;">User ID: <?php echo $_SESSION['euserid']; ?></span></td>
                                <td><span style="font-size:22px;"></span></td>
                            </tr>
                            <tr>
                                <td><span style="font-size:24px;">Phone: <?php echo $_SESSION['uphone']; ?></span></td>
                                <td><span style="font-size:22px;"></span></td>
                            </tr>
                        </table>
                    </div>

                    <div style="width: calc(20%); height: calc(100%); float: right; vertical-align: middle;">
                        
                        <?php
                        $img = mysqli_query($conn, "SELECT * FROM employees where euserid= '".$_SESSION["euserid"]."'");
                        while ($row = mysqli_fetch_array($img)) 
                        {
                            $pic = "<img src='image/".$row['picture']."' height='150' width='150'>";
                            echo $pic;
                        }
                        ?>                        
                    </div>
                    
                </fieldset>
                <br>
                <div style="width: calc(100%); height: calc(100%);">
                    <table border="1" style="width: calc(100%); height: calc(100%);">
                        <th><i>Date</i></th><th><i>Start Time</i></th><th><i>Join Time</i></th><th><i>End Time</i></th><th><i>Leaving Time</i></th><th><i>Zone</i></th><th><i>Comment</i></th></tr>
                        
                        <?php foreach ($result as $i => $result): ?>

                        <td><?php echo $result['date'] ?></td><td><?php echo $result['stime'] ?></td>
                        <td><?php echo $result['jtime'] ?></td><td><?php echo $result['etime'] ?></td><td><?php echo $result['ltime'] ?></td><td><?php echo $result['zone'] ?></td>
                        <td><?php echo $result['comment'] ?></td></tr>

                        <?php endforeach; ?>
                    </table>
                </div>
                                 
            </div>
       </div>

       <section id="main-footer">
        <div class="container">
            Copyright &#169 2021 Tasnim Haider
        </div>
    </section>
    </body>
</html>