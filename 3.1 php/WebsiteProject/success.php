<?php

session_start();
$_SESSION['message'] = 'Your account has been activated';
?>

<!DOCTYPE html>
<html>
	<head>
      
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	 
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/mycss.css" />
		<link rel="stylesheet" href="css/style.css" />
	 
	 
		<title>Success</title>
	</head>


	<body>
		<div class="form">
			<h1><?= 'Success'; ?></h1>
			<p>
			<?php 
				if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
					echo $_SESSION['message'];    
				else:
				header( "location: index.html" );
				endif;
			?>
			</p>
		<a href="index.html"><button class="button button-block"/>Home</button></a>
		</div>
	</body>
</html>
