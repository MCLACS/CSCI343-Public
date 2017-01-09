<?php

$names = array("Mark", "Tom", "Sally", "Tim");
$rev = array();

for ($i = 3; $i >=0 ; $i--)
{
	$rev[] = $names[$i];
}

echo "Original array<br/>";
foreach ($names as $n)
{
	echo "$n<br/>";
}

echo "Reversed array<br/>";
foreach ($rev as $n)
{
	echo "$n<br/>";
}

?>

