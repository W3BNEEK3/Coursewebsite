<?php
$conn = new mysqli("localhost", "web_course_project", "web_course_project", "web_course_project");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
