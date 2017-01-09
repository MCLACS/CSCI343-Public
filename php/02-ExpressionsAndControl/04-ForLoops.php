<?php

	echo "<h1>I have 10 cookies.</h1>";
	
	for ($count = 0; $count < 10; $count = $count + 1)
	{
		echo "<p>Eating a cookie...</p>";
	}

	echo "<h1>I have 10 more cookies.</h1>";

	for ($count = 0; $count < 10; $count = $count + 2)
	{
		echo "<p>Eating 2 cookies...</p>";
	}

	echo "<h1>I have 10 more cookies.</h1>";

	for ($count = 9; $count >= 0; $count = $count - 1)
	{
		echo "<p>Eating a cookie...</p>";
		echo "<p>$count cookies left.</p>";
	}
	
?>