<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_hostname = getenv('OPENSHIFT_MYSQL_DB_HOST');
$db_database = 'test';
$db_username = 'test';
$db_password = 'test';

include 'functions.php';

connect($db_hostname, $db_database, $db_username, $db_password);
if ( isset($_POST['name']) AND isset($_POST['amount']))
{
	$name = $_POST['name'];
	$amount = $_POST['amount'];
	$sql = "INSERT INTO DONATION(NAME, AMOUNT) VALUES ('" . $name . "', " . $amount . ")";
	insert($sql);
}

$results = select("SELECT SUM(amount) FROM DONATION");
$total = $results[0][0];

$c = "red";
if ($total == "")
{
	$total = 0;
}
else if ($total >= 250)
{
	$c = "green";
}
else if ($total >= 100)
{
	$c = "yellow";
}

if ($total > 0)
{
	$results = select("SELECT * FROM DONATION");
}

disconnect();
echo $error;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>donations.php</title>

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

			<h2>Donate To Save The Fire Ants</h2>

			<form id="donationForm" action="http://php-csci343.rhcloud.com/08-OtherExamples/donations.php" method="post">
				<div class="form-group">
					<label for="name">Full Name</label>
					<input type="text" class="form-control"
						id="name" name="name" required placeholder="Full Name">
				</div>
				<div class="form-group">
					<label for="amount">Donation ($10 - $100)</label>
					<input type="number" class="form-control"
						id="amount" name="amount" min="10" max="100" required placeholder="Doonation ($10 - $100)">
				</div>
				<button type="submit" class="btn btn-info">Donate!</button>
			</form>

			<div class="row">
				<div class="donorList col-md-6">
					<h3>Donor List</h3>

					<ul id="listOfDonors">
<?php
if ($total > 0)
{
	foreach ($results as $row)
	{
	    echo "<li>" . $row[1] . " $" . $row[2] . "</li>";
	}
}
?>
					</ul>

				</div>
				<div class="col-md-6">
					<h3>Goal Target $250</h3>
					<div class="chart">
					</div>
					<p>Raised so far $<span id="sofar"><?= $total ?></span></p>
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
