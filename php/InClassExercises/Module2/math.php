<?php
require_once "../../Utilities/functions.php";

session_start();
header("Access-Control-Allow-Origin: *");

$cmd = getValue("cmd", "");
$nums = getValue("num", [0]);
if ($cmd == "add")
{
    $response = add($nums);
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "sub")
{
    $response = subtract($nums);
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "mult")
{
    $response = multiply($nums);
    header('Content-type: application/json');
    echo json_encode($response);
}
else // list all supported commands
{
  echo
  "
    <pre>
        Command: add
      
            Description: 
               Adds numbers
            
            Parameters: 
                num: array of numbers to sum

            Example:
                Query string: ?cmd=sum&num[]=4&num[]=2
                
                Returns: 
                
                { result: 6}

        Command: sub
      
            Description: 
               Sutract numbers
            
            Parameters: 
                num: array of numbers to subtract

            Example:
                Query string: ?cmd=sub&num[]=4&num[]=2
                
                Returns: 
                
                { result: 2}
                
        Command: mult
      
            Description: 
               Multiply numbers
            
            Parameters: 
                num: array of numbers to multiply

            Example:
                Query string: ?cmd=mult&num[]=4&num[]=2
                
                Returns: 
                
                { result: 8}
    </pre>            
  ";
}

function add($nums)
{
    $total = 0;
   	foreach ($nums as $n)
   	{
   	    $total = $total + $n;
   	}
   	
    return array("result"=>$total);
}

function multiply($nums)
{
    $total = 1;
   	foreach ($nums as $n)
   	{
   	    $total = $total * $n;
   	}
   	
    return array("result"=>$total);
}

function subtract($nums)
{
    $firstTime = true;
    $total = 0;
   	foreach ($nums as $n)
   	{
   	    if ($firstTime)
   	    {
   	        $total = $n;
   	        $firstTime = false;
   	    }
   	    else
   	    {
   	        $total = $total - $n;
   	    }
    }
   	
    return array("result"=>$total);
}

?>
