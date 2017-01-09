<?php
	$color1[0] = "red";
	$color1[1] = "white";
	$color1[2] = "blue";
	
	echo "</br>";
	foreach ($color1 as $c)
	{
		echo "$c<br/>";
	}

	$color2 = array('red' 	=> "rgb(255,0,0)",
					'white' => "rgb(255,255,255)",
					'blue' 	=> "rgb(0,0,255)");

	echo "</br>";						
	foreach ($color2 as $key => $value)
	{
		echo "[$key, $value]<br/>";
	}

	echo "</br>";						
	foreach ($color1 as $key => $value)
	{
		echo "[$key, $value]<br/>";
	}


?>