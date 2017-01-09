<?php

	echo "(10 < 4) = " . (int)(10 < 4) . "<br/>";	
	echo "(4 < 10) = " . (int)(4 < 10) . "<br/>";
	
	echo "TRUE = " . (int)TRUE . "<br/>";
	echo "FALSE = " . (int)FALSE . "<br/>";
	
	echo "(4 < 10) && (5 > 2) = " . (int)((4 < 10) && (5 > 2)) . "<br/>";
	echo "(4 < 10) && (2 > 5) = " . (int)((4 < 10) && (2 > 5)) . "<br/>";
	echo "(4 < 10) || (2 > 5) = " . (int)((4 < 10) || (2 > 5)) . "<br/>";
	echo "(10 >= 11) || (2 > 5) = " . ((10 >= 11) || (2 > 5)) . "<br/>";	
	echo "\"Hello\" == \"Hello\" = ". (int)("Hello" == "Hello") . "<br/>";	
	echo '"Hello" == "Bye" = ' . (int)("Hello" == "Bye") . '<br/>';	
	echo "\"Hello\" != \"Bye\" = ". (int)("Hello" != "Bye") . "<br/>";	
	
?>