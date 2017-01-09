<?php
	$word1 = "";
	if ( isset($_GET['word1']) ) 
		$word1 = $_GET['word1'];		

	$word2 = "";
	if ( isset($_GET['word2']) ) 
		$word2 = $_GET['word2'];		

	$len1 = strlen($word1);		
	$len2 = strlen($word2);			
?>
<html>
	<body>
	<p><?= $word1 ?>
<?php
	for ($i = 0; $i < 30 - $len1 - $len2; $i++)
	{
?>	
		.
<?php
	}
?>	
	<?= $word2 ?></p>
	</body>
</html>
