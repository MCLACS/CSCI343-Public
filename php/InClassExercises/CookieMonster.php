<?php
session_start();

$first = "[first name]";
$last = "[last name]";
$color = "[color]";

if (isset($_POST['first'])) 
{ 
	if (isset($_POST['first']))
		$first = $_POST['first'];
	if (isset($_POST['last']))
		$last = $_POST['last'];
	if (isset($_POST['color']))
		$color = $_POST['color'];

	setcookie('first', $first , time() + 60);
	setcookie('last', $last , time() + 60);
	setcookie('color', $color , time() + 60);	
} 
else 
{ 
	if (isset($_COOKIE['first']))
		$first = $_COOKIE['first'];
	if (isset($_COOKIE['last']))
		$last = $_COOKIE['last'];
	if (isset($_COOKIE['color']))
		$color = $_COOKIE['color'];
} 
?>

<html>
	<head><title>CookieMonster.php</title></head>
	<body>
	<form action="CookieMonster.php" method="post">
		First: <input type='text' name='first' value='<?= $first ?>'><br/>
		Last: <input type='text' name='last' value='<?= $last ?>'><br/>
		Favorite Color: <input type='text' name='color' value='<?= $color ?>'><br/>
		<input type="submit" value="Submit"/>
	</form>
	</body>
</html>
