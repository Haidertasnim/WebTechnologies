<?php include "conn.php"; ?>

<!DOCTYPE html>  
 <html>  
      <head>  
        <title>Employee Information</title>
        <style>
          .text
          {
            text-align: center;
          }
        </style> 
             
      </head>  
      <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"style="padding-top: 10px">
      <center><fieldset style="width: 50%;" align="left">
      <legend class="text"><b>Employee Information</b></legend> 
        <div class="container" >              
                <div class="table-responsive"> 
                     <center><table class="table table-bordered">  
                          <tr>  
                              <th>Date<?php echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';?></th>
                              <th>User Id<?php echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';?></th>
                              <th>Name<?php echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';?></th>
                              <th>Shift Time<?php echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';?></th>
                              <th>Start Time<?php echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';?></th>
                              <th>End Time<?php echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';?></th>
                              <th>Zone</th>
                          </tr>

                          <?php   
                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);

                          foreach($data as $row)  
                          {  
                            echo '<tr>
                               
                            <td>'.$row["date"].'</td>
                            <td>'.$row["uid"].'</td>
                            <td>'.$row["name"].'</td>
                            <td>'.$row["stime"].'</td>
                            <td>'.$row["sttime"].'</td>
                            <td>'.$row["etime"].'</td>
                            <td>'.$row["zone"].'</td>
                            </tr>';  
                          }  
                          ?>
                     </table>
                </div>
        </div>
      </fieldset>
      <br>
        <center><a href="Show_EMP.php"><b>---> Back <---</a>
      
      </body>  
 </html>  