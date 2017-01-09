<?php
	$ans = -1;
	$num = -1;
	if ( isset($_POST['num']) ) 
		$num = $_POST['num'];		
	if ( isset($_POST['ans']) ) 
		$ans = $_POST['ans'];		
	
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
		<title>NumGuessPostWithState.php</title>
	</head>

	<body>
		<p>Guess a number from 1 to 10</p>
		<form action="NumGuessPostWithState.php" method="post">
			Number: <input type="text" name="num"/><br/>
			<input type="submit" value="Guess"/>
			<input type="hidden" name="ans" value="<?= $ans ?>"/>
		</form>
		<h2><?= $msg ?></h2>
	</body>

<html>
