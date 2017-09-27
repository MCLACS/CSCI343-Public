
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
if ($cmd == "getCourses")
{
    $response = getCourses($conn);
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "addCourse")
{
    $response = addCourse($conn);
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "editCourse")
{
    $response = editCourse($conn);
    header('Content-type: application/json');
    echo json_encode($response);
}
else if ($cmd == "deleteCourse")
{
    $response = deleteCourse($conn);
    header('Content-type: application/json');
    echo json_encode($response);
}

else // list all supported commands
{
  echo
  "
    <pre>
        Command: getCourses
      
            Description: Returns an array of all of the courses in the database
            
            Parameters: none

            Example:
                Query string: ?cmd=getCourses
                Returns: 
    </pre>            
  ";
}

function getCourses($conn)
{
    $result = $conn->query("SELECT * FROM MyCourses");
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) 
    {
        $rows[] = $r;
    }
    return $rows;
}

function addCourse($conn)
{
    $courseCode = getValue("courseCode", "");
    $courseName = getValue("courseName", "");
    $profName = getValue("profName", "");
    
    if ($courseCode != "" && $courseName != "" && $profName != "")
    {
        $stmt = $conn->prepare("INSERT INTO MyCourses(CourseCode, CourseName, ProfName) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $courseCode, $courseName, $profName);
        $stmt->execute();
        return getCourses($conn);
    }
    else 
    {
        return array("error"=>"All fields are required");    
    }
}

function editCourse($conn)
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
        return getCourses($conn);
    }
    else 
    {
        return array("error"=>"All fields are required");    
    }
}

function deleteCourse($conn)
{
    $courseID = getValue("courseID", "");

    if ($courseID != "")
    {
        $stmt = $conn->prepare("DELETE FROM MyCourses WHERE CourseID = ?");
        $stmt->bind_param("i", $courseID);
        $stmt->execute();
        return getCourses($conn);
    }
    else 
    {
        return array("error"=>"All fields are required");    
    }
}



?>
