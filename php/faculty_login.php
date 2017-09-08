<?php

session_start();
$usrn=$_POST["fac_usr"];
$pass=$_POST["fac_pass"];

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




$sql = "SELECT NAME,ID,DEPARTMENT  FROM facultyinfo where ID='$usrn' AND PASSWORD='$pass'";
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) 
{
     $_SESSION['NAME']=$row['NAME'];
     $_SESSION['ID']=$row['ID'];
    header("location:../faculty_login.html");
        
    
}
else {
    
    header("location:../index.html");
    
}

$conn->close();
?>