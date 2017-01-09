<?php
require_once 'dblogin.php';

$error = "";
$results = array();
$db_server = mysql_connect($db_hostname, $db_username, $db_password); 

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
		$query = "SELECT world.City.Name FROM world.City";
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
	}
}

mysql_close($db_server);
?>

<html>
	<head><title>Cities.php</title></head>
	<body>
	
<?php if ($error != "") { ?>
	<p><?= $error ?></p>
<?php } ?>

<?php foreach ($results as $city) { ?>
	<p><?= $city ?></p>
<?php } ?>

	</body>
</html>

