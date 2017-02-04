<?php
require_once("../Utilities/functions.php");

// --------------------------------------------------
// grab the user input specified on the query string 
// for example: "?start=5&end=12"
// if they are omitted start = 1 and end = 10
// --------------------------------------------------
$startNo = getValue("start", 1);
$endNo = getValue("end", 10);

$ans = sumThem($startNo, $endNo);
echo $ans;

// --------------------------------------------------
// Adds up the intergers between (and including)
// start and end.
// --------------------------------------------------
function sumThem($start, $end)
{
    $total = 0;
    for ($i = $start; $i <= $end; $i++)
    {
        $total = $total + $i;
    }
    return $total;
}


?>