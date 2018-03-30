 
<?php
require_once "../../Utilities/functions.php";
require_once 'dblogin.php';

session_start();
header("Access-Control-Allow-Origin: *");

// Create connection
$conn = new mysqli($db_hostname, $db_username, $db_password, $db_database, $db_port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$cmd = getValue("cmd", "");
if ($cmd == "findByAge")
{
    $age = getValue("age", 18);
    $response = findByAge($conn, $age);
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "addPerson")
{
    $name = getValue("name", "John");
    $age = getValue("age", 18);
    $response = addPerson($conn, $name, $age);
    header('Content-type: application/json');
    echo json_encode($response);
}


function findByAge($conn, $age)
{
    $response["error"] = "";
    $response["status"] = "ERROR";

    $stmt = $conn->prepare("SELECT Person.Name, Color.Hex FROM Person, Color WHERE Person.Age = ? AND Person.ID = Color.PersonID");
    $stmt->bind_param("i", $age);
    $stmt->execute();
    $stmt->bind_result($name, $hex);
    
    $people = array();
    while ($stmt->fetch()) 
    {
        $person = array();
        $person["Name"] = $name;
        $person["Age"] = $age;
        $person["Hex"] = $hex;
        $people[] = $person;
    }
    
    $stmt->close();
    
    $response["status"] = "OK";
    $response["people"] = $people;
    return $response;
}

function addPerson($conn, $name, $age)
{
    $response["error"] = "";
    $response["status"] = "ERROR";
    
    // error checking params are OK?
    
    $stmt = $conn->prepare("INSERT INTO Person (Name, Age) VALUES (?, ?)");
    $stmt->bind_param("si", $name, $age);
    $stmt->execute();
    $stmt->close();
    
    $response["status"] = "OK";
    return $response;
}
?>
