<?php

$name=$_POST["fac_name"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techdb";
$score=$_POST["hod_score"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql="UPDATE facultyinfo SET SCORE3 = '$score' WHERE NAME='$name' ";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


?>