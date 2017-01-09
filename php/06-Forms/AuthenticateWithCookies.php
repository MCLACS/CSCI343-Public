<?php
session_start();

$validuser = "Tim";
$validpass = "letmein";
$username = "";
$login = false;

if (isset($_POST['user']) && isset($_POST['pass'])) 
{ 
	// the user has entered a username and password...
	$username = $_POST['user'];		
	$password = $_POST['pass'];		
	
	// check to see if it is valid...
	if ($username == $validuser && $password == $validpass)
	{
		$login = true;
		setcookie('user', $username , time() + 60);
	}
	else
	{
		$login = false;
	}
} 
else 
{ 
	$login = false;
	if (isset($_COOKIE['user']))
		$username = $_COOKIE['user'];
}
?>

<html>
	<head><title>AuthenticateWithCookies.php</title></head>
	<body>
<?php if ($login == true) { ?>
		<p>Welcome <?= $username ?></p>
<?php } else { ?>
	<form action="AuthenticateWithCookies.php" method="post">
		Username: <input type='text' name='user' value=<?= $username ?>><br/>
		Password: <input type='password' name='pass'/><br/>
		<input type="submit" value="Submit"/>
	</form>
<?php } ?>
	</body>
</html>
