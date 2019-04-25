<!DOCTYPE HTML>

<!--  -->
<!-- 0123456789 --> 

<?php
	
   include 'database.php';

	if( !isset($_COOKIE['time']) ) {
		setcookie('time', 1,  time()+86400);
		setcookie('visitors', 1);
		$query = "Update visitor set number=0";
		$updateresult = mysqli_query($link, $query);
	}
	
		$query = "Update visitor set number=number+1";
		$updateresult = mysqli_query($link, $query);
		
		$query = "SELECT * FROM visitor";
		$result = mysqli_query($link, $query);
		
		$visitor = mysqli_fetch_assoc($result);
		setcookie('visitors', $visitor['number']);

?>

<html>
    
   <?php include 'header.php'; 	unset($_GET['feedback']); ?>
   
   <body >
			
			<div style="background:black">
				<div class="banner">
				
					<div class="container center">					
						<h2>Sit back at home and <br> shop anyting you want <br> <button onClick="location.href='product.php'" type="button" class="btn btn-success">SHOP NOW</button></h2>
					</div>
				</div>
			</div>
			
			
			<div class="products">
			    
				<div class="container">
				    
					<div class="emptydiv"> </div>
					<h3 style="color:red" > Featured </h3>
					<div class="line border"> </div>					
					<div class="emptydiv"> </div>
					
					<div class="row">
					
						<div class="col-md-6 p">
						    
								<a href="http://localhost/websiteproject/productinfo.php?name=Fuji Instax Mini 25">
								
								<img class="productimage border" src="images/camera.jpg"/>
								<div class="emptydiv"> </div>
								
								</a> 
						
							<div class="emptydiv"> </div>
							
							<a class = "bottomtext" href="http://localhost/websiteproject/productinfo.php?name=Fuji Instax Mini 25"> <h5 style="font-weight: bold" > In a Flash </h5> </a>
							<div class="emptydiv"> </div>
							
							<p style="text-align:left"> Make new memories with instant cameras like a Fuji Instax Mini 25,
							a Leica Sofort, or a Polaroid instant-print camera—plus a Lomo Instant Automat from Lomography. </p>
							
						</div>
					
						<div class="col-md-6 p">
							
								<a href="http://localhost/websiteproject/productinfo.php?name=Nike Cortez running shoes">
								
								 <img class="productimage border" src="images/shoes.png"/>
								<div class="emptydiv"> </div>
								
								</a> 
							
						   
							<div class="emptydiv" > </div>
							
							<a class = "bottomtext" href="http://localhost/websiteproject/productinfo.php?name=Nike Cortez running shoes"> <h5 style="font-weight: bold" > That ’70s Shoe </h5> </a>
							<div class="emptydiv"> </div>
							
							<p style="text-align:left"> Step out in a pair of vintage-style trainers like Nike Cortez running shoes, 
							classic New Balance trainers, or a pair of sneakers from Le Coq Sportif—plus a pair of the new adidas Iniki runners.</p>
							

						</div>
				
					</div>
					
					<div class="row">
					
						<div class="col-md-6 p">
						     
							 <a href="http://localhost/websiteproject/productinfo.php?name=Flower Quartz Analog Wrist Watch">
								
								 <img class="productimage border" src="images/shoes.png"/>
								<div class="emptydiv"> </div>
								
							</a> 
							
							<div class="emptydiv"> </div>
							
							<a class = "bottomtext" href="http://localhost/websiteproject/productinfo.php?name=Flower Quartz Analog Wrist Watch"> <h5 style="font-weight: bold" > Analog Wrist Watch </h5> </a>
							<div class="emptydiv"> </div>
							
							<p style="text-align:left"> Sanwood Women's Fashion Vintage Bronze Case Cat & Flower Quartz Analog Wrist Watch.
														Blue Color. </p>
							
						</div>
					
						<div class="col-md-6 p">
							 <a href="http://localhost/websiteproject/productinfo.php?name=Bastex 3D Black and White Panda Bear Silicone Case">
								
								 	    <img class="productimage border" src="images/electronics.jpg"/>
								<div class="emptydiv"> </div>
								
							</a> 
						
					
							<div class="emptydiv" > </div>
							
							<a class = "bottomtext" href="http://localhost/websiteproject/productinfo.php?name=Bastex 3D Black and White Panda Bear Silicone Case"> <h5 style="font-weight: bold" > iPod Touch 5 Case, Bastex 3D Black and White Panda Bear Silicone Case for Apple  </h5> </a>
							<div class="emptydiv"> </div>
							
							<p style="text-align:left"> Protect your iPod with this stylish premium case.
							This high-quality case is thick and durable for optimal protection. </p>
							

						</div>
				
					</div>
			
				</div>
				

			</div>
			
			<div class="secondlast">
				
				<div class="row">
					<div class="col-md-2">
					</div>									
					<div class="col-md-2">	
			         </div>
						 
				    <div class="col-md-2">
							<h3> VISIT </h3>
							<p> 141 & 142, Love Road, <br>
							    Tejgaon Industrial Area,<br> 
								Dhaka-1208, <br> Bangladesh </p>	
			         </div>	
						 
					<div class="col-md-2">	
						 	<h3> CONTACT US </h3>
							<p> xyz@gmail.com </p>
			        </div>
						 
					<div class="col-md-2">	
			        </div>
					<div class="col-md-2">	
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