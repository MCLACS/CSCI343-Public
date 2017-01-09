<?php 
$chessboard = array( 
	array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'), 
	array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'), 
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '), 
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '), 
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '), 
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '), 
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '), 
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '), 
	array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'), 
	array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
				); 
	
echo "<p>Before moving third pawn from the left:"; 
printBoard($chessboard);

$chessboard[8][2] = ' ';
$chessboard[6][2] = 'P';

echo "<p>After moving third pawn from the left:"; 
printBoard($chessboard);


function printBoard($chessboard)
{
	echo "<table>\n"; 
	foreach ($chessboard as $row) 
	{ 
		echo "\t<tr>";
		foreach ($row as $piece) 
		{
			echo "<td style='border: 1px solid black; height:25px; width:25px'>$piece</td>";
		} 
		echo "</tr>\n";
		
	}
	echo "</table>\n";
}

?>