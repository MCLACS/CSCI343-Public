<?php
	$ary = array(80, 60, 88, 44, 92);
	$total = 0.0;
	foreach ($ary as $grade)
	{
		$total = $total + $grade;
	}
	$ave = $total/count($ary);	
?>

<html>
	<head>
		<title>CodeVsPresentation.php</title>
	</head>
	
	<body>
		<p>The average is: <?php echo $ave; ?></p>
	</body>
</html>
