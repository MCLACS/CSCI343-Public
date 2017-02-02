<?php
	$rows = array
			( 
				array("Name", "Age"),
				array("Tim", "33"),
				array("Sally", "26"),
				array("Alice", "41")
			);
			
			
	$htmlTable = "<table style='border: 1px solid black'>\n";
	foreach ($rows as $row)
	{
		$htmlTable .= "\t<tr>";
		foreach ($row as $col)
		{
			$htmlTable .= "<td>" . $col . "</td>";
		}
		$htmlTable .= "</tr>\n";
	}
	$htmlTable .= "</table>\n";

	echo $htmlTable;
?>