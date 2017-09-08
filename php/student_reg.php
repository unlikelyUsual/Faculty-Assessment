<?php 

$id_inp=$_POST["id"];
$pass=$_POST["password"];
$name=$_POST["name"];
$branch=$_POST["branch"];
$semester=$_POST["semester"];
$roll_no=$_POST["roll_no"];


$servername="localhost";
$username="root";
$password="";
$database="techdb";


// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
} 


$sql = " INSERT INTO studentinfo (ID,PASSWORD,NAME,BRANCH,SEMESTER,ROLL_NO)
        VALUES ('$id_inp','$pass','$name','$branch','$semester','$roll_no')

";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>