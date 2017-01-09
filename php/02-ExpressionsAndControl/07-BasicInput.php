<?php
	require_once "../Utilities/functions.php";

	$color = getValue("color", "no color specified");

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
