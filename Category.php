<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Show All Products</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="style.css"/>

  <style>
    #main{
        
        width:30%;
        padding:0 30px;
        box-sizing: border-box;
    }

    #sidebar{
        
        width:70%;
        background: #333;
        color:#fff;
        padding:10px;
        box-sizing: border-box;
    }
    .text
    {
      text-align: center;
    }
    body
    {
      background-color: #FFEFD5;
    }
    </style>
  
<script>

function showUser(str)
{
  if (str=="")
  {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();

  xmlhttp.onreadystatechange=function()
  {
    if (this.readyState==4 && this.status==200)
    {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","Category_Info.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<?php  
require_once 'ProductInfo.php';

$teachers = fetchAllTeachers();

?>

<form>
  <fieldset style="width: 96%;" align="left">
  <legend class="text"><b>VIEW ALL PRODUCTS</b></legend>

  

<center><select name="users" onchange="showUser(this.value)">

<option value="">Select a Category:</option>
<option value="Fruit">Fruit</option>
<option value="Vegetable">Vegetable</option>
<option value="Meat">Meat</option>
<option value="Fish">Fish</option>
<option value="Groceries">Groceries</option>
<option value="Milk">Milk</option>
<option value="Cooking Essential">Cooking Essential</option>

</select>
<br><br><div id="txtHint"></div>

<hr>
<button type="submit" class="button3" formaction="Show_All_Product.php">Back</button>
</fieldset>

</form>
<br>

</body>
</html>