<?php
	
   $host = 'localhost'; 
   $user = 'root';
   $password = "";
   $db = 'mydb';
   $link = mysqli_connect($host, $user, $password, $db);
   		
?>

<!-- //  $ () 1234567890 -->


<?php 
  
    if(isset($_POST['submit'])){          
          
		  $query = "select * from cart";
		  $result = mysqli_query($link, $query);
		  $income = 0;
		  
		while($item = mysqli_fetch_assoc($result)){
			$name = $item['productname'];
			$quantity = $item['quantity'];
			$price = $item['price'];
			
            $income=  $income+$quantity*$price;

			$q= "update products set soldquantity=soldquantity+$quantity where name='$name'";
		    $r = mysqli_query($link, $q);
			$q= "update products set quantity=quantity-$quantity where name='$name'";
			$r = mysqli_query($link, $q);
			
			$q= "update visitor set sales=sales+$quantity";
		   $r = mysqli_query($link, $q);
		} 
			
		  $q= "update visitor set income=income+$income";
		  $r = mysqli_query($link, $q);
		  
		  
		  $query = "delete from cart";
		  
		  $result = mysqli_query($link, $query);
		if($result) 
		{
			echo "<script type='text/javascript'>alert('Successfully checked out. Thank you.');</script>";	
		}	
    } 
  
?> 

<?php	
	  
  $query = "SELECT * from cart";
  $cart = mysqli_query($link, $query);
?>



<!DOCTYPE HTML>

<html>
  
  <head>	 
	 <meta charset="utf-8" />
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	 
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous"> 
	 <link rel="stylesheet" href="css/bootstrap.min.css"/>
	 <link rel="stylesheet" href="css/login.css"/>
	 <link rel="stylesheet" href="css/mycss.css" />
	 
	 <title> CART </title>
  </head>
  
  
  <body>
    <?php include 'header.php'; ?>
	
	<div class="row" style="height:200px">
	</div>
	
	<div class="row">
		
		<div class="col-md-4"> </div>
		
		<div class="col-md-4"> 
		
		<form method="post" action=""> 
 
			<table > 
          
			<tr> 
				<th bgcolor="#FF0000">Item</th>
				<th bgcolor="#FF0000">Name</th> 
				<th bgcolor="#FF0000">Quantity</th> 
				<th bgcolor="#FF0000">Price</th> 
				<th bgcolor="#FF0000">Items Price</th> 
			</tr> 
				
					<td style="padding-top:25px" > </td> 
						    <?php 
							$sum = 0;
							$i = 1;
							while($row = mysqli_fetch_assoc($cart)) { 
						$name = $row['productname'];
						$price = $row['price'];
						$quantity = $row['quantity'];
						$itemprice = $quantity * $price;
						
						$sum+= $itemprice;
					?>
						   <tr> 
						    <td width="100px"> <?php echo $i; ?>. </td>
							<td width="400px" > <?php echo $name; ?>  </td>
							<td width="100px"> <?php echo $quantity; ?> </td>
							<td width="100px"> <?php echo $price;  ?>Tk </td>
							<td width="100px"> <?php echo $itemprice; ?>Tk </td>
						
						   </tr> 
						   
							<?php $i++;} ?>
                   
                          
                     
					<tr> </tr>
                    <tr > 
						
                        <td style="padding-top:25px" colspan="4">Total Price: <?php echo $sum; ?>Tk </td> 
                    </tr> 
          
			</table> 
				<br /> 
			<button style="align:center" type="submit" name="submit">Check out </button> 
		</form> 

	<br /> 
	<!--<p>To remove an item, set it's quantity to 0. </p> -->
		
		</div>
		
		<div class="col-md-4"> 	</div>
		
		
	</div>
	
	
	
	<?php include 'footer.html'; ?>
	
				        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	
  </body>

</html>