<?php


$select=$_POST["fn"];
$preparation=$_POST["prep"];
$question=$_POST["ques_hand"];
$knowledge=$_POST["know_sub"];
$method=$_POST["method_used"];
$language=$_POST["lang"];
$interac=$_POST["interaction"];

$servername = "localhost";

$username = "root";
$password = "";
$dbname = "techdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
} 

$sql1= "SELECT  SCORE FROM facultyinfo WHERE NAME='$select'";
$result=$conn->query($sql1);

if ($row = $result->fetch_assoc()) 
{
 $score=$row['SCORE'];   
}
    
        
$sc= ($preparation+$question+$knowledge+$method+$language+$interac)/6;

$fin_score =($sc + $score)/2;

$sql="UPDATE facultyinfo SET SCORE = $fin_score WHERE NAME='$select' ";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}













$conn->close();
?>