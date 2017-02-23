<?php
require_once "functions.php";

session_start();
header("Access-Control-Allow-Origin: *");

$cmd = getValue("cmd", "");
if ($cmd == "calculate")
{
    $sqFt1 = getValue("sqFt1", 0);
    $sqFt2 = getValue("sqFt2", 0);
    $canCost = getValue("canCost", 0);
    
    $response = calculate($sqFt1, $sqFt2, $canCost);
    header('Content-type: application/json');
    echo json_encode($response);
}
else // list all supported commands
{
  echo
  "
    <pre>
        Command: 
      
            Description: 
            
            Parameters: 

            Example:
                Query string: 
                Returns: 

    </pre>            
  ";
}

function calculate($sqFt1, $sqFt2, $canCost)
{
    $error = "none";
    if (!is_numeric($sqFt1))
        $error = "Square feet to paint must be a number.";
    else if (!is_numeric($sqFt1))
        $error = "Square feet per can.";
    else if (!is_numeric($canCost))
        $error = "Cost of a can must be a number.";

    if ($sqFt1 <= 0)
        $error = "Square feet to paint must greater than 0.";
    else if ($sqFt2 <= 0)
        $error = "Square feet per can must be greater than 0.";
    else if ($canCost <= 0)
        $error = "Cost of a can must be greater than 0.";

    $numberOfCans = 0;
    $cost = 0;
    
    if ($error == "none")
    {
        if ($sqFt2 > 0)
            $numberOfCans = $sqFt1/$sqFt2;
        $cost = ceil($canCost * $numberOfCans);
    }
    return array("error"=>$error, "cans"=>$numberOfCans, "cost"=>$cost);
}

?>
