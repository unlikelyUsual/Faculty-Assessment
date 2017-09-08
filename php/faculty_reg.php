<?php 

$id_inp=$_POST["id_inp"];
$pass=$_POST["password_inp"];
$name=$_POST["name_inp"];
$dept=$_POST["department_inp"];
$hod=$_POST["hod_inp"];
$sem1=$_POST["ch_sem1"];
$sem2=$_POST["ch_sem2"];
$sem3=$_POST["ch_sem3"];
$sem4=$_POST["ch_sem4"];
$sem5=$_POST["ch_sem5"];
$sem6=$_POST["ch_sem6"];
$sem7=$_POST["ch_sem7"];
$sem8=$_POST["ch_sem8"];
$score="0";
$servername="localhost";
$username="root";
$password="";
$database="techdb";





if($sem1!= '1') $sem1='0'; 
if($sem2!= '1') $sem2='0'; 
if($sem3!= '1') $sem3='0'; 
if($sem4!= '1') $sem4='0'; 
if($sem5!= '1') $sem5='0'; 
if($sem6!= '1') $sem6='0'; 
if($sem7!= '1') $sem7='0'; 
if($sem8!= '1') $sem8='0'; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
} 


$sql = " INSERT INTO facultyinfo (ID,PASSWORD,NAME,DEPARTMENT,HOD,SEM1,SEM2,SEM3,SEM4,SEM5,SEM6,SEM7,SEM8,SCORE)
        VALUES ('$id_inp','$pass','$name','$dept','$hod','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8',$score)

";


if ($conn->query($sql) === TRUE) {
    ?>
    alert ( "New record created successfully");
<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
