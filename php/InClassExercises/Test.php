<?php
	require_once "AccountFee.php";
	require_once "TirePressure.php";
	require_once "../Utilities/functions.php";
	
	
	$tires = getValue("tire", array(0,0,0,0));
	echo check_pressure($tires[0], $tires[1], $tires[2], $tires[3]) . "</br>";
	
	$ca= getValue("ca", 0);
	$sa= getValue("sa", 0);
	$cks= getValue("cks", 0);
	echo "$" . service_charge($ca, $sa, $cks) . "</br>";
	
	/*
	echo "$" . service_charge(500, 1001, 10) . "</br>";
	echo "$" . service_charge(1501, 600, 10) . "</br>";	
	echo "$" . service_charge(1501, 1001, 10) . "</br>";
	echo "$" . service_charge(500, 600, 10) . "</br>";
	
	echo "</br>";
	
	echo check_pressure(38, 39, 41, 41) . "</br>";
	echo check_pressure(38, 38, 41, 42) . "</br>";	
	echo check_pressure(50, 50, 41, 41) . "</br>";	
	echo check_pressure(20, 20, 41, 41) . "</br>";
	echo check_pressure(38, 38, 50, 50) . "</br>";
	echo check_pressure(38, 38, 20, 20) . "</br>";
	echo check_pressure(38, 38, 41, 41) . "</br>";	*/
?>