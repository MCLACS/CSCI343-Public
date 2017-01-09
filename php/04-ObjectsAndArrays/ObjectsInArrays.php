<?php
	class Piece
	{
		private $name;
		private $color;
		
		function __construct($n, $c)
		{
			$this->name = $n;
			$this->color = $c;
		}
		
		function getName()
		{
			return $this->name;
		}

		function getColor()
		{
			return $this->color;
		}
	}

	$tictactoe = array( 
		array(new Piece('-', 'black'), new Piece('-', 'black'), new Piece('-', 'black')), 
		array(new Piece('-', 'black'), new Piece('-', 'black'), new Piece('-', 'black')), 
		array(new Piece('-', 'black'), new Piece('-', 'black'), new Piece('-', 'black')), 
				); 
	
	echo "<p>Empty board:"; 
	printBoard($tictactoe);
	
	$tictactoe[1][1] = new Piece('X', 'red');
	
	echo "<p>After placing X in center:"; 
	printBoard($tictactoe);

	$tictactoe[0][2] = new Piece('0', 'blue');

	echo "<p>After placing O in top right:"; 
	printBoard($tictactoe);

		
	function printBoard($tictactoe)
	{
		echo "<table>\n"; 
		foreach ($tictactoe as $row) 
		{ 
			echo "\t<tr>";
			foreach ($row as $piece) 
			{
				$cl = $piece->getColor();
				$nm = $piece->getName();
				echo "<td style='border: 1px solid black; height:25px; width:25px; color:$cl;'>$nm</td>";
			} 
			echo "</tr>\n";
			
		}
		echo "</table>\n";
	}

?>