<?php
	session_start();
		
	$x = "Sign In";
	$y = "Register";
	$z = "Home";
	
	$l = "login.php";
	$m = "registration.php";
	$n = "index.php";
	
	if(isset($_SESSION['email'])){
		
		include 'database.php';
		$query = "select count(*) as totalitem from cart";	
				
		$result = mysqli_query($link, $query);
		$c = mysqli_fetch_assoc($result);
		$cartitemno = $c['totalitem'];
		
		if($cartitemno>0)
			$x = "Cart($cartitemno)";
		else
			$x="Cart";
		
			$y = "Log out";
            $z = "Hi ".$_SESSION['first_name'];
			
			$l = "cart.php";
			$m = "logout.php";
			$n = "profile.php";
			
	   }
	   
?>

<!DOCTYPE HTML>

<html>
 
   <head>
       <meta charset="utf-8" />
	   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	   
	   <link rel="stylesheet" href="css/bootstrap.min.css" />
	   <link rel="stylesheet" href="css/mycss.css" />
	   <link rel="stylesheet" href="css/product.css" />
	   <link rel="stylesheet" href="css/productinfo.css" />
	   <link rel="stylesheet" href="css/profile.css" />
	   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	   
	   <title> Shoppophilia </title>
	   
   </head>
   
   <body>
			<div class="header">
				
		      <div class="inner">
				
				
					<a href = "index.php" class="sitename"> Shopping Cart </a>
					
					<nav class="navoptions">
					
						<a href=<?php echo $n; ?> class="padleft navtext"> <?php echo $z; ?> </a>
						<a href="product.php" class="navtext"> Products </a>
						<a href="contact.php"  class="navtext"> Contact us </a>
							            
			          <a href=<?php echo $m; ?> class="right whitetext"> <i class="fa fa-user-circle"></i> <?php echo $y; ?> </a>
					  
					  <a href=<?php echo $l; ?> class="right whitetext"> <i class="fa fa-user"> </i> <?php echo $x; ?> </a>

	        												
					</nav>
		
			  </div>
			  
			</div>
			
			
			
   
   </body>
 


</html>