<?php
	$first = "";
	$last = "";
	$ab = -1;
	$h = -1;
	$hr = -1;	

	if ( isset($_POST['first']) ) 
		$first = $_POST['first'];		
	if ( isset($_POST['last']) ) 
		$last = $_POST['last'];		
	if ( isset($_POST['ab']) ) 
		$ab = $_POST['ab'];		
	if ( isset($_POST['h']) ) 
		$h = $_POST['h'];		
	if ( isset($_POST['hr']) ) 
		$hr = $_POST['hr'];		

	$ave = 0.0;
	$hrprob = 0.0;
	if ($ab > 0)
	{
		$ave = $h / $ab;
		$hrprob = $hr / $ab;
	}
	
	$color = "black";
	if ($ave >= 0.3)
	{	
		$color = "red";
	}
?>

<html>
	<head>
		<title>BatterEventProb.php</title>
	</head>

	<body>
		<p>Enter a batter's statistics:</p>
		<form action="BatterEventProb.php" method="post">
			First Name: <input type="text" name="first"/><br/>
			Last Name: <input type="text" name="last"/><br/>
			AB: <input type="text" name="ab"/><br/>
			H: <input type="text" name="h"/><br/>
			HR: <input type="text" name="hr"/><br/>
			<input type="submit" value="Calculate"/>
		</form>
<?php		
	if ($ab > -1)
	{
?>	
		<table>
			<tr><td>First Name:</td><td><?= $first ?></td></tr>
			<tr><td>Last Name:</td><td><?= $last ?></td></tr>
			<tr><td>AVE:</td><td><span style="color: <?=$color?>"><?= $ave ?></span></td></tr>
			<tr><td>HR%:</td><td><?= $hrprob ?></td></tr>
		</table>
<?php		
	}
?>		
	</body>

<html>
