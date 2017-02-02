<?php
	function check_pressure($ft1, $ft2, $rt1, $rt2)
	{
		$msg = "Pressure OK!";
			
		if ($ft1 != $ft2)
		{
			$msg = "Front tires must have the same pressure!";
		}
		else if ($rt1 != $rt2)
		{
			$msg = "Rear tires must have the same pressure!";
		}
		else if ($ft1 < 35 || $ft1 > 45 || $ft2 < 35 || $ft2 > 45 ||
		 		 $rt1 < 35 || $rt1 > 45 || $rt2 < 35 || $rt2 > 45 )
		{
			$msg = "All tires must have a pressure be between 35 and 45!";
		}
		
		return $msg;
	}
?>