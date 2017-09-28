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

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <script type="text/javascript">
        document.body.innerHTML = '';
    </script>
    <div class="container">
      <h2>SUCCESSFULLY SUBMITTED</h2>
      <p><b>to go back</b></p>
      <button type="button" id="link-btn"><a href="../faculty_login.html">click here</a></button>
    </div>


    <style media="screen">


            *{
           padding : 0px;
           margin : 0px;
           text-decoration: none;
            }


       .container {
        background-color :  rgba(102, 255, 102,0.7);
         height : 140px;
         width : 500px;
        position : relative;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        top : 200px;
        left : 400px;
       }


  h2 {
        position : absolute;
        font-family:'Jaapokki subtract';
        letter-spacing: 2px;
        top : 30px;
        left : 70px;
       color : #0099ff;

  }

     p {
       position: absolute;
       top : 83px;
       left : 160px;
      font-size: 18px;
      color : #3333ff;
     }


       button {
         position : absolute;
         top : 81px;
         left : 250px;
         background-color : white;
         color : black;
         font-size: 15px;
         border-radius : 2px;
         border : 2px solid green;
         padding : 2px;
       }


         button:hover {
           background-color: green;
           color: white;
           box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);


         }



    </style>
  </body>
</html>

<?php



} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
