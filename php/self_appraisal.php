<?php
session_start();
$name=$_SESSION['NAME'];

?>




<script type="text/javascript" src="../jquerry/jquerry.js"></script>
<script>

$(Document).ready(function() {
                            
        $("#welcome_div #X").click(function() {
            
            $("#welcome_div").css("display","none");
                        
        });          
                   });



</script>





<style>

body {
        
    background-image: url("images/hd1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    }    
    
    

.heading_slot {
padding-top : 20px;
position : relative;
margin : 2px auto;
height : 30px;
padding-left : 80px;
}

.heading_slot .heading {
position : absolute;
top: 10px;
left : 230px;
}
.heading h1 {
font-size : 24px;
font-family : 'AvenueX';
letter-spacing : 4px;
}

.container1 {
margin-top: 70px;
width : 700px;
margin-left : 250px;
position : relative;
height : 500px;
}

.slot .elements {
width : 300px;
font-size : 17px;
}

.slot {
padding-top : 20px;
position : relative;
background-color : #99ffcc;
margin : 2px auto;
height : 30px;
padding-left : 80px;
}


.slot select {
position : absolute;
top : 18px;
left : 480px;
}

.slot span{
position : absolute;
top : 18px;
left : 480px;
}


.slot .bottombtn {
padding-top : 7px;
padding-left : 7px;
padding-right : 7px;
padding-bottom : 7px;
border : 2px solid  #00ff00;
background-color :white;
color : black;
}

.slot .bottombtn:hover {
background-color : #00ff00;
color : white;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

#button1 {
position : absolute;
top : 10px;
left : 250px;
}

#button2 {
position : absolute;
top : 10px;
left : 350px;
}

#button_cont {
position : absolute;
top: 415px;
width : 620px;
}
    
    
    #welcome_div {
position : absolute;
top: 90px;
left : 900px;
height : 20px;
width : 200px;        
letter-spacing: 3px;
background-color: chartreuse;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
padding-top : 5px;
padding-left : 30px;        
font-size: 13px;
border-radius:4px;
color : black;        
    }    
    
    
    #welcome_cross {
    color : white;    
    position : absolute;
    top:-1px;  
    left: 215px;    
    font-size: 10px;    
    cursor: pointer;    
    }    
    
    
    #welcome_cross:hover {
        color : black;    
    }
    

</style>

<div id="welcome_div"> <span id="welcome_cross"><b id="X">X</b></span> <h4>Welcome Mr.<?php echo $name; ?></h4></div>


<div class="container1"> 
<form action="php/self_appraisal_submit.php" method="POST">
<div class ="heading_slot">
<div class="heading"> 
<h1>
SELF APPRAISAL
</h1>
</div>
</div>

<div class="slot">
  <div class="elements">
  RESEARCH PAPER :  </div>
                   
                          <select name="research">
                           <option>None
                           <option>1-2
				           <option>More than 2
				           </select>
                          <br>
</div>
<div class="slot">				 
 <div  class="elements">
 PROJECT GUIDED : </div>
            <select name="project">
                 <option>None
                 <option>1-2
				 <option>More than 2
				 </select>
				 
				 <br>
</div>
<div class="slot">
<div class="elements">
THESIS GUIDED  :  </div><select name="thesis">
                 <option>None
                 <option>1-2
				 <option>More than 2
				 </select>
				 
				 <br>
</div>
<div class="slot">
<div class="elements">
CONFERENCE/SEMINAR ATTENDED :</div>  <select name="sem_attended">
                 <option>None
                 <option>1-2
				 <option>More than 2
				 </select>		
				 
                    <br>
</div>
<div class="slot">		
<div class="elements">		
SEMINAR CONDUCTED :  </div><select name="sem_conducted">
                 <option>None
                 <option>1-2
				 <option>More than 2
				 </select>	
				 
                    <br>				 
</div>
<div class="slot">
<div class="elements">
CONFERENCE/SEMINAR CHAIRED :</div>  <select name="sem_chaired">
                 <option>None
                 <option>1-2
				 <option>More than 2
				 </select>
				 
                   <br>				 
</div>
<div class="slot">
<div class="elements">
EXTRA CURICULAR : </div> <span><input  type="radio" value="yes" name="radio-btn" class="radios">YES<input type="radio"  name="radio-btn"class="radios" value="no">NO
                   </span></div>
                    <br>

<div class="slot" id="button_cont">					
            <input type="submit"   class ="bottombtn" id="button1" value="SUBMIT">
            <input type="reset" class ="bottombtn" id="button2" value="RESET">
</div>			
</form>

</div>
