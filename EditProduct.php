<?php 

require_once 'ProductInfo.php';
//$product = fetchTeacher($_GET['id']);
$teacher = fetchTeacher($_GET['id']);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Product</title>
</head>
<body>

 <form action="updateProduct.php" method="POST" enctype="multipart/form-data">
  <fieldset style="width: 20%;">
    <legend><b>EDIT PRODUCT</b></legend>

    <label for="name" style= "font-size:20px";><b>Name</label><br>
    <input type="text" id="name" name="name" value="<?php echo $teacher['pname']?>"><br>

    <label for="fname" style= "font-size:20px";><b>Category</label><br>
    <input type="text" id="fname" name="cat" value="<?php echo $teacher['pcetegory']?>"><br>

    <label for="mname" style= "font-size:20px";><b>Price</label><br>
    <input type="text" id="mname" name="price" value="<?php echo $teacher['pprice']?>"><br>

    <label for="mname" style= "font-size:20px";><b>Avl. Quantity</label><br>
    <input type="text" id="mname" name="num" value="<?php echo $teacher['numofproduct']?>"><br>

    <label for="mname" style= "font-size:20px";>Brand</label><br>
    <input type="text" id="mname" name="brand" value="<?php echo $teacher['pbrand']?>"><br>
    <hr>

    <label for="mname" style= "font-size:20px";>Picture</label><br>
    <img name="picture" width="100px" src="image/<?php echo $teacher['picture'] ?>"><br>
    <hr>

    <input type="hidden" uid="uid" name="uid" value="<?php echo $teacher['id']?>"><br>
    <input type="submit" name = "updateProduct" value="Save">
  </fieldset>
  <footer><a href="Show_All_Product.php" ><b>Go Back</b></a></td></footer>
</form> 

</body>
</html>
