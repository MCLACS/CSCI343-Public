<?php
echo (max1(10, 20) . "<br/>");
echo (max2(20, 10) . "<br/>");
echo (fixName("tomMy") . "<br/>");

function max1($a, $b)
{
	if ($a > $b)
		return $a;
	else
		return $b;
}

function max2($a, $b)
{
	return ($a > $b) ? $a : $b;
}

function fixName($name)
{
	return ucfirst(strtolower($name));
}
?>
