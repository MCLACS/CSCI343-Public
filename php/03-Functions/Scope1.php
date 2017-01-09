<?php
	$b = 100;
	foo($b);
	echo "b outside function: $b<br/>";	

	function foo($b)
	{
		$b = 500;
		echo "b inside function: $b<br/>";
	}
?>