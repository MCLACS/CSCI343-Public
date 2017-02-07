<?php
require_once "../Utilities/functions.php";

session_start();
header("Access-Control-Allow-Origin: *");

$cmd = getValue("cmd", "");
if ($cmd == "showArray")
{
    $response = showArray();
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "showObject")
{
    $response = showObject();
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "showArrayOfObjects")
{
    $response = showArrayOfObjects();
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "showArrayOfObjectsWithArrays")
{
    $response = showArrayOfObjectsWithArrays();
    header('Content-type: application/json');
    echo json_encode($response);
}
else // list all supported commands
{
  echo
  "
    <pre>
        Command: showArray
      
            Description: displays an array in JSON format
            
            Parameters: none

            Example: 
                Query string: cmd=?showArray 
                Returns: [\"A\",1,\"B\",2,\"C\",3]

        Command: showObject
      
            Description: display an object in JSON format
            
            Parameters: none

            Example:
                Query string: cmd=?showObject
                Returns: {\"Name\":\"Tim\",\"Age\":23,\"Weight\":175}

        Command: showArrayOfObjects
      
            Description: displays an array of objects in JSON format
            
            Parameters: none

            Example:
                Query string: 
                Returns: [{\"Name\":\"Tim\",\"Age\":23,\"Weight\":175},
                          {\"Name\":\"Sally\",\"Age\":26,\"Weight\":132},
                          {\"Name\":\"Jim\",\"Age\":18,\"Weight\":129}]

        Command: showArrayOfObjectsWithArrays
      
            Description: displays in JSON format, an array of objects that have 
                         arrays
            
            Parameters: none

            Example:
                Query string: 
                Returns: [{\"Name\":\"Tim\",\"Pets\":[\"Cat\",\"Dog\"]},
                          {\"Name\":\"Sally\",\"Pets\":[\"Fish\",\"Python\"]},
                          {\"Name\":\"Tim\",\"Pets\":[\"Frog\",\"Rat\"]}]

    </pre>            
  ";
}

function showArray()
{
    $response = ["A", 1, "B", 2, "C", 3];
    return $response;
}

function showObject()
{
    $response["Name"] = "Tim";
    $response["Age"] = 23;
    $response["Weight"] = 175;
    
    # alternate syntax...
    $response = array("Name"=>"Tim", "Age"=>23, "Weight"=>175);
    
    return $response;
}

function showArrayOfObjects()
{

    
    # test out the response in your browser 
    # at https://jsonformatter.curiousconcept.com/
    return $response;
}

function showArrayOfObjectsWithArrays()
{

    
    # test out the response in your browser 
    # at https://jsonformatter.curiousconcept.com/
    return $response;
}


?>
