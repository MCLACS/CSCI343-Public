<?php

class Song
{
	private $title = "";
	private $artist = "";

	function __construct($t, $a)
	{
		$this->title = $t;
		$this->artist = $a;
	}
	
	function getTitle()
	{
		return $this->title;
	}
	
	function getArtist()
	{
		return $this->artist;
	}
	
	function isFavorite()
	{
		if ($this->title == "Hotel California" && 
			$this->artist == "Eagles")
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}

$song1 = new Song("Hotel California", "Eagles");
$song2 = new Song("Hotel California", "The Chipmunks");

print_r($song1);
echo "<br/>";

print_r($song2);
echo "<br/>";

if ($song1->isFavorite())
	echo "<p>Song 1 is my favorite!</p>";
else if ($song2->isFavorite())
	echo "<p>Song 2 is my favorite!</p>";
	
echo "<p>Now I will sing " . $song1->getTitle() . "</p>";
	
?>