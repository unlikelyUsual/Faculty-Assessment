<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techdb";

$id=$_SESSION['ID'];
$dept=$_SESSION['DEPARTMENT'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql="SELECT NAME FROM facultyinfo WHERE  DEPARTMENT='$dept'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?>


<style>

*  {
margin : 0px;
padding: 0px;
text-decoration: none;
list-style: none;            }     
    

body {
        
    background-image: url("images/hd1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    }    
    
    
    
#feed_cont {    
    background-color: rgba(102, 102, 102 , 0.5);
    height: 215px;
    width: 650px;
	margin-top : 100px;
	margin-left : 250px;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);      
        }      
    
    
 #feed_cont #feed_head {
    position : relative;
    height: 50px;    
         }    
    
    
#feed_cont #feed_head h1 {
position : absolute;    
padding-top : 10px;
padding-left : 20px;
padding-bottom : 10px;
background-color : #33cc33;
color : white;
width : 300px;
letter-spacing : 5px;
font-size : 24px;
top : -10px;
left : 150px;    
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
border-radius : 3%;    
    } 
    
    
    
    
    
 #feed_cont .slot {
    font-size : 19px; 
    background-color : white;
    height :   50px;
    margin-bottom : 2px;
    position : relative ;
    }
    
    

.slot .fields {
margin-left : 60px;
padding-top : 10px;    
        
    }

.slot select {
position : absolute;
top : 10px;
left : 450px;    
        
    }    
    
    
    
    
#btn_div {
background-color:white;         
height : 60px;        
position : relative;    
    }    
    
    
#btn_div .btn {
 padding-top : 7px;
 padding-left : 7px;
 padding-right : 7px;
 padding-bottom : 7px;
 border : 2px solid  #33cc33;
 background-color : white;
 margin-right : 40px;
 position : absolute;
}


#btn_div .btn:hover {
 background-color : #33cc33;
 color : white;
 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}    
   
    
#btn_div #btn1 {
top : 10px;        
left : 250px;        
    }   
    
    
#btn_div #btn2 {
top : 10px;
left : 340px;    
    }    

</style>



<div id="feed_cont">
<form action="php/hod_feedback2_submit.php" method="POST">
<div id="feed_head">
<h1> HOD's FEEDBACK</h1>
</div>    
    

               
<div class="slot">    
    <div class="fields"> FACULTY NAME   </div> <select name="fac_name">
                                                            
      <?php
while($row = $result->fetch_assoc())
{ 
?>
<option>
<?php 
echo  $row['NAME'];} ?>
</select>
<?php     
 }
?>	
    
    
    
    
                               </div>
    
<div class="slot">    
    <div class="fields"> FEEDBACK   </div> <select name="hod_score">
    
                      <option>0</option>
                      <option>1</option>   
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                     <option>9</option>
                     <option>10</option> 
    </select></div>   
			  
    
    
    
<div id="btn_div">    
<input type="submit" class="btn" value="SUBMIT" id="btn1" >
 <input type="reset"   class="btn" value="RESET"  id="btn2">
    </div>    
    
</form>

</div>