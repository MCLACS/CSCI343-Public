<?php
session_start();

function sanitizeString($var) 
{ 
	if (get_magic_quotes_gpc()) 
	{
		$var = stripslashes($var); 
	}
	$var = strip_tags($var); 
	return $var; 	
}

	$clearSession = "";
	$colorAry = array();
	$color = -1;		
	if ( isset($_POST['clearSession']) ) 
		$clearSession = $_POST['clearSession'];				
	if ( isset($_POST['color']) ) 
		$color = $_POST['color'];				
	if ( isset($_SESSION['colorAry']) )
		$colorAry = $_SESSION['colorAry'];

	$color = sanitizeString($color);		
	$clearSession = sanitizeString($clearSession);		
	
	if ($clearSession == "clear")
	{
		$colorAry = array();
	}
	
	if ($color != -1)
		$colorAry[] = $color;

	$_SESSION['colorAry'] = $colorAry;	
?>

<html>
	<head>
		<title>SimpleSession.php</title>
	</head>

	<body>
		<form action="SimpleSession.php" method="post">
			Color: <input type="text" name="color" value="blue"/><br/>
			Clear Session <input type="checkbox" name="clearSession" value="clear"/><br/>
			<input type="submit" value="OK"/>
		</form>		
	<ul>
<?php
	foreach ($colorAry as $c)
	{
?>
		<li><?= $c ?></li>
<?php		
	}		
?>		
	</ul>
	</body>

<html>
