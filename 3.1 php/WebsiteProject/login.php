<?php
	
   $host = 'localhost'; 
   $user = 'root';
   $password = "";
   $db = 'mydb';
   $link = mysqli_connect($host, $user, $password, $db);
   include 'header.php';
?>

<!-- //  $ () 1234567890 -->


<?php	

   	if(!empty($_POST)  ){

		if(!empty($_POST['user_name']) && !empty($_POST['pass_word'])){
				
				$username = $_POST['user_name'];
				$query = "SELECT * FROM user WHERE username= '$username'";
				$resultSelect = mysqli_query($link, $query);
				if(mysqli_num_rows($resultSelect) == 0 ){    // user doesn't exist 							
						$_SESSION['message'] = "User with that email doesn't exist!";
						$_SESSION['username'] = $_POST['user_name'];
						$_SESSION['rows'] = $rows;
						header("location: error.php");
				}else{ 												// user exists
					 //$row = mysqli_fetch_row($resultSelect);
					 $user = mysqli_fetch_assoc($resultSelect);
				     $password = $user['password'];

					 if(strcmp($password, md5($_POST['pass_word']) )== 0 ){  							

								$_SESSION['email'] = $user['email'];
								$_SESSION['first_name'] = $user['firstname'];
								$_SESSION['last_name'] = $user['lastname'];
								$_SESSION['active'] = $user['active'];
	
								$_SESSION['logged_in'] = true;
								header("location: profile.php");
					}
					else{
							echo "You have entered wrong password, try again!";
								//$_SESSION['message'] = "You have entered wrong password, try again!";
								//header("location: error.php");
					}
				}
		}
		else{
			echo "Enter both username and password";
		}
   
    mysqli_close($link);
  }

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
	 
	 <title> LOG IN </title>
  </head>
  
  
  <body>
  
	<div style="background:#353130">
	
	<div class="container" style="padding:300px">
			
			<div class="border" align="center">
				<form method="post" action="">
				<label style="color:white" for = "user_name"> <b> Username </b> </label><br>
				<input class="box type="text" placeholder="Username" name="user_name"/><br>

				<label style="color:white" for="pass_word"> <b> Password </label><br> 
				<input class="box" type="password" placeholder="Password" name="pass_word"/><br><br>
			
				<button class="mybutton" type="submit"> Log in </button><br>
				</form>
			</div>
			
			
		
			
		
	

	
	<div style="height:100px"> </div>

	
	</div>
	
		
	<?php include 'footer.html'; ?>
	
				        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	
  </body>

</html>