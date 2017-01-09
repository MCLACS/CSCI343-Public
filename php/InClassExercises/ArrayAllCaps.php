<?php

$names = array("Mark", "Tom", "Sally", "Tim");

for ($i = 0; $i < 4; $i++)
{
	echo strtoupper($names[$i]) . "<br/>";
}

foreach ($names as $n)
{
	echo strtoupper($n) . "<br/>";
}

?>

