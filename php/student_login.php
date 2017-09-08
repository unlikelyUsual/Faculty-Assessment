<?php

session_start();
$usrn=$_POST["username"];
$pass=$_POST["password"];

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




$sql = "SELECT SEMESTER FROM studentinfo where ID='$usrn' AND PASSWORD='$pass'";
$result = $conn->query($sql);



if ($row = $result->fetch_assoc()) 
{
     $_SESSION['SEMESTER']=$row['SEMESTER'];

        header("location:../student_login.html");
        
    
}
else {
    
    header("location:../index.html");
    
}




$conn->close();
?>