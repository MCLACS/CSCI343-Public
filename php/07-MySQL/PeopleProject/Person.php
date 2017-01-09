<?php
class Person
{
	private $name = "";
	private $age = "";

	function __construct($n, $a)
	{
		$this->name = $n;
		$this->age = $a;
	}
	
	function getname()
	{
		return $this->name;
	}
	
	function getage()
	{
		return $this->age;
	}
}
?>