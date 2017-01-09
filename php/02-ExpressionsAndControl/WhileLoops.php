<?php

	$cookies = 10;	
	echo "<h1>I have $cookies cookies.</h1>";
	
	while ($cookies > 0)
	{
		echo "<p>Eating a cookie...</p>";
		$cookies = $cookies - 1;
	}

	$cookies = 10;	
	echo "<h1>I have $cookies more cookies.</h1>";

	do
	{
		echo "<p>Eating a cookie...</p>";
		$cookies = $cookies - 1;
	} while ($cookies > 0);

?>