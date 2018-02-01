<?php
	require_once "Ex1-2a.php";
	require_once "Ex1-2b.php";
	require_once "../../Utilities/functions.php";
	
	
	echo "Charge = $" . service_charge(500, 1001, 10) . "</br>";
	echo "Charge = $" . service_charge(1501, 600, 10) . "</br>";	
	echo "Charge = $" . service_charge(1501, 1001, 10) . "</br>";
	echo "Charge = $" . service_charge(500, 600, 10) . "</br>";
	
	echo "</br>";
	
	echo check_pressure(38, 39, 41, 41) . "</br>";
	echo check_pressure(38, 38, 41, 42) . "</br>";	
	echo check_pressure(50, 50, 41, 41) . "</br>";	
	echo check_pressure(20, 20, 41, 41) . "</br>";
	echo check_pressure(38, 38, 50, 50) . "</br>";
	echo check_pressure(38, 38, 20, 20) . "</br>";
	echo check_pressure(38, 38, 41, 41) . "</br>";	
	
?>