<?php
	$color['red'] = "rgb(255,0,0)";
	$color['white'] = "rgb(255,255,255)";
	$color['blue'] = "rgb(0,0,255)";
	
	print_r($color);
	echo "</br>";
	
	echo "<p style='color:".$color['red']."'>This is red</p>";
	echo "<p style='color:".$color['blue']."'>This is blue</p>";
	
	$color2 = array('red' 	=> "rgb(255,0,0)",
					'white' => "rgb(255,255,255)",
					'blue' 	=> "rgb(0,0,255)");
	
	print_r($color2);
	echo "</br>";
	
	echo "<p style='color:".$color2['red']."'>This is red</p>";
	echo "<p style='color:".$color2['blue']."'>This is blue</p>";	
?>