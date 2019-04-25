<?php
	
    include 'database.php';
	include 'header.php';
	
	$name = $_GET['name'];
	$query = "SELECT * FROM products WHERE name= '$name' ";
	$result = mysqli_query($link, $query);
	
	$product = mysqli_fetch_assoc($result);
	$name =  $product['name'];
	$price = $product['price'];
	$image = $product['image'];
	$quantity = $product['quantity'];	
	$description = $product['information'];
	$details = $product['details'];
?>



<!DOCTYPE HTML>

<html>
  
  <body>
    
	<div class="main-wrapper">
		
		<div class="row" style="height:100px">
		
		</div>
		
		<div class = "container">
		
			<div class="row">
		
				<div class="col-md-6">
					<img src = <?php echo $image; ?> width="500px" height="500px" />
				</div>
			
				<div class="col-md-6">
					<h1> <?php echo $name; ?> </h1>
					<p> <h5> Price: <?php echo $price ?> TK </h5> </p>
					
					<?php if($quantity>0){ ?>
					<p> <h4 style="color:green" > In Stock </h4> </p>
					
					<?php }else{ ?>
					<p> <h4 style="color:red" > Out Of Stock </h4> </p>
					
					<?php } ?>
					
					<p> <?php echo $description; ?> </p>
					
					<p> 
					<h5> Quantity: </h5> 
					<form action="" method="POST" > 
					<input type="number" name="quantity" min="0" > </input> <br><br>
					<button class="btn btn-default" type="submit" > Add to Cart </button> 
					</form> 
					</p>
				</div>
				
				
<?php	

    if(!empty($_POST['quantity']) ){
		echo $quantity.' '.$_POST['quantity'];
		if($quantity<$_POST['quantity'] ){
			
			echo "<script type='text/javascript'>alert('We are sorry. This product is currently out of Stock.')</script>";
		}
		else{
			$quantity = $_POST['quantity'];
				if(isset($_SESSION['email'])){
					$query = "insert into cart (productname, price, quantity) values('$name', '$price', '$quantity')";
					$result = mysqli_query($link, $query);
					echo "<script type='text/javascript'>alert('Item added to cart.');</script>"; 	
			//header("location: cart.php");		   
				}
				else{
					header("location: login.php"); 
		   //echo "<script type='text/javascript'>alert('Log in to add to cart.');</script>"; 	  
			}
		}
  }

	
	if(!empty($_GET)  ){
    mysqli_close($link);
  }

?>
		
			</div>
		
		</div>
		
		<div class="row" style="height:100px">
		
		</div>
		
		<div class="row" style="height:200px; padding:20px;">
			<div class="col-md-12">
				<h2 style="color:purple" > Product Information: </h2>
				<div class="container">
				 <ul>
				<?php echo $details.PHP_EOL;
				 ?>

				 </ul>
 				</div>	
			</div>		
		</div>
		
	</div>
	
		
	<?php include 'footer.html'; ?>
	
				        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	
  </body>

</html>
