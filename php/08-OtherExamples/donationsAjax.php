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
if ( isset($_POST['name']) AND isset($_POST['amount']))
{
	$name = $_POST['name'];
	$amount = $_POST['amount'];
	$sql = "INSERT INTO DONATION(NAME, AMOUNT) VALUES ('" . $name . "', " . $amount . ")";
	insert($sql);
	echo json_encode($error);
}
else
{
	$results = select("SELECT * FROM DONATION");
	echo json_encode($results);
}
disconnect();

?>
