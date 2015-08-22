<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$outp = 
'{ "employees" : [' .
	'{ "firstName":"John" , "lastName":"Doe" },' .
	'{ "firstName":"Anna" , "lastName":"Smith" },' .
	'{ "firstName":"Peter" , "lastName":"Jones" } ]}';
echo($outp);
?>