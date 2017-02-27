<?php
require_once "../Utilities/functions.php";

session_start();
header("Access-Control-Allow-Origin: *");

$cmd = getValue("cmd", "");
if ($cmd == "getAbbreviation")
{
    $state = strtoupper(getValue("state", ""));
    $response = getAbbreviation($state);
    header('Content-type: application/json');
    echo json_encode($response);
}
else // list all supported commands
{
  echo
  "
    <pre>
        Command: getAbbreviation
      
            Description: returns the abbreviation of a state
            
            Parameters: state 

            Example:
                Query string: ?cmd=getAbbreviation&state=New York
                Returns:  
                    {'error': '', 'state' : 'New York', 'abbreviation' : 'NY'}
                        OR
                    {'error': 'That state is not in New England'}    
    </pre>            
  ";
}

function getAbbreviation($state)
{
    $states = array();
    $states["MAINE"]="ME";
    $states["MASSACHUSETTS"]="MA";
    $states["NEW HAMPSHIRE"]="NH";
    $states["VERMONT"]="VT";
    
    if ($state == "" or $states[$state] == null)
    {
        return array("error"=>"That state is not in New England");
    }
    else
    {
        return array("error"=>"", "state"=>$state, "abbreviation"=>$states[$state]);
    }
}

?>
