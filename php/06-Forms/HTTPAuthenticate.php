<?php
session_start();

$validuser = "Tim";
$validpass = "letmein";
$username = "";
$login = false;

if (isset($_SERVER['PHP_AUTH_USER']) && 
    isset($_SERVER['PHP_AUTH_PW'])) 
{ 
	// the user has entered a username and password...
	$username = $_SERVER['PHP_AUTH_USER'];
	$password = $_SERVER['PHP_AUTH_PW'];
	
	// check to see if it is valid...
	if ($username == $validuser && $password == $validpass)
	{
		$login = true;
	}
	else
	{
		$login = false;
	}
} 
else 
{ 
	header('WWW-Authenticate: Basic realm="My is My House!"'); 
	// this causes the browser to popup a username password box
	// if the user enters a username and password the PHP page 
	// reloads from the top...
	
	// if the user hits cancel, the following code runs...
	header('HTTP/1.0 401 Unauthorized'); 
	
	$login = false;
} 
?>

<html>
	<head><title>HTTPAuthenticate.php</title></head>
	<body>
<?php if ($login == true) { ?>
		<p>Welcome <?= $username ?></p>
<?php } else { ?>
		<p>You must enter a valid username/password to enter this site!</p>
<?php } ?>
	</body>
</html>
