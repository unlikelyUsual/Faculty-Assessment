<?php
session_start();
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

$aa=$_SESSION['SEMESTER'];
 if($aa=='1') 
     
     $sql = "SELECT NAME FROM facultyinfo WHERE SEM1='1' ";

else if 

    ($aa=='2') 
     
     $sql = "SELECT NAME FROM facultyinfo WHERE SEM2='1' ";
else if 

    ($aa=='3') 
     
     $sql = "SELECT NAME FROM facultyinfo WHERE SEM3='1' ";
else if 

    ($aa=='4') 
     
     $sql = "SELECT NAME FROM facultyinfo WHERE SEM4='1' ";
else if 

    ($aa=='5') 
     
     $sql = "SELECT NAME FROM facultyinfo WHERE SEM5='1' ";

else if 

    ($aa=='6') 
     
     $sql = "SELECT NAME FROM facultyinfo WHERE SEM6='1' ";
else if 

    ($aa=='7') 
     
     $sql = "SELECT NAME FROM facultyinfo WHERE SEM7='1' ";
else if 

    ($aa=='8') 
     
     $sql = "SELECT NAME FROM facultyinfo WHERE SEM8='1' ";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?>















<style>
*{
margin : 0px;
padding : 0px;
}

    
    
body {
        
    background-image: url("images/hd1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    }    

#feedback_cont {
    background-color: rgba(102, 102, 102 , 0.5);
    height: 435px;
    width: 700px;
	margin-top : 100px;
	margin-left : 250px;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


#feedback_cont #head_div {
padding-top: 10px;
padding-left : 220px;

}


#feedback_cont #head_div h1 {
padding-top : 10px;
padding-left : 20px;
padding-bottom : 10px;
background-color : #33cc33;
color : white;
width : 270px;
letter-spacing : 5px;
font-size :39px;
margin-top : -35px;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
border-radius : 3%;
}


.slot {
letter-spacing : 3px;
font-size : 18px;
height : 35px;
background-color : white;
margin-bottom : 2px;
position : relative;
padding-top : 10px;
padding-left : 50px;
}


.slot select {
position : absolute;
top : 10px;
left : 550px;


}


.slot .btn {
 padding-top : 7px;
 padding-left : 7px;
 padding-right : 7px;
 padding-bottom : 7px;
 border : 2px solid  #33cc33;
 background-color : white;
 margin-right : 40px;
 position : absolute;
}


.slot .btn:hover {
 background-color : #33cc33;
 color : white;
 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.slot #btn1 {
left : 240px;
top : 10px;
}


.slot #btn2 {
left : 340px;
top : 10px;

}


#btn_div {
height : 50px;
}
</style>
<div id="feedback_cont">
<form action="php/student_feedback_submit.php" method="POST">
<div id="head_div">
                <h1>FEEDBACK</h1><br>
</div>

<div class="slot">          
<div class="attribute">FACULTY NAME : </div><select name="fn">

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

<div class="attribute">PREPARATION :  </div><select name="prep"> 
		               <option>0
		               <option>1
					   <option>2
					   <option>3
					   <option>4
					   <option>5
					   <option>6
					   <option>7	
					   <option>8
					   <option>9
					   <option>10 
                       </select>
 </div>
 <div class="slot">
<div class="attribute">QUESTION HANDLING : </div><select name="ques_hand">
	                   <option>0
		               <option>1
					   <option>2
					   <option>3
					   <option>4
					   <option>5
					   <option>6
					   <option>7	
					   <option>8
					   <option>9
					   <option>10 
                       </select>
 </div>
 <div class="slot"> 
 <div class="attribute">KNOWLEDGE OF SUBJECT :  </div><select name="know_sub">
	                   <option>0
		               <option>1
					   <option>2
					   <option>3
					   <option>4
					   <option>5
					   <option>6
					   <option>7	
					   <option>8
					   <option>9
					   <option>10 
                       </select>
 </div>
 <div class="slot"> 
						
<div class="attribute">METHOD USED :  </div><select name="method_used">
		               <option>0
		               <option>1
					   <option>2
					   <option>3
					   <option>4
					   <option>5
					   <option>6
					   <option>7	
					   <option>8
					   <option>9
					   <option>10 
                       </select>
  </div>
  <div class="slot">  

<div class="attribute">LANGUAGE :  </div><select name="lang">
		               <option>0
		               <option>1
					   <option>2
					   <option>3
					   <option>4
					   <option>5
					   <option>6
					   <option>7	
					   <option>8
					   <option>9
					   <option>10 
                       </select>
  </div>
  <div class="slot">  

<div class="attribute">INTERACTION :  </div><select name="interaction">
		               <option>0
		               <option>1
					   <option>2
					   <option>3
					   <option>4
					   <option>5
					   <option>6
					   <option>7	
					   <option>8
					   <option>9
					   <option>10 
                       </select>
  </div>
 
  <div class="slot" id="btn_div"> 

    <input type="submit"  class="btn" id="btn1" value="SUBMIT">
    <input type="reset" class="btn" id="btn2" value="RESET">	
	
  </div>	
                </form>
				
</div>				
