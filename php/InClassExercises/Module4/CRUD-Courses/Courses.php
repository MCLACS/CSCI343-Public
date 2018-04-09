
<?php
require_once "functions.php";
require_once 'dbloginCourses.php';

session_start();
header("Access-Control-Allow-Origin: *");

// Create connection
$conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$cmd = getValue("cmd", "");
if ($cmd == "create")
{
    $response = create($conn);
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "read")
{
    $response = read($conn);
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "update")
{
    $response = update($conn);
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "delete")
{
    $response = delete($conn);
    header('Content-type: application/json');
    echo json_encode($response);
}

else // list all supported commands
{
  echo
  "
  ";
}

function create($conn)
{
    $courseCode = getValue("courseCode", "");
    $courseName = getValue("courseName", "");
    $profName = getValue("profName", "");
    
    if ($courseCode != "" && $courseName != "" && $profName != "")
    {
        $stmt = $conn->prepare("INSERT INTO MyCourses(CourseCode, CourseName, ProfName) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $courseCode, $courseName, $profName);
        $stmt->execute();
        return read($conn);
    }
    else 
    {
        return array("error"=>"All fields are required");    
    }
}

function read($conn)
{
    $result = $conn->query("SELECT * FROM MyCourses");
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) 
    {
        $rows[] = $r;
    }
    return $rows;
}

function update($conn)
{
    $courseID = getValue("courseID", "");
    $courseCode = getValue("courseCode", "");
    $courseName = getValue("courseName", "");
    $profName = getValue("profName", "");
    
    if ($courseCode != "" && $courseName != "" && $profName != "")
    {
        $stmt = $conn->prepare("UPDATE MyCourses SET CourseCode = ?, CourseName = ?, ProfName = ? WHERE CourseID = ?");
        $stmt->bind_param("sssi", $courseCode, $courseName, $profName, $courseID);
        $stmt->execute();
        return read($conn);
    }
    else 
    {
        return array("error"=>"All fields are required");    
    }
}

function delete($conn)
{
    $courseID = getValue("courseID", "");

    if ($courseID != "")
    {
        $stmt = $conn->prepare("DELETE FROM MyCourses WHERE CourseID = ?");
        $stmt->bind_param("i", $courseID);
        $stmt->execute();
        return read($conn);
    }
    else 
    {
        return array("error"=>"All fields are required");    
    }
}



?>
