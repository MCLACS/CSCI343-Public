<?php
	echo "<h1>Sting Functions</h1>";
	
	$name = "aleX";
	
	echo (strrev($name) . "<br/>");
	
	echo (str_repeat($name, 5) . "<br/>");
	
	
	echo (strtoupper($name) . "<br/>");

	echo (strtolower($name)  . "<br/>");
	
	echo (ucfirst($name)  . "<br/>");
	
	echo (ucfirst(strtolower($name)) . "<br/>");
?>
