<?php  
require_once 'ProductInfo.php';

$teachers = fetchAllTeachers();
$valueToSearch='';

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $teachers  = filterTable($valueToSearch);  
}
else
{
    $teachers  = fetchAllTeachers();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Display Products</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    
    <style>
        table, th, td, tr
        {
            border: 2px solid ;
            border-collapse: collapse;
            padding: 2%
        }
        body
        {
            background-color: #F5DEB3;
        }
    </style>
</head>
<body>
   <br> <center><label style="font-size: 20px">Search:<?php echo '&emsp;';?></label>
<form action="Show_All_Product.php" method="post">
     <input type="text" name="valueToSearch" placeholder="Value To Search" value=<?php echo $valueToSearch ?>>
     <input type="submit" name="search" value="Search by Name"><br><br>
<br>
<center><table class="w3-table-all w3-hoverable">
    <thead>
        <tr class="w3-blue">
            
            <th><b>Name</th>
            <th><b>Category</th>
            <th><b>Price</th>
            <th><b>Avl. Quantity</th>
            <th><b>Brand</th>
            <th><b>Picture</th>
            <th colspan="2"></b></th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($teachers as $i => $teacher): ?>
            <tr>
                
                <td><?php echo $teacher['pname'] ?></td>
                <td><?php echo $teacher['pcetegory'] ?></td>
                <td><?php echo $teacher['pprice'] ?></td>
                <td><?php echo $teacher['numofproduct'] ?></td>
                <td><?php echo $teacher['pbrand'] ?></td>
                <td><img name="picture" width="70px" height ="70px" src="image/<?php echo $teacher['picture'] ?>"></td>

                <td><a href="EditProduct.php?id=<?php echo $teacher['id']?>">edit<?php echo '&nbsp&nbsp&nbsp&nbsp&nbsp';?></a></td>
                <td><a href="DeleteProduct.php?id=<?php echo $teacher['id'] ?>">delete<?php echo '&nbsp&nbsp&nbsp&nbsp&nbsp';?></a></td>
            </tr>
        <?php endforeach; ?>
        
    </tbody>
    
</table>
</fieldset>
<br>
<footer><a href="Category.php" ><b>Category Search</b></a><?php echo '&nbsp&nbsp&nbsp&nbsp&nbsp';?><a href="Add_Product.php" ><b>Go Back</b></a></td></footer>
<br>
</body>
</html>