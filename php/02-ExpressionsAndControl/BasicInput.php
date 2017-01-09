<?php
	$color = "no color entered";
	if ( isset($_GET['color']) ) 
		$color = $_GET['color'];		

echo "
<html>
	<head>
		<title>BasicInput.php</title>
	</head>
	
	<body>
		<p>Your favorite color is '$color'</p>
	</body>
</html>";

?>