<?php

class ListMaker
{
	private $item1 = "";
	private $item2 = "";
	private $item3 = "";
	
	function __construct($i1, $i2, $i3)
	{
		$this->item1 = $i1;
		$this->item2 = $i2;
		$this->item3 = $i3;
	}
	
	function getUnorderedList()
	{
		$html = "<ul>";
		$html = $html . "<li>" . $this->item1 . "</li>";
		$html = $html . "<li>" . $this->item2 . "</li>";
		$html = $html . "<li>" . $this->item3 . "</li>";
		$html = $html . "</ul>";
		
		return $html;
	}
}

$lm1 = new ListMaker("A", "B", "C");
$lm2 = new ListMaker("X", "Y", "Z");

echo $lm1->getUnorderedList();
echo $lm2->getUnorderedList();	
?>