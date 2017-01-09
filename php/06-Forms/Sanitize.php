<?php

function sanitizeString($var) 
{ 
	if (get_magic_quotes_gpc()) 
	{
		$var = stripslashes($var); 
	}
	$var = strip_tags($var); 
	return $var; 	
}

function sanitizeMySQL($var) 
{ 
	$var = mysql_real_escape_string($var); 
	$var = sanitizeString($var); 
	return $var; 
}

	$txt = -1;
		
	if ( isset($_POST['txt']) ) 
		$txt = $_POST['txt'];		
	
	$txt = sanitizeString($txt);

?>

<html>
	<head>
		<title>Sanitize.php</title>
	</head>

	<body>
		<form action="Sanitize.php" method="post">
			Text: <input type="text" name="txt" value="Type something"/><br/>
			<input type="submit" value="OK"/>
		</form>
		
		<pre>
<?php		
			print_r($txt);echo("\n");
?>			
		</pre>
	</body>

<html>
