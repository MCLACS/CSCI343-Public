<?php
	$num = -1;
	if ( isset($_GET['num']) ) 
		$num = $_GET['num'];		
	
	$ans = rand(1,10);

	$msg = "";
	if ($num > -1)
	{
		if ($num == $ans)
		{
			$msg = $num . " is correct!  Play again.";		
		}
		else
		{
			$msg = $num . " is wrong! The correct guess was " . $ans . ". Play again.";		
		}
	}
?>


<html>
	<head>
		<title>NumGuess.php</title>
	</head>

	<body>
		<p>Guess a number from 1 to 10</p>
		<form action="NumGuess.php" method="get">
			Number: <input type="text" name="num"/><br/>
			<input type="submit" value="Guess"/>
		</form>
		<h2><?= $msg ?></h2>
	</body>

<html>
