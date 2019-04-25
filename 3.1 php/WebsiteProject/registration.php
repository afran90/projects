<?php
  
    $host = 'localhost'; 
   $user = 'root';
   $password = "";
   $db = 'mydb';
   $link = mysqli_connect($host, $user, $password, $db);
   
   include 'header.php';
?>

<?php 
  
   /* 
  c

    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email'])&& !empty($_POST['username']) 
		&& !empty($_POST['pass_word']) && !empty($_POST['confirm_pass']) &&
	    !empty($_POST['phone_no']) && !empty($_POST['gender'])){

	 $firstname = mysqli_real_escape_string($link, $_POST['first_name']);
	 $lastname =  mysqli_real_escape_string($link, $_POST['last_name']); 
	 $email =  mysqli_real_escape_string($link, $_POST['email']);
	 $username =  mysqli_real_escape_string($link, $_POST['username']);
	 $phoneno =  mysqli_real_escape_string($link, $_POST['phone_no']);
	 $gender =  mysqli_real_escape_string($link, $_POST['gender']);
	 $password =  mysqli_real_escape_string($link, md5($_POST['pass_word'])) ;
	 $confirmPassword =  mysqli_real_escape_string($link, md5($_POST['confirm_pass']));
	 $activationCode =  mysqli_real_escape_string($link, md5(rand()));
	 $status =  mysqli_real_escape_string($link, 'user');
	 $active = 0;
	 $query = "INSERT into user (firstname, lastname, username, gender, phoneno, email, password, activationCode, status, active) VALUES('$firstname', '$lastname', '$username', '$gender', '$phoneno', '$email', '$password', '$activationCode', '$status', $active)";
	 echo $query;
	 $resultInsert = mysqli_query($link, $query) or die();
	 echo "Done";
  }
   
    mysqli_close($link);
  }
  */
   	
?>

<!-- 
<?php
	
	  if(!empty($_POST)  ){
	
	if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email'])&& !empty($_POST['username']) 
		&& !empty($_POST['pass_word']) && !empty($_POST['confirm_pass']) &&
	    !empty($_POST['phone_no']) && !empty($_POST['gender'])){

	 $firstname = mysqli_real_escape_string($link, $_POST['first_name']);
	 $lastname =  mysqli_real_escape_string($link, $_POST['last_name']); 
	 $email =  mysqli_real_escape_string($link, $_POST['email']);
	 $username =  mysqli_real_escape_string($link, $_POST['username']);
	 $phoneno =  mysqli_real_escape_string($link, $_POST['phone_no']);
	 $gender =  mysqli_real_escape_string($link, $_POST['gender']);
	 $password =  mysqli_real_escape_string($link, md5($_POST['pass_word'])) ;
	 $confirmPassword =  mysqli_real_escape_string($link, md5($_POST['confirm_pass']));
	 $activationCode =  mysqli_real_escape_string($link, md5(rand()));
	 $status =  mysqli_real_escape_string($link, 'user');
	 $active = 0;
	 	 
	 //$query = "SELECT * FROM user WHERE email='$email'";
	  $query = "SELECT * FROM user WHERE username='$username'";
	 $result = mysqli_query($link, $query);
	 
	 if(mysqli_num_rows($result)>0) {
		//$_SESSION['message'] = 'User with this email already exists.';
		//header("location: error.php");
		$message= 'User with this email already exists.';
		echo "<script type='text/javascript'>alert('User with this email already exists');</script>";	
	 }else{
		 
	 if(strcmp($password, $confirmPassword) == 0 ) {
	    $query = "INSERT into user (firstname, lastname, username, gender, phoneno, email, password, activationCode, status, active) VALUES('$firstname', '$lastname', '$username', '$gender', '$phoneno', '$email', '$password', '$activationCode', '$status', $active)";
		$queryresult = mysqli_query($link, $query);
		
		if($queryresult){
				$_SESSION['email'] = $email;
				$_SESSION['first_name'] = $firstname;
				$_SESSION['last_name'] =  $lastname;
			
			 $_SESSION['active'] = 0;
			$_SESSION['logged_in'] = true;
			$_SESSION['justregistered'] = true;
			header("location: profile.php");
		}
		/*
		if($queryresult){
				        $_SESSION['active'] = 0;
						$_SESSION['logged_in'] = true; 
						$_SESSION['message'] =
						"Confirmation link has been sent to $email, please verify
						your account by clicking on the link in the message!";
						
						
						$to      = $email;
						$subject = 'Account Verification ( shoppingcart.com )';
						$messagebody = '
						Hello '.$first_name.',

						Thank you for signing up!

						Please click this link to activate your account:

						http://localhost/websiteproject/verify.php?email='.$email.'&activationcode='.$activationCode;
						
						mail($to, $subject, $messagebody);
						
						header("location: wait.php"); 

						
		}else{
			
						$message = 'Registration failed! Try again.';
						
						//header("location: error.php");
		}
		*/;
	 }
	 else{
		 
		 echo "<script type='text/javascript'>alert('Passwords did not match. Try again.');</script>";	
	 }
	 
	 
  }
  
	  }else{
		  
		  	 echo "<script type='text/javascript'>alert('Fill all the information first and try again.');</script>";	
	  }

	  
	  }
	 else{
		 echo "<script type='text/javascript'>alert('Fill all the information first and try again.');</script>";	
	 }
	
?>

-->

<!DOCTYPE html>

<html style="background:black">
	
	<div style="background:#f4cb42">
	
    <div class="row" style="height:200px">
	</div>
	
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
				
				<label for="user_name"> <b> Username </label> <br>
				<input class="box" type="text" placeholder="" name="username"/><br>

				<label for="pass_word"> <b> New Password </label> <br>
				<input class="box" type="password" placeholder="" name="pass_word"/><br>
				
				<label for="confirm_pass"> <b> Confirm Password </label> <br>
				<input class="box" type="password" placeholder="" name="confirm_pass"/><br>
				
				<label for="phone_no"> <b> Phone No. </label> <br>
				<input class="box" type="text" placeholder="" name="phone_no"/> <br>
				
				<label> <b> I am </label> <br>		
					<select name="gender">
		             <option value="Male"> Male</option>
					 <option value="Female"> Female </option>
					</select> <br><br>
			
				<button class="mybutton" type="submit"> Sign Up </button><br>
				</form>
			</div>
			
			
			</div>
			
			<div class="col-md-4">		
			</div>
		
	
	</div>
	
	
    <div class="row" style="height:200px">
	</div>
	
	</div>

</html>

	
	
	<?php include 'footer.html'; ?>
	