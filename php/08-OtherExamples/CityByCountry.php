<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_hostname = getenv('OPENSHIFT_MYSQL_DB_HOST');
$db_database = 'world';
$db_username = 'worlduser';
$db_password = 'worlduser';

include 'functions.php';

$where = '';
connect($db_hostname, $db_database, $db_username, $db_password);
if ( isset($_POST['country']) )
{
	$where = " AND Country.Name = '" . $_POST['country'] . "'";
}

$countries = select("SELECT Name FROM Country");
$sql = "SELECT City.Name FROM City, Country WHERE City.CountryCode = Country.Code " . $where;
$cities = select($sql);
#echo $sql;

disconnect();
echo $error;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CityByCountry.php</title>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- datatables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- custom local styles -->
    <style>
    	.chart {height: 50px; width:<?= $total ?>px; border: solid 1px black; background-color: <?= $c ?>;}
	</style>

  	</head>
  	<body>
		<!-- page content -->
		<div class="container">

			<h2>Cities by Country</h2>

			<form id="countryForm" action="http://php-csci343.rhcloud.com/08-OtherExamples/CityByCountry.php" method="post">
				<div class="form-group">
					<label for="country">Country Name</label>
					<select id="country" name="country" required placeholder="Country">
					<option selected></option>
					<?php
					foreach ($countries as $row)
					{
							if ( isset($_POST['country']) && $_POST['country'] == $row[0] )
							{
						    	echo "<option selected>" . $row[0] . "</option> ";
						    }
							else
							{
								echo "<option>" . $row[0] . "</option>";
							}
					}
					?>
					</select>
				</div>
				<button type="submit" class="btn btn-info">List Cities</button>
			</form>

			<div class="row">
				<div class="cities col-md-6">
					<h3>Cities</h3>

					<ul id="listOfCities">
					<?php
					if (isset($_POST['country']))
					{
						foreach ($cities as $row)
						{
							echo "<li>" . $row[0] . "</li>";
						}
					}
					else
					{
						echo "<li>Please enter a country.</li>";
					}
					?>
					</ul>

				</div>
			</div>
		</div>

		<!-- jquery -->
		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

		<!-- datatables -->
		<script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>

		<!-- custom local javascript -->
		<script>

		</script>
	</body>
</html>
