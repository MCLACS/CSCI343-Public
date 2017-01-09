<?php
	$txt = -1;
	$moreTxt = -1;
	$iceAry = array();	
	$color = -1;		
	$listAry = array();		
	$ddlist = array();	
		
	if ( isset($_POST['txt']) ) 
		$txt = $_POST['txt'];		
	if ( isset($_POST['moreTxt']) ) 
		$moreTxt = $_POST['moreTxt'];		
	if ( isset($_POST['iceAry']) ) 
		$iceAry = $_POST['iceAry'];		
	if ( isset($_POST['color']) ) 
		$color = $_POST['color'];		
	if ( isset($_POST['listAry']) ) 
		$listAry = $_POST['listAry'];		
	if ( isset($_POST['ddlist']) ) 
		$ddlist = $_POST['ddlist'];		

?>

<html>
	<head>
		<title>AllControls.php</title>
	</head>

	<body>
		<form action="AllControls.php" method="post">
			Text: <input type="text" name="txt" value="Type something"/><br/>
			More Text:<br/>
			<textarea name="moreTxt" cols="40" rows ="5" wrap ="soft">This is some default text.</textarea><br/>
			Checkboxes:<br/>
			Vanilla <input type="checkbox" name="iceAry[]" value="Vanilla"/>
			Chocolate <input type="checkbox" name="iceAry[]" value="Chocolate" checked="checked"/>
			Strawberry <input type="checkbox" name="iceAry[]" value="Strawberry"/><br/>
			Radio Buttons:<br/>
			Red <input type="radio" name="color" value="Red" checked="checked"/>
			Blue <input type="radio" name="color" value="Blue"/>
			Green <input type="radio" name="color" value="Green"/><br/>
			List:<br/> 
			<select name="listAry[]" size="3" multiple="multiple">
				<option value="Marning">Morning</option>
				<option value="Afternoon" selected="selected">Afternoon</option>
				<option value="Evening">Evening</option>				
			</select><br/>
			Drop-Down List:<br/> 
			<select name="ddlist">
				<option value="Marning">Morning</option>
				<option value="Afternoon">Afternoon</option>
				<option value="Evening" selected="selected">Evening</option>				
			</select><br/>
			<input type="submit" value="OK"/>
		</form>
		
		<pre>
<?php		
			print_r($txt);echo("\n");
			print_r($moreTxt);echo("\n");			
			print_r($iceAry);		
			print_r($color);echo("\n");							
			print_r($listAry);						
			print_r($ddlist);echo("\n");			
?>			
		</pre>
	</body>

<html>
