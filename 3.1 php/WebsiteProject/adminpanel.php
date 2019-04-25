<!DOCTYPE HTML>

<!--  -->
<!-- 0123456789 style="height:100vh;" --> 

<?php 

include 'database.php';

$query = "SELECT COUNT(*) as total FROM user";
$result = mysqli_query($link, $query);
$count = mysqli_fetch_assoc($result);
$total = $count['total'];

?>

<html>
  
   <?php include 'adminheader.html'; ?>
   
   
	<div style="background:#aa320f; height:150px;" >
				
		      <div class="inner">
					
				<h2 style="color:orange; text-align: center; padding:25px;"> DASHBOARD </h2>

			  </div>
			  
	</div>
   
   
   <div class="container">
   
		<div class="row">
				<div class="col-md-6 col-lg-3 border" style="background:#42f4aa">
                                <div >
                                    <h2 style="color:blue"> <?php echo $_COOKIE['visitors']; ?> </h2>
                                    <span style="color:black"> DAILY VISITS </span>

                                </div>
				</div>
				
				<div class="col-md-6 col-lg-3 border" style="background:#f4be41">
                                <div>
                                    <h2 style="color:blue"><?php echo $total; ?> </h2>
                                    <span style="color:black"> REGISTERED USERS</span>

                                </div>
				</div>
				
					<?php 
						include 'database.php';

								$query = "SELECT * FROM visitor";
								$result = mysqli_query($link, $query);
								$data = mysqli_fetch_assoc($result);					
					?>
				
				<div class="col-md-6 col-lg-3 border" style="background:#41f4df">
                                <div>
                                    <h2 style="color:blue"> <?php echo $data['sales']; ?></h2>
                                    <span style="color:black"> PRODUCTS SOLD</span>

                                </div>
				</div>
				
				
				<div class="col-md-6 col-lg-3 border" style="background:#e52253">
                                <div>
                                    <h2 style="color:blue"><?php echo $data['income']; ?></h2>
                                    <span style="color:black"> TOTAL INCOME </span>

                                </div>
				</div>
				
				<div style="height:150px"> </div>
		</div>
		
		<div style="height:100px"> </div>
		
		<div class="row">
				
				
				<div class="col-md-6 col-lg-6">
				   
				        <h3> User Information</h3>
						<table class="table" >
                                  
								  <tr>
								    <td>   </td>
									<td>Name</td>
									<td>Phone no.</td>
                                    <td>Gender</td>
                                  </tr>
                                  <tbody>
								  
								  <?php 
								  include 'database.php';

								$query = "SELECT * FROM user";
								$result = mysqli_query($link, $query);
								  $i =1;
								  while($user = mysqli_fetch_assoc($result) ){
												$firstname = $user['firstname'];
												$lastname = $user['lastname'];
												$email = $user['email'];
												$phoneno = $user['phoneno'];
												$gender = $user['gender'];
												
								?>
                                        <tr>
											
											<td> <?php echo $i; ?>  </td>	
                                            <td>
                                                <div>
                                                    <h6> <?php echo $firstname.' '.$lastname ; ?> </h6>
                                                            <span>
                                                                <a href="#"><?php echo $email; ?> </a>
                                                            </span>
                                                </div>
                                            </td>
                                            
											<td>
                                                <span > <?php echo $phoneno; ?> </span>
                                            </td>
                                                   
											<td>
                                                 <span> <?php echo $gender; ?> </span>													   
                                            </td>
                                        </tr>
										
								  <?php $i++;} ?>

                                  </tbody>
						</table>
   
				</div>
			
			
			<div class="col-md-6 col-lg-6">
			
			<h3> Messages </h3>
			<div style="overflow-y: scroll; height:500px;"> 

			<?php 
					   include 'database.php';
   
						$query = "SELECT * FROM contact";
						$result = mysqli_query($link, $query);
			
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
					<p>	<?php echo $message; // try span?>	</p> 
				</div>	
			
			</div>
			
			<?php } ?>
			</div>
			
		</div>
				
		</div>
				
				
		
			
		<div style="height: 150px">
			
		</div>
			
			
				
				
	
   
   </div>
  

   <?php include 'footer.html'; ?>   
			        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
			
   

</html>