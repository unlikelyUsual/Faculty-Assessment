<?php

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

$sql= "SELECT ID,SCORE,SCORE2,SCORE3 FROM facultyinfo ";
$result=$conn->query($sql);


if ($result->num_rows > 0) {

while($row = $result->fetch_assoc())
{
$temp = $row['ID'];
$tempvar = ($row['SCORE']+$row['SCORE2']+$row['SCORE3']);

$sql1="UPDATE facultyinfo SET FINALSCORE=$tempvar WHERE ID=$temp ";


$conn->query($sql1);

}
?>

  <html> <script type="text/javascript"> alert ("FINAL SCORE UPDATED "); </script><body></body></html>
<?php

//header("location:../student_reg.html");
}



$conn->close();

?>
