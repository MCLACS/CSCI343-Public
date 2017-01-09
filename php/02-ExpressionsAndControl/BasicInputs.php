<?php
	$color = "no color entered";
	if ( isset($_GET['color']) ) 
		$color = $_GET['color'];		
	$flavor = "no flavor entered";
	if ( isset($_GET['flavor']) ) 
		$flavor = $_GET['flavor'];		

echo "
<html>
	<head>
		<title>BasicInputs.php</title>
	</head>
	
	<body>
		<p>Your favorite color is '$color'</p>
		<p>Your favorite flavor is '$flavor'</p>
	</body>
</html>";

?>