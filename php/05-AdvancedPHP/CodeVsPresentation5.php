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
		<title>CodeVsPresentation5.php</title>
	</head>
	<body>
		<p>The fibbonoci sequence is:
		<ul>
<?php
		foreach ($f as $n)
		{
?>
			<li><?= $n; ?></li>
<?php			
		}
?>
		</ul>
		</p>
	</body>
</html>
	


