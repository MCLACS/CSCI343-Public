<?php
require_once 'dblogin.php';

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

$error = "";
$results = array();
$countries = array();
$country = "United States";
if ( isset($_POST['country']) ) 
		$country = $_POST['country'];	
	
$db_server = mysql_connect($db_hostname, $db_username, $db_password); 

$country = sanitizeMySQL($country);

if ($db_server == FALSE) 
{
	$error = "Unable to connect to MySQL: " . mysql_error();
}
else
{
	if (mysql_select_db($db_database) == FALSE)
	{
		$error = "Unable to select MySQL DB: " . mysql_error();
	}
	else
	{
		$query = "SELECT world.City.Name FROM world.City, world.Country " .
			"WHERE world.Country.Name = '" . 
	   		$country . "' AND world.City.CountryCode = world.Country.Code";
	
		$result = mysql_query($query); 
		if ($result == FALSE)
		{
			$error = "MySQL query error: " . mysql_error();
		}
		else
		{
			$rows = mysql_num_rows($result); 
			for ($j = 0; $j < $rows; $j++) 
			{ 
				$row = mysql_fetch_row($result);
				$results[] = $row[0];
			}
		}
		
		$query = "SELECT world.Country.Name FROM world.Country";	
		$result = mysql_query($query); 
		if ($result == FALSE)
		{
			$error = "MySQL query error: " . mysql_error();
		}
		else
		{
			$rows = mysql_num_rows($result); 
			for ($j = 0; $j < $rows; $j++) 
			{ 
				$row = mysql_fetch_row($result);
				$countries[] = $row[0];
			}
		}
	}		
}

mysql_close($db_server);
?>

<html>
	<head><title>CitiesByCountry.php</title></head>
	<body>	
	<form action = "CitiesByCountry2.php" method = "POST">
    	Country: <select name="country" id="country">
<?php foreach ($countries as $c) 
{ 
	if ($c == $country)
	{
?>
			<option selected='SELECTED'><?= $c ?></option>
<?php 
	} 
	else 
	{
?>
			<option><?= $c ?></option>
<?php 
	} 
} 
?>					
		</select>
    	<input type="submit"/>
    </form>
<?php if ($error != "") { ?>
	<p><?= $error ?></p>
<?php } ?>

<?php foreach ($results as $city) { ?>
	<p><?= $city ?></p>
<?php } ?>

	</body>
</html>