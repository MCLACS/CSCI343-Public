<?php
	$html = "<h1>I have 10 cookies.</h1>";
	
	for ($count = 0; $count < 10; $count = $count + 1)
	{
		$html = $html . "<p>Eating a cookie...</p>";
	}

	echo "
	<html>
		<head>
			<title>Adding Style!</title>
			<style type='text/css'>
				h1
				{
					color:blue;
					font-size:12pt;
				}
				p
				{
					color:red;
					font-size:10pt;
				}			
			</style>
			<body>
			$html
			</body>
		</head>
	</html>";	
	
?>