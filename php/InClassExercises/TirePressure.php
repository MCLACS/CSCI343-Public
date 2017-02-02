<?php
	function check_pressure($ft1, $ft2, $rt1, $rt2)
	{
		$msg = "";
			
		if ($ft1 != $ft2)
		{
			$msg = $msg . "<br>Front tires must have the same pressure!";
		}
		if ($rt1 != $rt2)
		{
			$msg = $msg . "<br>Rear tires must have the same pressure!";
		}
		if (inRange($ft1))
		{
			$msg = $msg . "<br>Front left tire must have a pressure be between 35 and 45!";
		}
		if (inRange($ft2))
		{
			$msg = $msg . "<br>Front right tire must have a pressure be between 35 and 45!";
		}
		if (inRange($rt1))
		{
			$msg = $msg . "<br>Rear left tire must have a pressure be between 35 and 45!";
		}
		if (inRange($rt2))
		{
			$msg = $msg . "<br>Rear right tire must have a pressure be between 35 and 45!";
		}
		
		if ($msg == "")
			return "OK!";
		else
			return $msg;
	}
	
	function inRange($p)
	{
		return	$p < 35 || $p > 45;
	}
?>