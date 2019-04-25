<?php
	
	if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['activationcode']) && !empty($_GET['activationcode']))
{
    $email = $mysqli->escape_string($_GET['email']); 
    $hash = $mysqli->escape_string($_GET['activationcode']); 
    
    // Select user with matching email and hash, who hasn't verified their account yet (active = 0)
    $result = $mysqli->query("SELECT * FROM user WHERE email='$email' AND activationCode='$activationcode'");

    if ( mysqli_num_rows($result)  == 0 )
    { 
        $_SESSION['message'] = "Account has already been activated or the URL is invalid!";
        header("location: error.php");
    }
    else {
        $_SESSION['message'] = "Your account has been activated!";
        
        $query = "UPDATE users SET active='1' WHERE email='$email'";
		$resultQuery = mysqli_query($link, $query) or die();
        
		$_SESSION['active'] = 1;
        
        header("location: success.php");
    }
}
else {
    $_SESSION['message'] = "Invalid parameters provided for account verification!";
    header("location: error.php");
}

?>

<?php


?>