<?php
	$table = true;
	
	if ($table == true)
	{
		$html = "<table>\n";
		for ($i = 0; $i < 10; $i++)
		{
			$html = $html . "\t\t\t\t<tr><td>$i</td></tr>\n";
		}
		$html = $html. "\t\t\t\t</table>\n";
	}
	else
	{
		$html = "<ul>\n";
		for ($i = 0; $i < 10; $i++)
		{
			$html = $html . "\t\t\t\t<li>$i</li>\n";
		}
		$html = $html. "\t\t\t\t</ul>\n";
	}
	
	echo "
	<html>
		<head>
			<title>Adding Style!</title>
			<style type='text/css'>
				table
				{
					border: solid blue 1px;
				}
			</style>
			<body>
				$html
			</body>
		</head>
	</html>";	
?>