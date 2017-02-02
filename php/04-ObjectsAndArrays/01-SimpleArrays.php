<?php
	$color1[0] = "red";
	$color1[1] = "white";
	$color1[2] = "blue";
	
	print_r($color1);
	echo "</br>";
	
	$color2[] = "gold";
	$color2[] = "white";
	$color2[] = "green";
	
	print_r($color2);
	echo "</br>";

	$color3 = array("orange", "purple", "black");
	
	print_r($color3);
	echo "</br>";
	
	echo "</br>";
	for ($i = 0; $i < count($color1); $i++)
	{
		echo "$i: $color1[$i]<br/>";
		echo "$i: $color2[$i]<br/>";
		echo "$i: $color3[$i]<br/>";
	}
?>