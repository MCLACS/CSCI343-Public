<?php
require_once "functions.php";

session_start();
header("Access-Control-Allow-Origin: *");

$cmd = getValue("cmd", "");
if ($cmd == "ENTER_COMMAND_NAME_HERE")
{
    $response = command_name1();
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "ENTER_COMMAND_NAME_HERE")
{
    $response = command_name2();
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

        Command: 
      
            Description:
            
            Parameters:

            Example:
                Query string: 
                Returns: 

    </pre>            
  ";
}

function command_name1()
{
    return $response;
}

function command_name2()
{
    return $response;
}
?>
