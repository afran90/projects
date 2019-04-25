<?php  

   session_start();
   session_destroy();
   
   include 'database.php';
   
   $query = "delete from cart";
   $result = mysqli_query($link, $query);

   header("location: index.php");
?>

<!-- //  $ () 1234567890 -->


