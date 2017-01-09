<?php
	$type = "new";
	$name = "";
	$age = "";
?>

<html>
	<head>
		<title>The People Project!</title>
		<link rel="stylesheet" type="text/css" href="mystyles.css">
	</head>
	<body>
		<h1>Create a New Person</h1>
		<form method='post' action='List.php'>
			<p>Name: <input type='text' name='name' id='name' value='<?= $name ?>'/></p>
			<p>Age: <input type='text' name='age' id='age' value='<?= $age ?>'/></p>
			<p><input type='hidden' name='type' id='type' value='<?= $type ?>'/></p>
			<p><input type='submit'/></p>
		</form>
	</body>
</html>