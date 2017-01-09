<?php

session_start();

$wishlist = array();
if (isset($_SESSION['list']))
{
	$wishlist = $_SESSION['list'];
}

if (isset($_GET['item']))
{
	$wishlist[$_GET['item']] = $_GET['item']; 
}

if (isset($_GET['delete']))
{
	//echo "deleting $_GET['delete'])";
	unset($wishlist[$_GET['delete']]);
}

$_SESSION['list'] = $wishlist;

?>

<html>
	<head>
		<title>What I Want For XMas</title>
		<style>
			table, td
			{
				border-collapse: collapse;
				border: 1px black solid; 
				width:500px;
				margin: 50px;
			}

		</style>
	</head>
	<body>
		<h1>My Wish List</h1>
		<table>
			<tr><th>Item</th><th>Delete</th></tr>
<?php
	foreach($wishlist as $i)
	{
		$url = "WishList.php?delete=" . $i;
?>
			<tr><td><?= $i ?></td><td><a href="<?= $url ?>">X</a></td></tr>
<?php
	}	
?>			
		</table>

		<form action="WishList.php" method="GET">
			Item: <input type='text' name="item"/><br/>
			<input type='submit' value="Add"/>
		</form>

	</body>

</html>