<?php
require_once 'dblogin.php';
require_once 'Person.php';

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
		if ( isset($_POST['name']) && isset($_POST['age']) && isset($_POST['type']))
		{
			$type = isset($_POST['type']);
			$name = $_POST['name'];
			$age = $_POST['age'];

			$query = "";
			if ($type == 'new')
			{
				$query = "INSERT INTO PEOPLE " .
					 "(PEOPLE_NAME, PEOPLE_AGE) VALUES " .
					 "('" . $name . "', '" . $age . "')";
			}
			else
			{
				$query = "UPDATE PEOPLE " .
					 "SET PEOPLE_NAME = '". $name ."', PEOPLE_AGE = '" . $age . "'";
			}

			$result = mysql_query($query);
			if ($result == FALSE)
			{
				$error = "MySQL query error: " . mysql_error();
			}
		}

		$query = "SELECT PEOPLE_NAME, " .
		 "PEOPLE_AGE " .
		 "FROM PEOPLE ORDER BY " .
		 "PEOPLE_NAME ASC";

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
				$p = new Person($row[0], $row[1]);
				$results[] = $p;
			}
		}
	}
}

mysql_close($db_server);
?>

<html>
	<head>
		<title>The People Project!</title>
		<link rel="stylesheet" type="text/css" href="mystyles.css">
	</head>
	<body>

<?php if ($error != "") { ?>
	<p><?= $error ?></p>
<?php } ?>

	<table>
	<tr><th>Name</th><th>Age</th></tr>
<?php foreach ($results as $person) { ?>
	<tr>
		<td><?= $person->getname() ?></td>
		<td><?= $person->getage() ?></td>
	</tr>
<?php } ?>
	</table>
	<br/><a href='Edit.php'><img title='New Person!' src="new.jpg"/></a>
	</body>
</html>
