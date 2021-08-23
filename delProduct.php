<?php 
require_once 'model.php';

if(isset($_POST['delProduct']))
{
    if (deleteTeacher($_GET['id']))
    {
        header('Location: Show_All_Product.php');
    }
}
?>