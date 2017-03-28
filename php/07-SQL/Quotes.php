
<?php
require_once "functions.php";
require_once 'dblogin.php';

session_start();
header("Access-Control-Allow-Origin: *");

// Create connection
$conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$cmd = getValue("cmd", "");
if ($cmd == "getQuote")
{
    $response = getQuote($conn);
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

function getQuote($conn)
{
    $result = $conn->query("SELECT * FROM Quotes");
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) 
    {
        $rows[] = $r;
    }
    $index = rand(0, count($rows)-1);
    return $rows[$index];
}

?>
