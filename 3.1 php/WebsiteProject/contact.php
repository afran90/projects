<?php
  
   $host = 'localhost'; 
   $user = 'root';
   $password = "";
   $db = 'mydb';
   $link = mysqli_connect($host, $user, $password, $db);
	
?>

<!-- 

-->

<!DOCTYPE html>

<html style="background:black">
    
	<?php include 'header.php'; ?>
	
    <div style="background:#f4cb42">
	
	<div style="height:100px"> </div>
	
	<div class="container" style="padding-left:150px; padding-right:150px;">
		<h1 align="center" style="color:yellow; background: blue;" > CONTACT US </h1>
    </div>
	
   <div style="height:100px"> </div>	
	
	<div class="row">
	
	        <div class="col-md-4">		
			</div>
			
			<div class="col-md-4">
			
			<div class="border" align="center">
				<form action="" method="POST">
				<label for = "first_name"> <b> First Name </b> </label><br>
				<input class="box" type="text" placeholder="" name="first_name"/><br>

				<label for="last_name"> <b> Last Name </label><br> 
				<input class="box" type="text" placeholder="" name="last_name"/><br>
				
			    <label for="email"> <b> Your Email </label> <br>
				<input class="box" type="text" placeholder="" name="email"/><br>
				
				<label for="message"> <b> Message </label> <br>
				<input class="box" type="text" placeholder="" name="message" style="height:200px"/> <br>


				<button class="mybutton" type="submit" value="submit" > Send your Message </button><br>
				</form>
				
				<?php if( isset($_GET['feedback']) ) {echo $_GET['feedback'];} ?>
			</div>
			
			
			</div>
			
			<div class="col-md-4">		
			</div>
		
	
	</div>
	
	
    <div class="row" style="height:200px">
	</div>
	
	</div>
	 
	
	
	<?php include 'footer.html'; ?>
	
</html>
	
<?php
	
    if(!empty($_POST)  ){
	if( !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email'])&& !empty($_POST['message'])  ){

			$firstname = mysqli_real_escape_string($link, $_POST['first_name']);
			$lastname =  mysqli_real_escape_string($link, $_POST['last_name']); 
			$email =  mysqli_real_escape_string($link, $_POST['email']);
			$message =  mysqli_real_escape_string($link, $_POST['message']);

			$query = "INSERT into contact (firstname, lastname, email, message) VALUES('$firstname', '$lastname', '$email', '$message')";
			$queryresult = mysqli_query($link, $query);
		
		if($queryresult){
			echo "<script type='text/javascript'>alert('Form successfully submitted. Thank you for contacting us.');</script>";			
		}else{	
			 echo "<script type='text/javascript'>alert('We are sorry. There was a problem. Please try again.');</script>";
			header("location: contact.php"); 				 
		}
	 }
	 else{
			 header("location: contact.php?feedback=Please fill all the fields first and then submit.");
			//echo "<script type='text/javascript'>alert('Please fill all the fields first and then submit.');</script>"; 
	 }
	 
	}
	 
	  
	
?>