<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_hostname = getenv('OPENSHIFT_MYSQL_DB_HOST');
$db_database = 'test';
$db_username = 'test';
$db_password = 'test';

include 'functions.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
connect($db_hostname, $db_database, $db_username, $db_password);
if ( isset($_GET['name']) )
{
	insert("INSERT INTO Names (NameID, Name) VALUES (NULL, '" . $_GET['name'] . "')");
}
else
{
	$names = select("SELECT Name FROM Names");
	echo json_encode($names);
}
disconnect();

?>
