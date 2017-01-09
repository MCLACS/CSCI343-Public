<?php
	$word = "";
	if ( isset($_GET['word']) ) 
		$word = $_GET['word'];		

	$len = strlen($word);		
?>
<html>
	<body>
<?php
	for ($i = 0; $i < $len; $i++)
	{
?>	
		<p><?= $word ?></p>
<?php
	}
?>	
	</body>
</html>
