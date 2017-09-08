<?php

session_start();
$research_guided=$_POST["research"];
$project_guided=$_POST["project"];
$thesis=$_POST["thesis"];
$seminar_att=$_POST["sem_attended"];
$seminar_con=$_POST["sem_conducted"];
$seminar_ch=$_POST["sem_chaired"];
$extra=$_POST["radio-btn"];
$id=$_SESSION["ID"];

$servername = "localhost";

$username = "root";
$password = "";
$dbname = "techdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
} 



if($research_guided == "NONE") $research_guided = 0; 
else if ($research_guided == "1-2") $research_guided = 5; 
else $research_guided = 10;

if($project_guided == "NONE") $project_guided= 0; 
else if ($project_guided== "1-2") $project_guided= 5; 
else $project_guided= 10;


if($thesis == "NONE") $thesis= 0; 
else if ($thesis== "1-2") $thesis= 5; 
else $thesis= 10;

if($seminar_att== "NONE") $seminar_att= 0; 
else if ($seminar_att== "1-2") $seminar_att=5; 
else $seminar_att= 10;

if($seminar_con== "NONE") $seminar_con=0; 
else if ($seminar_con== "1-2") $seminar_con=5; 
else $seminar_con= 10;


if($seminar_ch== "NONE") $seminar_ch=0; 
else if ($seminar_ch== "1-2") $seminar_ch=5; 
else $seminar_ch= 10;


if($extra=="yes") $extra=5;  
else $extra=0;



$sc= ($research_guided+$project_guided+$thesis+$seminar_att+$seminar_con+$seminar_ch+$extra)/7;
$sql="UPDATE facultyinfo SET SCORE2 =$sc WHERE ID=$id ";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>