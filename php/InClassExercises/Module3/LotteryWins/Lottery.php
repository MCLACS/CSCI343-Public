<?php
require_once "functions.php";
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
if ($cmd == "add")
{
    $response = add($conn);
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "reset")
{
    $response = resetAll($conn);
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "get")
{
    $response = get($conn);
    header('Content-type: application/json');
    echo json_encode($response);
}
else // list all supported commands
{
  echo
  "
  ";
}

function add($conn)
{
    $day = getValue("day", "");
    $stmt = $conn->prepare("UPDATE Wins SET Times = Times + 1 WHERE Day = ?");
    $stmt->bind_param("s", $day);
    $stmt->execute();
    $stmt->close();

    return get($conn);
}

function resetAll($conn)
{
    $stmt = $conn->prepare("UPDATE Wins SET Times = 0");
    $stmt->execute();
    $stmt->close();

    return get($conn);
}

function get($conn)
{
    $day = "";
    $times = 0;
    $stmt = $conn->prepare("SELECT Day, Times FROM Wins");
    $stmt->execute();
    $stmt->bind_result($day, $times);
    
    $rows = array();
    while ($stmt->fetch()) 
    {
        $row = array("day"=>$day, "times"=>$times);
        $rows[] = $row;
    }
    $stmt->close();
    
    return $rows;
}
?>
