<?php 
   include 'header.php';
   
   
   if(isset($_SESSION['justregistered'])){ 
		unset($_SESSION['justregistered']);
		echo "<script type='text/javascript'>alert('Congratulations you are successfully registered. Welcome to your page.');</script>"; 		
   } 
?>


<!DOCTYPE html>
	<html>
		<head>
			<title>Success</title>
			<link rel="stylesheet" href="css/profile.css" />
			<link rel="stylesheet" href="css/mycss.css" />
			
			<style>			
			</style>
			
		</head>
		
		<body>
			
			<div class="sidenav" style="
					width: 200px;
					height: 300px;
					position: fixed;
					z-index: 1;
					top: 92px;
					left: 0;
					background: #eee;
					overflow-x: hidden;
					padding: 8px 0;
			">
				<a href="profile.php" >Shop by category</a>
				<a href="aboutme.php">About me</a>
				
			</div>
	
			<div class="container">
			
		
			<div style="height:100px"> </div>
			
			<form action="profile.php" method="post">
			
				<label> <h2> Shop by category </h2> </label> <br>
			
					<select name="category">
					    <option value="All"> All </option>
						<?php 
							include 'database.php';
							$query = "select distinct type from products";	
							$result = mysqli_query($link, $query);
							while($row = mysqli_fetch_assoc($result)) { 
							?>						
							<option <?php if(isset($_GET['category'])){ if(strcmp($_GET['category'], $row['type']) == 0) echo "selected="; else echo "";} ?> value= <?php echo $row['type']; ?>>  <?php echo $row['type']; ?> </option>                        						
						<?php
							
							}
							
							 unset($_GET['category']);	
						?>

					</select> <br><br>

					<button type="submit"> Fetch </button> <br>
					
					<!-- 
					<?php
					
					 if(isset($_POST['submit'])){ 
					 
					 foreach($arr as &$option){		 // with & get value by reference to modify
						  if($option == $_POST['category'])
							 $option = 'selected="selected"';
						  else
					 
							 $option = '';
					 }
					 
					 }
					
					?>
					
					 -->
			</form>

			
			<?php
				$category = "All";
				
				 if(isset($_POST['category'])  ){		
					$category = $_POST['category'];
				 }
				include 'database.php';
		
				if(strcmp($category, "All") == 0 ){		
					$query = "select * from products";
				}
				else{
					$query = "select * from products where type='$category'";	
				}
				
				$result = mysqli_query($link, $query);
			?>	
				     
					 <div style="height:100px"> </div>
					<label> <h2> <?php echo $category ?> </h2> </label> <br>
					 
					<?php while($row = mysqli_fetch_assoc($result)) { 
						$name = $row['name'];
						$image = $row['image'];
						$price = $row['price'];
						$description = $row['information'];
					?>
					
					<div class="row">
					
						<div class="col-md-4 q">
						    
								<a href="http://localhost/websiteproject/productinfo.php?name=<?php echo $name; ?>">
								
								<img class="productimage border" height="400px" width="500px" src= <?php echo $image; ?> />
								<div class="emptydiv"> </div>
								
								</a>
							
						
							
							<a class = "bottomtext" style="text-align:left"  href="http://localhost/websiteproject/productinfo.php?name=<?php echo $name; ?>"> <h5 style="font-weight: bold; color:blue;" > <?php echo $name; ?>  </h5> </a>

							
							<p style="text-align:left; font-weight: bold;"> <?php echo $price; ?>Tk </p>
							
							<p style="text-align:left"> <?php echo $description; ?> </p>
							
						</div>
					
					<?php $row = mysqli_fetch_assoc($result);
						  if(!$row){ ?> 
						  </div>
					<?php break; } 
						
						$name = $row['name'];
						$image = $row['image'];
						$description = $row['information'];
						$price = $row['price'];
					?>

						<div class="col-md-4 q">
						    	<a href="http://localhost/websiteproject/productinfo.php?name=<?php echo $name; ?>">
								
								<img class="productimage border" height="400px" width="500px" src= <?php echo $image; ?> />
								<div class="emptydiv"> </div>
								
								</a>
							
							<a class = "bottomtext" style="text-align:left" href="http://localhost/websiteproject/productinfo.php?name=<?php echo $name; ?>" > <h5 style="font-weight: bold; color:blue;" >  <?php echo $name; ?> </h5> </a>

							
							<p style="text-align:left; font-weight: bold;"> <?php echo $price; ?>Tk </p>
							
							<p style="text-align:left"> <?php echo $description; ?> </p>

						</div>
						
					<?php $row = mysqli_fetch_assoc($result);
						  if(!$row){ ?> 
						  </div>
					<?php break; }
										
						$name = $row['name'];
						$image = $row['image'];
						$description = $row['information'];
						$price = $row['price'];
					?>
					
					<div class="col-md-4 q">
						    	<a href="http://localhost/websiteproject/productinfo.php?name=<?php echo $name; ?>">
								
								<img class="productimage border" height="400px" width="500px" src= <?php echo $image; ?> />
								<div class="emptydiv"> </div>
								
								</a>
							
							<a class = "bottomtext" style="text-align:left" href="http://localhost/websiteproject/productinfo.php?name=<?php echo $name; ?>"> <h5 style="font-weight: bold; color:blue;" >  <?php echo $name; ?> </h5> </a>

							
							<p style="text-align:left; font-weight: bold;"> <?php echo $price; ?>Tk </p>
							
							<p style="text-align:left"> <?php echo $description; ?> </p>

						</div>
						
					</div>
					
					<?php } ?>
			
			

			
			<div style="height:100px"> </div>
			
			
			</div>
			
		
		<?php   include 'footer.html'; ?>
		
		</body>

	
	</html>

