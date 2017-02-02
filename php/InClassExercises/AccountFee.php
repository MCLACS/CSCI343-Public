<?php
	function service_charge($cAcct, $sAcct, $checks)
	{
		$fee = 0.0;
		if ($cAcct < 1500 && $sAcct < 1000)
		{
			$fee = $checks * 0.15; 
		}
		return $fee;
	}
?>