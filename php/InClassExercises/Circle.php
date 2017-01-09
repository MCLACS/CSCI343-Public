<?php

class Circle
{
	public $radius= 0;
	public $color = "";
	
	function __construct($r, $c)
	{
		$this->radius = $r;
		$this->color = $c;
	}
	
	function getColor()
	{
		return $this->color;
	}

	function getRadius()
	{
		return $this->radius;
	}
	
	function getArea()
	{
		return 3.14 * $this->radius * $this->radius;
	}

	function getCircumference()
	{
		return 2.0 * 3.14 * $this->radius;
	}
	
	function __destruct()
	{
		echo "<p>Bye!</p>";
	}
}

$c1 = new Circle(10, "red");
$c2 = new Circle(20, "blue");

echo "<p>c1</p>";
echo "<p>" . $c1->getArea() . "</p>";
echo "<p>" . $c1->getRadius() . "</p>";
echo "<p>" . $c1->getCircumference() . "</p>";

echo "<p>c2</p>";
echo "<p>" . $c2->getArea() . "</p>";
echo "<p>" . $c2->getRadius() . "</p>";
echo "<p>" . $c2->getCircumference() . "</p>";

if ($c1->getArea() > $c2->getArea())
	echo "<p>c1 has a bigger area</p>";
else
	echo "<p>c1 has a bigger area</p>";
	
?>