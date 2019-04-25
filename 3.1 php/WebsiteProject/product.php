
<?php
  include 'header.php';
  include 'database.php';
  
  $query = "SELECT * from products";
  $result = mysqli_query($link, $query);
  
  $string = '	
					<div class="row">
					
						<div class="col-md-6 p">
						     
							<img class="productimage border" src="images/watch.jpg"/>
							<div class="emptydiv"> </div>
							
							<a class = "bottomtext" href="http://localhost/websiteproject/productinfo.php?name=Flower Quartz Analog Wrist Watch"> <h5 style="font-weight: bold" > Analog Wrist Watch </h5> </a>
							<div class="emptydiv"> </div>
							
							<p style="text-align:left"> Sanwood Womens Fashion Vintage Bronze Case Cat & Flower Quartz Analog Wrist Watch.
														Blue Color. </p>
							
						</div>
					
						<div class="col-md-6 p">
						    <img class="productimage border" src="images/electronics.jpg"/>
							<div class="emptydiv" > </div>
							
							<a class = "bottomtext" href="http://localhost/websiteproject/productinfo.php?name=Bastex 3D Black and White Panda Bear Silicone Case"> <h5 style="font-weight: bold" > iPod Touch 5 Case, Bastex 3D Black and White Panda Bear Silicone Case for Apple  </h5> </a>
							<div class="emptydiv"> </div>
							
							<p style="text-align:left"> Protect your iPod with this stylish premium case.
							This high-quality case is thick and durable for optimal protection. </p>
							

						</div>
				
 					</div>';
    
	$x = '';	/* 
	
				
	while($row = mysqli_fetch_assoc($result)) {
		$name = $row['name'];
		$image = $row['image'];
		
		$x .= '
					<div class="row">
					
						<div class="col-md-6 p">
						     
							<img class="productimage border" src="'.$image.'"/>
							<div class="emptydiv"> </div>
							
							<a class = "bottomtext" href="http://localhost/websiteproject/productinfo.php?name=Flower Quartz Analog Wrist Watch"> <h5 style="font-weight: bold" > '.$name.' </h5> </a>
							<div class="emptydiv"> </div>
							
							<p style="text-align:left">  </p>
							
						</div>';
		$anotherrow = mysqli_fetch_assoc($result);

		$name = $anotherrow['name'];
		$image = $anotherrow['image'];		
		if($row){
			$x .=	'	
						<div class="col-md-6 p">
						    <img class="'.$image.'" src="images/electronics.jpg"/>
							<div class="emptydiv" > </div>
							
							<a class = "bottomtext" href="http://localhost/websiteproject/productinfo.php?name=Bastex 3D Black and White Panda Bear Silicone Case"> <h5 style="font-weight: bold" > '.$name.' </h5> </a>
							<div class="emptydiv"> </div>
							
							<p style="text-align:left"> Protect your iPod with this stylish premium case.
							This high-quality case is thick and durable for optimal protection. </p>
							

						</div>
				
					</div>';
		}else{
			$x .= '
					</div>';
		}
	}
	
	*/
	
?>

<!DOCTYPE HTML>

<html>

   
   <body>
		
			<div class="products" style="background:#191918 " >  <!--  #353130 #2d2c2b #191918 -->
			    
				<div class="container">
				    
					<div class="emptydiv"> </div>
					<h3 style="color:red" > All products </h3>
					<div class="productline border"> </div>					
					<div class="emptydiv"> </div>
					
					<!-- 
								<div class="row">
					
						<div class="col-md-6 p">
						     
							<img class="productimage border" src="images/camera.jpg"/>
							<div class="emptydiv"> </div>
							
							<a class = "bottomtext" href="http://localhost/websiteproject/productinfo.php?name=Fuji Instax Mini 25"> <h5 style="font-weight: bold" > In a Flash </h5> </a>
							<div class="emptydiv"> </div>
							
							<p style="text-align:left"> Make new memories with instant cameras like a Fuji Instax Mini 25,
							a Leica Sofort, or a Polaroid instant-print camera—plus a Lomo'Instant Automat from Lomography. </p>
							
						</div>
					
						<div class="col-md-6 p">
						    <img class="productimage border" src="images/shoes.png"/>
							<div class="emptydiv" > </div>
							
							<a class = "bottomtext" href="http://localhost/websiteproject/productinfo.php?name=Nike Cortez running shoes"> <h5 style="font-weight: bold" > That ’70s Shoe </h5> </a>
							<div class="emptydiv"> </div>
							
							<p style="text-align:left"> Step out in a pair of vintage-style trainers like Nike Cortez running shoes, 
							classic New Balance trainers, or a pair of sneakers from Le Coq Sportif—plus a pair of the new adidas Iniki runners.</p>
							

						</div>
				
					</div>
					
					<div class="row">
					
						<div class="col-md-6 p">
						     
							<img class="productimage border" src="images/watch.jpg"/>
							<div class="emptydiv"> </div>
							
							<a class = "bottomtext" href="http://localhost/websiteproject/productinfo.php?name=Flower Quartz Analog Wrist Watch"> <h5 style="font-weight: bold" > Analog Wrist Watch </h5> </a>
							<div class="emptydiv"> </div>
							
							<p style="text-align:left"> Sanwood Women's Fashion Vintage Bronze Case Cat & Flower Quartz Analog Wrist Watch.
														Blue Color. </p>
							
						</div>
					
						<div class="col-md-6 p">
						    <img class="productimage border" src="images/electronics.jpg"/>
							<div class="emptydiv" > </div>
							
							<a class = "bottomtext" href="http://localhost/websiteproject/productinfo.php?name=Bastex 3D Black and White Panda Bear Silicone Case"> <h5 style="font-weight: bold" > iPod Touch 5 Case, Bastex 3D Black and White Panda Bear Silicone Case for Apple  </h5> </a>
							<div class="emptydiv"> </div>
							
							<p style="text-align:left"> Protect your iPod with this stylish premium case.
							This high-quality case is thick and durable for optimal protection. </p>
							

						</div>
				
					</div>

					-->

					<?php while($row = mysqli_fetch_assoc($result)) { 
						$name = $row['name'];
						$image = $row['image'];
						$price = $row['price'];
						$description = $row['information'];
					?>

					<div class="row">
					
						<div class="col-md-6 p">
						    
								<a href="http://localhost/websiteproject/productinfo.php?name=<?php echo $name; ?>">
								
								<img class="productimage border" src= <?php echo $image; ?> />
								<div class="emptydiv"> </div>
								
								</a>
							
							
							<a class = "bottomtext" style="text-align:left"  href="http://localhost/websiteproject/productinfo.php?name=<?php echo $name; ?>"> <h5 style="font-weight: bold" > <?php echo $name; ?>  </h5> </a>

							
							<p style="text-align:left; font-weight: bold;"> <?php echo $price; ?>Tk </p>
							
							<p style="text-align:left"> <?php echo $description; ?> </p>
							
						</div>
					
					<?php $anotherrow = mysqli_fetch_assoc($result);
						  if(!$anotherrow){ ?> 
						  </div>
					<?php break; } 
						
						$name = $anotherrow['name'];
						$image = $anotherrow['image'];
						$description = $anotherrow['information'];
						$price = $anotherrow['price'];
					?>

						<div class="col-md-6 p">
						    <a href="http://localhost/websiteproject/productinfo.php?name=<?php echo $name; ?>">
								
								<img class="productimage border" src= <?php echo $image; ?> />
								<div class="emptydiv"> </div>
								
								</a>
							
							<a class = "bottomtext" style="text-align:left" href="http://localhost/websiteproject/productinfo.php?name=<?php echo $name; ?>"> <h5 style="font-weight: bold" >  <?php echo $name; ?> </h5> </a>

							
							<p style="text-align:left; font-weight: bold;"> <?php echo $price; ?>Tk </p>
							
							<p style="text-align:left"> <?php echo $description; ?> </p>

						</div>
						
					</div>
				   <?php 
								?>
				
				   <?php 
					}
				   ?>
	
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