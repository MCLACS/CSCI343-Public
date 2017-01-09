<?php
	function fibbo($num)
	{
		$ary = array();
		$ary[0] = 0;
		$ary[1] = 1;
		for ($i = 2; $i < $num; $i++)
		{
			$ary[$i] = $ary[$i-1] + $ary[$i-2];
		}
		return $ary;
	} 
	
	$f = fibbo(10);
?>

<html>
	<head>
		<title>CodeVsPresentation3.php</title>
	</head>
	<body>
		<p>The fibbonoci sequence is:
<?php
		foreach ($f as $n)
		{
			echo $n . " ";
		}
?>
		</p>
	</body>
</html>
	


