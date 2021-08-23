

<?php  
require_once 'ProductInfo.php';

//$product = fetchTeacher($_GET['id']);
$teacher = fetchTeacher($_GET['id']);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
    <style>
    </style>
</head>
<body>

    <fieldset style="width: 50%;">
        <legend><b>DELETE PRODUCT</b></legend>
        <label for="name" style= "font-size:20px";><b>Name:</b> <?php echo $teacher['pname']?></label><br>
        <label for="name" style= "font-size:20px";><b>Category:</b> <?php echo $teacher['pcetegory']?></label><br>
        <label for="name" style= "font-size:20px";><b>Price:</b> <?php echo $teacher['pprice']?></label><br>
        <label for="name" style= "font-size:20px";><b>Avl. Quantity:</b> <?php echo $teacher['numofproduct']?></label><br>
        <label for="name" style= "font-size:20px";><b>Brand:</b> <?php echo $teacher['pbrand']?></label><br>
        
        </label><br>
        <hr>
        <form action="delProduct.php? id=<?php echo $teacher['id'] ?>" method="POST">
        <input type="submit" value="Delete" name="delProduct" id="delProduct" >
        </form>

    </fieldset>
<footer><a href="Show_All_Product.php" ><b>Go Back</b></a></td></footer>
</body>
</html>