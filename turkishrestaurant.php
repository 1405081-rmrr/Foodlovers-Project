<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    
<style type="text/css">
.image1 {
  
  position : fixed;
  bottom : 50%;
  left : 65%;
}
.image2
{
  position : fixed;
  bottom : 50%;
  right : 80%;
  
}
.image3
{
  position : fixed;
  top : 60%;
  left : 65%;
  
}
.image4
{
  position : fixed;
  top : 60%;
  right : 80%;
  
}
body, html {
    height: 100%;
    margin: 0;
    background-color: #D7BDE2  ;
}

.bg {
    /* The image used */
    
background-color: #1C2833         ;
    /* Full height */
    height: 100%; 
   
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
}
.button1
{
	
	background-color: #F0B27A ;
	position : absolute;
	left : 42%;
	top : 30%;
    border: none;
    color: #D35400      ;
    padding: 20px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 5px 5px;
    cursor: pointer;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button2
{
	
	background-color: #AED6F1        ;
	position : absolute;
	right : 44%;
	bottom  : 47%;
    border: none;
    color: #D35400  ;
    padding: 20px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 5px 10px;
    cursor: pointer;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button3
{
    
    background-color: #76D7C4     ;
    position : absolute;
    right : 44%;
    top : 60%;
    border: none;
    color: #D35400      ;
    padding: 20px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 5px 10px;
    cursor: pointer;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button4
{
    
    background-color: #A3E4D7      ;
    position : absolute;
    right : 44%;
    top : 75%;
    border: none;
    color: #D35400      ;
    padding: 20px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 5px 10px;
    cursor: pointer;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button5
{
    
    background-color: #C39BD3    ;
    position : absolute;
    right : 44%;
    top : 90%;
    border: none;
    color: #D35400      ;
    padding: 20px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 5px 10px;
    cursor: pointer;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button13
{
    
    background-color: #85C1E9 ;
    position : absolute;
    right : 10%;
    top : 2%;
    border: none;
    color: #D35400      ;
    padding: 20px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 5px 5px;
    cursor: pointer;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

 .content {

      position: absolute;

      top: 100%;

      width: 100%;

      height: 700px;
background-color: #1C2833         ;


    }
</style>
</head>
<body>
<h1> <pre>            Turkish Food       <font color="blue">   <i>Please select your Restaurant</i> </font></h1>
<div class="content"> </div>
<div class="bg"> </div>
<div class="image1"> 
<img src="indian.jpg" alt="Mountain View" width="300" height="200" >  </div>
<div class="image2"> 
<img src="bangla.jpg" alt="Mountain View" width="250" height="200" >  </div>
<div class="image3"> 
<img src="mughal.jpg" alt="Mountain View" width="300" height="200" >  </div>
<div class="image4"> 
<img src="chinese.jpg" alt="Mountain View" width="250" height="200" >  </div>

<form method="post" action="banglarestaurant.php">

<button type="button"  class="button1" name= "nawabi_voj" style="width:200px;"  onclick= "document.location='turkishpinewood.php'">Pine Wood</button> 
<button type="button"  class="button2" style="width:200px;" onclick= "document.location='turkishcilantro.php'">Cilantro</button> 
<button type="button"  class="button3" style="width:200px;" onclick= "document.location='turkishvooterbari.php'">Vooter bari</button> 
<button type="button"  class="button4" style="width:200px;" onclick= "document.location='turkishamericanking.php'">American King</button> 
<button type="button"  class="button13" style="width:200px;" onclick= "document.location='category.php'">Back to Category</button>

</form>

</body>
</html>