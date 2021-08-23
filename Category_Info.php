<!DOCTYPE html>
<html lang="en">
<head>
<style>
#customers
{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  table-layout: fixed;
}

#customers td, #customers th
{
  border: 1px solid #ddd;
  padding: 8px;
  table-layout: fixed;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
  table-layout: fixed;
}
.error
{
  color: RED;
}
</style>

<table id="customers">
  <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Available Quantity</th>
    <th>Brand</th>
  </tr>

<?php
$echo = "";
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','','test');
if (!$con) 
{
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"products");
$sql="SELECT * FROM products WHERE pcetegory = '".$q."'";

if ($result=mysqli_query($con,$sql))
{
  $rowcount=mysqli_num_rows($result);

  if($rowcount > 0)
  {
    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['pname'] . "</td>";
      echo "<td>" . $row['pcetegory'] . "</td>";
      echo "<td>" . $row['pprice'] . "</td>";
      echo "<td>" . $row['numofproduct'] . "</td>";
      echo "<td>" . $row['pbrand'] . "</td>";
      
      echo "</tr>";
    }
  }
  else
    $echo = "No Product Available!!";

    mysqli_free_result($result);
}

mysqli_close($con);
?>
<span class="error" style="font-size:20px;"><?php echo "&nbsp&nbsp"?><?php echo $echo;?> </span><br>
</body>
</html>