<!DOCTYPE HTML>

<!--  -->
<!-- 0123456789 --> 

<?php
	
   include 'database.php';
   
	$query = "SELECT * FROM contact";
	$result = mysqli_query($link, $query);

?>

<html>
    
   <?php include 'header.php'; 	unset($_GET['feedback']); ?>
   
   <body>
		

		<div style="height:100%">
			
			<div style="height: 150px">
			
			</div>
			
			<?php 
					while($contact = mysqli_fetch_assoc($result) ){
						$firstname = $contact['firstname'];
						$lastname = $contact['lastname'];
						$email = $contact['email'];
						$message = $contact['message'];
			
			?>
			<div class="container border" style="height:100px">
				
				<div class="row" style="text-align: center">
					<h3> <?php echo $firstname.' '.$lastname; ?> says: </h3>  
					
				</div>
				
			   <div class="row" style="text-align: center">
					<p>	<?php echo $message; ?>	</p>
				</div>	
			
			</div>
			
			<?php } ?>
		
		</div>
		
	 <?php include 'footer.html'; ?>		
			

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
			
   
   </body>
 


</html>