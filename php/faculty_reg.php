<?php

$id_inp=$_POST["id_inp"];
$pass=$_POST["password_inp"];
$name=$_POST["name_inp"];
$dept=$_POST["department_inp"];
$hod=$_POST["hod_inp"];
$sem1=$_POST["c_sem1"];
$sem2=$_POST["c_sem2"];
$sem3=$_POST["c_sem3"];
$sem4=$_POST["c_sem4"];
$sem5=$_POST["c_sem5"];
$sem6=$_POST["c_sem6"];
$sem7=$_POST["c_sem7"];
$sem8=$_POST["c_sem8"];
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
          <h2>SUCCESSFULLY CREATED RECORD</h2>
          <p><b>to go back</b></p>
          <button type="button" id="link-btn"><a href="../admin_login.html">click here</a></button>
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
            left : 25px;
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
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
