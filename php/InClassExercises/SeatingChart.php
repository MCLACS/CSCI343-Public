<?php

class Seat
{
	private $handicap;
	private $taken;
	
	function __construct($h, $t)
	{
		$this->handicap = $h;
		$this->taken = $t;
	}
	
	function getTableCell()
	{
		$col = $this->taken == TRUE ? "background-color:red; " : 
			"background-color:green; ";
		$bdr = $this->handicap == TRUE ? "border: 4px solid blue; " : 
			"border: 4px solid black; ";
			
		return "<td style='" . $col . $bdr . " width:50px; height:50px'></td>";
	}
}

$chart = array(
	array(new Seat(FALSE, TRUE),  new Seat(FALSE, FALSE), new Seat(FALSE, FALSE)),
	array(new Seat(FALSE, FALSE), new Seat(FALSE, TRUE),  new Seat(FALSE, FALSE)),
	array(new Seat(TRUE, FALSE),  new Seat(TRUE, TRUE),   new Seat(TRUE, TRUE)) 
	);
	

echo "<table>";
foreach ($chart as $row)
{
	echo "<tr>";
	foreach ($row as $seat)
	{
		echo $seat->getTableCell();
	}
	echo "</tr>";
}
echo "</table>"


?>
