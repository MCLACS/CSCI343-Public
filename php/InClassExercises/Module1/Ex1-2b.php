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
		if (notInRange($ft1))
		{
			$msg = $msg . "<br>Front left tire must have a pressure be between 35 and 45!";
		}
		if (notInRange($ft2))
		{
			$msg = $msg . "<br>Front right tire must have a pressure be between 35 and 45!";
		}
		if (notInRange($rt1))
		{
			$msg = $msg . "<br>Rear left tire must have a pressure be between 35 and 45!";
		}
		if (notInRange($rt2))
		{
			$msg = $msg . "<br>Rear right tire must have a pressure be between 35 and 45!";
		}
		
		if ($msg == "")
			return "OK!";
		else
			return $msg;
	}
	
	function notInRange($p)
	{
		return	$p < 35 || $p > 45;
	}
?>