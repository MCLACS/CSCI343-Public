<?php
	require_once "../Utilities/functions.php";

	$color = getValue("color", "no color specified");
	$flavor = getValue("flavor", "no flavor specified");

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
