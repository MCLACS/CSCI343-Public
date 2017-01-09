<?php
	$b = 100;
	foo($b);
	echo "b outside function: $b<br/>";	

	function foo($b)
	{
		$b = $b + 10;
		echo "b inside function: $b<br/>";
	}
?>
