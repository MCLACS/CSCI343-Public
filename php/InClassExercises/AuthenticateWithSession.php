<?php
session_start();

$validuser = "Tim";
$validpass = "letmein";
$username = "";

$login = false;
if ( isset($_SESSION['login']) )
	$login = $_SESSION['login'];

if ($login == false && isset($_POST['user']) && isset($_POST['pass'])) 
{ 
	// the user has entered a username and password...
	$username = $_POST['user'];		
	$password = $_POST['pass'];		
	
	// check to see if it is valid...
	if ($username == $validuser && $password == $validpass)
	{
		$login = true;
	}
	else
	{
		$login = false;
	}
	$_SESSION['login'] = $login;	
} 
else if ($login == false)
{ 
	$_SESSION['login'] = $login;	
} 
?>

<html>
	<head><title>AuthenticateWithSession.php</title></head>
	<body>
<?php if ($login == true) { ?>
		<p>Welcome <?= $username ?></p>
<?php } else { ?>
	<form action="AuthenticateWithSession.php" method="post">
		Username: <input type='text' name='user'/><br/>
		Password: <input type='password' name='pass'/><br/>
		<input type="submit" value="Submit"/>
	</form>
<?php } ?>
	</body>
</html>
