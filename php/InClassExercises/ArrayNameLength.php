<?php

$len = 0;
$names = array("Mark", "Tom", "Sally", "Tim");

for ($i = 0; $i < 4; $i++)
{
	$len = $len + strlen($names[$i]);
}

echo "Total length of all names is: $len";

?>