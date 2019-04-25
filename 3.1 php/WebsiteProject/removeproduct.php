<?php
  
  include 'database.php';
  
  $productname = $_GET['product'];
  $query = "DELETE FROM products where name='$productname'";

  $resultofdelete = mysqli_query($link, $query);
  
  header("location: adminproduct.php");
?>



