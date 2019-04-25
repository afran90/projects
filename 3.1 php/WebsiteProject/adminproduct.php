<!DOCTYPE HTML>

<!--  -->
<!-- 0123456789 style="height:100vh;" --> 

<?php 

include 'database.php';

$query = "SELECT COUNT(*) as total FROM products";
$result = mysqli_query($link, $query);
$count = mysqli_fetch_assoc($result);
$total = $count['total'];

?>

<html>
  
   <?php include 'adminheader.html'; ?>
   
   
	<div style="background:#aa320f; height:150px;" >
				
		      <div class="inner">
					
				<h2 style="color:orange; text-align: center; padding:25px;"> PRODUCTS </h2>

			  </div>
			  
	</div>
   
   
   <div class="container">
				
				<div class="row">
					<div class="col-md-6 col-lg-6 border" style="background:#42f4aa">
                                <div >
                                    <h2 style="color:blue"> <?php echo $total; ?> </h2>
                                    <span style="color:black"> TOTAL PRODUCTS</span>

                                </div>
					</div>
				    
					<?php
							$query = "SELECT sales from visitor";
							$result = mysqli_query($link, $query);
							$data = mysqli_fetch_assoc($result);
					
					?>
					<div class="col-md-6 col-lg-6 border" style="background:#f4be41">
                                <div>
                                    <h2 style="color:blue"><?php echo $data['sales'];?></h2>
                                    <span style="color:black"> SALES MADE</span>

                                </div>
					</div>		
				
					<div style="height:150px"> </div>
				

				</div>
				
				<div style="height:100px"> </div>
				
				<div class="row">
					
				
				<div class="col-md-6 col-lg-12">
				   
				      <h3> Products</h3>
					  
						<table class="table" >
                                  
								  <tr>
								    <td>   </td>
									<td>Name </td>
									<td>    </td>
									<td>Type </td>
									<td>Quantity Sold</td>
                                    <td>Quantity Available</td>
									<td>Price </td>
									<td>    </td>
                                  </tr>
                                  
								  
								  <tbody>
								  
								  <?php 
								  
								  include 'database.php';
								   
								  $query = "SELECT * FROM products";
								  $result = mysqli_query($link, $query);
								  $i =1;
								  while($product = mysqli_fetch_assoc($result) ){
												$name = $product['name'];
												$type = $product['type'];
												$available = $product['quantity'];
												$price = $product['price'];
												$image = $product['image'];
												$sold = $product['soldquantity'];
												
								?>
                                        <tr>
											
											<td> <?php echo $i; ?>  </td>

											<td>
                                                 <h6> <?php echo $name; ?> </h6>
												  <span>
                                                       <a href="editproduct.php?name=<?php echo $name; ?>"> Edit </a>
                                                  </span>
                                            </td>
											<td>    
											  <img src=<?php echo $image?> width="50px" height="50px" />
											
											</td>
											
                                            <td>
                                                  <span > <?php echo $type; ?> </span>
                                            </td>
                                            
											<td>
                                                <span > <?php echo $sold; ?> </span>
                                            </td>
                                                   
											<td>
                                                 <span> <?php echo $available; ?> </span>													   
                                            </td>
											
											<td>
                                                 <span> <?php echo $price; ?> Tk </span>													   
                                            </td>
											
											<td>
                                                 <span> <a href="removeproduct.php?product=<?php echo $name; ?>"> Remove </a> </span>													   
                                            </td>
											
                                        </tr>
										
								  <?php $i++;} ?>

                                  </tbody>
						</table>
   
				</div>
				
				</div>
				
				<div style="height:100px"> </div>
				
				<div class="row">
					<div class="col-md-6 col-lg-12">
						<h3> Add New Product</h3>
					
					<div style="height:30px"> </div>
					
					<div class="border" style="text-align:center">
						<form action="" method="POST">
						<label> Name </label> <br>
						<input type="text" name="name" style="width: 500px"> </input> <br>
						<label> Price </label> <br>
						<input type="number" name="price" style="width: 500px"> </input> <br>
						
						<label> Type </label> <br>
						<input type="text" name="type" style="width: 500px"> </input> <br>
						
						<label> Description </label> <br>
						<input type="text" name="description"style="width: 500px; height:400px">  </input> <br>
						
						<label> Image </label> <br>
						<input type="text" name="image" style="width: 500px"> </input> <br>
						
						<button type="submit"> Add </button>
						</form>
						<?php if( isset($_GET['feedback']) ) {echo $_GET['feedback'];} ?>
						
						<?php 	
							if(!empty($_POST)  ){
								if( !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['type'])&& !empty($_POST['description']) && !empty($_POST['image'])  ){

							$productname = mysqli_real_escape_string($link, $_POST['name']);
							$price =  $_POST['price']; 
							$type =  mysqli_real_escape_string($link, $_POST['type']);
							$description =  mysqli_real_escape_string($link, $_POST['description']);
							$image =  mysqli_real_escape_string($link, $_POST['image']);

							$query = "INSERT into products (name, type, information, price, image) VALUES('$productname', '$type', '$description', '$price', '$image')";
							$queryresult = mysqli_query($link, $query);
		
					if($queryresult){
			
						echo "<script type='text/javascript'>alert('Product successfully added.');</script>";			
					}else{	
							echo "<script type='text/javascript'>alert('We are sorry. There was a problem. Please try again.');</script>";				 
							}
					}
					else{
						header("location: adminproduct.php?feedback=Please fill all the fields first and then add.");
					}
	 
					}?>
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
			
   

</html>