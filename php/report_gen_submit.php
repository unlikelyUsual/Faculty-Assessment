<?php 
$id=$_POST["ID"];
$department=$_POST["DEPT"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techdb";
if ($department== "COMPUTER SCIENCE") $department = "cse";
else if($department== "MECHANICAL")$department="me";
else if($department== "ELECTRICAL")$department="ece";
else if($department== "CIVIL") $department="cvl";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT SCORE,SCORE2,SCORE3 FROM facultyinfo WHERE ID=$id ";
$result = mysqli_query($conn, $sql);

$sql2="SELECT NAME FROM facultyinfo WHERE ID=$id ";

$result2 = mysqli_query($conn, $sql2);

?>


<html>
<title>CHART GENERATED</title>
<head>
    <script type="text/javascript" src="../jquerry/jquerry.js" ></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMultSeries);

function drawMultSeries() {
      var data = google.visualization.arrayToDataTable([
        ['SOURCES', 'SCORES'],
          <?php
if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {  
          ?>
          
        ['STUDENTS SCORE',<?php  echo $row['SCORE']; ?> ],
        ['SELF SCORE',<?php echo $row['SCORE2'] ?> ],
        ['HOD SCORE', <?php echo $row['SCORE3'] ?>]
      ]);

 <?php   
    }      
} 

else {
    echo "0 results";
}

mysqli_close($conn);

?>


      var options = {
        title: 'SCORES',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'SCORES ',
          minValue: 0
        }
      };
       
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    
    </script>
    
    
    <style>
    
    * {
margin : 0px;
padding: 0px;     
}
    
    body {
    background-image: url('../images/hd3.jpeg');
    background-repeat: no-repeat;
    background-size: cover;    
        
    }
    
    #container {    
    height :  600px;      
    }    

    
    #container h2 {
        position: absolute;
        font-family: 'Jaapokki subtract';
        letter-spacing: 3px;
        color : black;
        font-size : 30px;
        top : 10px;
        left : 500px;
    }    
    
hr {
height: 2px; 
border : 0;
height: 2px; 
background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));     
         }
    
#container #head_cont{   
position : relative;
height : 70px;
    
    }
    
    
    #container #info {
    background-color: rgba(102, 102, 102 , 0.5);
    height: 200px;
    width : 400px; 
    margin-left: 100px;    
    margin-top : 150px; 
    font-family: 'Jaapokki Regular';
    font-size: 18px;
    letter-spacing: 2px; 
    position: relative; 
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);    
    border-radius: 5px;    
    }    
    
    #container #info img {
    margin-top : 10px;
    margin-left : 10px;    
    position : absolute;
    height :  170px;
    width : 170px;      
    }    
    
    
    #container #info #name{
    position : absolute;
    top : 40px;
    left : 200px;        
    }
    
    
    #container #info #id{
    position : absolute;
    top : 100px;
    left : 200px;        
    }
    
    #container #chart_container {
        position : absolute;
        top : 120px;
        left : 700px;
    }    
    
    
    #container #chart_container img {
        height: 50px;
        width: 50px;
    }
    

    
    #container h3 {
    position: absolute;
    top : 130px;
    left : 760px; 
    font-family: 'Jaapokki Regular';
    font-size : 24px;    
        
    }
    
    
    
    #container #chart_div {
    position : absolute;
    top : 200px;
    left :600px;
    height : 300px;
    width: 600px;    
    background-color: rgba(102, 102, 102 , 0.5); 
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);      
    }
    
    
    
    </style>
    
</head>
<body>
    
<div id="container"> 
<div id="head_cont">   
<h2>GENERATED RESULT</h2>
</div>     
<hr>        
<div id="info">
<img src="../images/User-group-icon.png">
<div id="name"><h4><strong>FAC NAME:</strong></h4><p><?php if(mysqli_num_rows($result2) > 0) {

    while($row = mysqli_fetch_assoc($result2)) {  echo $row['NAME']; } } ?></p></div>
<div id="id"><h4><strong>FAC ID : </strong></h4><p><?php echo $id;  ?></p></div>  
    
</div>    

<div id="chart_container">
<img src="../images/analytics.png"> 
</div>  
    
<h3> BAR CHART FOR SCORES </h3>    
    
<div id="chart_div">    
</div> 
    
</div>s        
</body>
</html>