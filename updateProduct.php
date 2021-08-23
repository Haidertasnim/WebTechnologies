<?php  
require_once 'model.php';

if(isset($_POST['updateProduct']))
{
  $data['pname'] = $_POST['name'];
  $data['pprice'] = $_POST['price'];
  $data['pcetegory'] = $_POST['cat'];
  $data['numofproduct'] = $_POST['num'];
  $data['pbrand'] = $_POST['brand'];
  
  if(updateTeacher($_POST['uid'], $data))
  {
    echo 'Successfully Updated!!';
    header('Location: Show_All_Product.php');
  }
   else
  {
    echo 'You are not allowed to access this page.';
  }
}
?>