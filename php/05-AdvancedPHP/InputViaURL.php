<?php
	$answer1 = -1;
	if ( isset($_GET['answer1']) ) 
		$answer1 = $_GET['answer1'];		

	$answer2 = -1;
	if ( isset($_GET['answer2']) ) 
		$answer2 = $_GET['answer2'];		

	$color1 = "black";
	$message1 = "Click on the correct answer.";
	$color2 = "black";
	$message2 = "Click on the correct answer.";	
		
	if ($answer1 == 100)
	{
		$message1 = "Correct!";
		$color1 = "green";
	}
	else if ($answer1 > -1)
	{
		$message1 = "Wrong, try again!";
	}

	if ($answer2 == 64)
	{
		$message2 = "Correct!";
		$color2 = "green";
	}
	else if ($answer2 > -1)
	{
		$message2 = "Wrong, try again!";
	}
?>

<html>
	<head>
		<title>InputViaURL.php</title>
	</head>
	
	<body>
		<p>What is 6 + 94?</p>
		<ul>
			<li><a href="InputViaURL.php?answer1=80">80</a></>
			<li><a href="InputViaURL.php?answer1=90">90</a></li>
			<li style="color: <?=$color1?>"><a href="InputViaURL.php?answer1=100">100</a></li>
			<li><a href="InputViaURL.php?answer1=110">110</a></li>
		</ul>
		<p><?= $message1 ?></p>
		<p>What is 8 * 8?</p>
		<ul>
			<li><a href="InputViaURL.php?answer2=8">8</a></li>
			<li><a href="InputViaURL.php?answer2=16">16</a></li>
			<li><a href="InputViaURL.php?answer2=32">32</a></li>
			<li style="color: <?=$color2?>"><a href="InputViaURL.php?answer2=64">64</a></li>
		</ul>	
		<p><?= $message2 ?></p>
	</body>
</html>

