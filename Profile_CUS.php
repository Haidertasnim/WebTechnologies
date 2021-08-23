<?php
    session_start();
?>
<?php include "conn.php"; ?>
<?php include('DB_Login.php') ?>

<!DOCTYPE html>

<html>
    <head>
        <title>CustomerProfilePage</title>
        
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
            <h1>Customer Profile</h1>

            <div style="width: 70%;">
                <fieldset align="left">
                <form action="#" method="POST">
                    <div style="width: calc(80%); height: calc(100%); float: left;" align="left">
                        <table>
            <tr>
                
                <?php

                $sql="select * from icustomer where email= '".$_SESSION["uemail"]."'";

                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>=1)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $date=$row['date'];
                        $oid=$row['oid'];
                        $norder=$row['norder'];
                        $status=$row['status'];
                        $delivary=$row['delivary'];
                        $ddate=$row['ddate'];
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
                                <td><span style="font-size:24px;">Email: <?php echo $_SESSION['uemail']; ?></span></td>
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
                        $img = mysqli_query($conn, "SELECT * FROM customers where cemail= '".$_SESSION["uemail"]."'");
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
                        <th><i>Date</i></th><th><i>Order ID</i></th><th><i>No of Order</i></th><th><i>Status</i></th><th><i>Delivary</i></th><th><i>Delivary Date</i></th></tr>
                        
                        <?php foreach ($result as $i => $result): ?>

                        <td><?php echo $result['date'] ?></td><td><?php echo $result['status'] ?></td>
                        <td><?php echo $result['oid'] ?></td><td><?php echo $result['delivary'] ?></td><td><?php echo $result['norder'] ?></td><td><?php echo $result['ddate'] ?></td></tr>

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