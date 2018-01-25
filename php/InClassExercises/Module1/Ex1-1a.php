<?php
	require_once "../../Utilities/functions.php";

	$word = getValue("word", "please enter a word");

    for ($w = 0; $w < strlen($word); $w = $w + 1)
    {
        echo "<p>$word</p>";
    }
?>
