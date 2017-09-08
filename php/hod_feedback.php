<?php     
session_start();
$id=$_SESSION['ID'];
$name=$_SESSION['NAME'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techdb";
    
    
    
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
} 

    
    
 $sql= "SELECT DEPARTMENT FROM facultyinfo WHERE ID='$id' AND HOD='YES'";   
    
 $result=$conn->query($sql);    
    
if($row = $result->fetch_assoc())    

{
    
    $_SESSION['DEPARTMENT']=$row['DEPARTMENT']; 
    header("location:hod_feedback2.php");
}
    else {
        ?>

         <script type="text/javascript">
                alert("YOU are not an HOD");
      </script>
<?php
        
    }
    

    $conn->close();
    
    ?>