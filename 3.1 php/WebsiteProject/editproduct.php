<?php
	
	include 'header.php';
	
	$name = $_GET['name'];
	$query = "SELECT * FROM products WHERE name= '$name' ";
	$result = mysqli_query($link, $query);
	
	$product = mysqli_fetch_assoc($result);
	$price = $product['price'];
	$image = $product['image'];
	$type = $product['type'];
	$quantity = $product['quantity'];
	$soldquantity = $product['soldquantity'];		
	$description = $product['information'];
	$details = $product['details'];
?>

<?php
			if(!empty($_POST['type']) && !empty($_POST['price']) && !empty($_POST['information']) && !empty($_POST['details']) && !empty($_POST['quantity']) && !empty($_POST['image'])){
				echo "<script type='text/javascript'>alert('Successfully Updated.');</script>";
			$price = $_POST['price'];
			$image = $_POST['image'];
			$type = $_POST['type'];
			$details = $_POST['details'];
			$quantity = $_POST['quantity'];
			$description = $_POST['information'];
			
			$query = "UPDATE products SET type='$type', information='$description', details='$details', price=$price, quantity=$quantity, image='$image' where name='$name'";					
			$result = mysqli_query($link, $query);
			}		
?>

<?php	
    

	//$query = "update products set type=, information, details, price, quantity, image";
	//$result = mysqli_query($link, $query);
	//echo "<script type='text/javascript'>alert('Item added to cart.');</script>"; 	
	
	if(!empty($_GET)  ){
    mysqli_close($link);
  }

?>



<!DOCTYPE HTML>

<html>
  
  <body>
    
	<div class="main-wrapper">
		
		<div class="row" style="height:50px"> </div>
		
		<div class ="container" >

		<h2 align ="center"> <?php echo $name; ?> </h2> <br>
		
		<div class="row" style="height:50px"> </div>
	 
	 <form action="" method="POST">
		<h4> Type </h4>  <input name="type" type="text" value= <?php echo $type; ?> />  <br>
		
		<h4> Information </h4> <input name="information" type="text" value ="<?php echo $description; ?>" style="width:100%;height:100px;"/> <br>
		
		<h4> Details </h4> <input name="details" type="text" value ="<?php echo $details; ?>" style="width:100%;height:100px;"/> <br>
		
		<h4> Price </h4> <input name="price" type="number" value ="<?php echo $price; ?>" style="width:50%;"/><br>
		
		<h4> Quantity </h4> <input min=<?php echo $quantity; ?> name="quantity" type="number" value ="<?php echo $quantity; ?>" style="width:50%;"/> <br>
		
		<h4> Image </h4> <input name="image" type="text" value ="<?php echo $image; ?>" style="width:50%;"/><br>
	  	
		<div style="height:50px"> </div>
 	
		<button type="submit"> Update </button><br>
		
	 </form>	
	 
		</div>
		<div class="row" style="height:100px"> </div>
 	

	</div>
	
		
	<?php include 'footer.html'; ?>
	
				        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	
  </body>

</html>
