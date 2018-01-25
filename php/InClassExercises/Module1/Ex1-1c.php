<?php
	require_once "../../Utilities/functions.php";

	$name = getValue("name", "enter a name");
	$strength = getValue("strength", "enter strength");
	$health = getValue("health", "enter health");
	$luck = getValue("luck", "enter luck");
	$warning = "";

	if ($luck + $health + $strength > 15)
	{
		$luck = 5;
		$health = 5;
		$strength = 5;
		$warning = "Total for all attributes cannot exceed 15.";
	}
echo "
<html>
	<body>
		<p>Name: $name</p>
		<p>Strength: $strength</p>
		<p>Health: $health</p>	
		<p>Luck: $luck</p>		
		<p style='color: red'>$warning</p>
	</body>
</html>
";