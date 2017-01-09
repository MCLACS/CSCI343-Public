<?php
	$name = "";
	if ( isset($_GET['name']) ) 
		$name = $_GET['name'];		

	$strength = 0;
	if ( isset($_GET['strength']) ) 
		$strength = $_GET['strength'];		

	$health = 0;
	if ( isset($_GET['health']) ) 
		$health = $_GET['health'];		

	$luck = 0;
	if ( isset($_GET['luck']) ) 
		$luck = $_GET['luck'];		

	if ($luck + $health + $strength > 15)
	{
		$luck = 5;
		$health = 5;
		$strength = 5;
	}
?>
<html>
	<body>
		<p>Name: <?= $name ?></p>
		<p>Strength: <?= $strength ?></p>
		<p>Health: <?= $health ?></p>	
		<p>Luck: <?= $luck ?></p>		
	</body>
</html>
