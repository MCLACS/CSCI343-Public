<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_hostname = getenv('OPENSHIFT_MYSQL_DB_HOST');
$db_database = 'world';
$db_username = 'worlduser';
$db_password = 'worlduser';

include 'functions.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
connect($db_hostname, $db_database, $db_username, $db_password);
if ( isset($_POST['country']) )
{
	$where = " AND Country.Name = '" . $_POST['country'] . "'";
	$cities = select("SELECT City.Name FROM City, Country WHERE City.CountryCode = Country.Code " . $where);
	echo json_encode($cities);
}
else
{
	$countries = select("SELECT Name FROM Country");
	echo json_encode($countries);
}
disconnect();

?>
