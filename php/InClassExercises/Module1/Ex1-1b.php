<?php
	require_once "../../Utilities/functions.php";

	$word1 = getValue("word1", "please enter word1");
	$word2 = getValue("word2", "please enter word2");
    $dotCount = 30 - (strlen($word1) + strlen($word2));
    $dots = "";
    for ($i = 0; $i < $dotCount; $i = $i + 1)
    {
        $dots = $dots . ".";
    }
    
    echo "<p>$word1$dots$word2</p>";
?>
