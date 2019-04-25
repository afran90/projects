<?php 
   include 'header.php';
   $firstname =  $_SESSION['first_name'];
   $lastname = $_SESSION['last_name'];
    
?>


<!DOCTYPE html>
	<html>
		<head>
			<title>Success</title>
			<link rel="stylesheet" href="css/profile.css" />
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
			
			<h2 align="center" style="padding:50px; color:blue;"> <?php echo  $firstname.' '.$lastname; ?> </h2>
			
			<div class="container border" width="500px">
				
				<?php include 'database.php'; 
				
				$email = $_SESSION['email'];
				$query = "SELECT * FROM user WHERE email='$email'";
				$result = mysqli_query($link, $query);
				$user = mysqli_fetch_assoc($result);
				$phoneno = $user['phoneno'];
				$gender = $user['gender'];
				?>
				
				<label> <h2> Email </h2> </label> <br>
				<label>  <?php echo $email; ?> </label> <br>
				<label> <h2> Phone no. </h2> </label> <br>
				<label> <?php echo $phoneno; ?> </label> <br>
				<label> <h2> Gender </h2> </label> <br>
				<label> <?php echo $gender; ?> </label> <br>
			
			</div>
			
        <div style="height:700px">
		
		</div>
			
		
		<?php   include 'footer.html'; ?>
		
		</body>

	
	</html>

