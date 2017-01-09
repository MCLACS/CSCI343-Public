<?php

class Song
{
	public $title= "";
	public $artist = "";
	
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

$song1 = new Song;
$song1->title = "Hotel California";
$song1->artist = "Eagles";

$song2 = new Song;
$song2->title = "Hotel California";
$song2->artist = "The Chipmunks";

print_r($song1);
echo "<br/>";

print_r($song2);
echo "<br/>";

if ($song1->isFavorite())
	echo "<p>Song 1 is my favorite!</p>";
else if ($song2->isFavorite())
	echo "<p>Song 2 is my favorite!</p>";
	
?>