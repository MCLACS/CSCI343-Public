<?php
	$ans = -1;
	$num = -1;
	if ( isset($_GET['num']) ) 
		$num = $_GET['num'];		
	if ( isset($_GET['ans']) ) 
		$ans = $_GET['ans'];		
	
	$msg = "";
	
	if ($num > -1 && $ans > -1)
	{
		if ($num == $ans)
		{
			$msg = $num . " is correct!";		
		}
		else if ($num > $ans)
		{
			$msg = $num . " to high!  Try again.";		
		}
		else
		{
			$msg = $num . " to low!  Try again.";		
		}
	}
	else
	{
		$ans = rand(1,10);
	}
?>



<html>
	<head>
		<title>NumGuessWithState.php</title>
	</head>

	<body>
		<p>Guess a number from 1 to 10</p>
		<form action="NumGuessWithState.php" method="get">
			Number: <input type="text" name="num"/><br/>
			<input type="submit" value="Guess"/>
			<input type="hidden" name="ans" value="<?= $ans ?>"/>
		</form>
		<h2><?= $msg ?></h2>
	</body>

<html>
