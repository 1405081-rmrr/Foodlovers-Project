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
	top : 25%;
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
	bottom : 48%;
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
    top : 53%;
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
    top : 70%;
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
.button6
{
    
    background-color: #FAD7A0      ;
    position : absolute;
    right : 44%;
    top : 107%;
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
.button7
{
    
    background-color: #85C1E9     ;
    position : absolute;
    right : 44%;
    top : 122%;
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
.button8
{
    
    background-color: #D4EFDF     ;
    position : absolute;
    right : 44%;
    top : 135%;
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
.button9
{
    
    background-color: #D7DBDD      ;
    position : absolute;
    right : 44%;
    top : 150%;
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
.button10
{
    
    background-color: #A3E4D7    ;
    position : absolute;
    right : 44%;
    top : 170%;
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
.button11
{
    
    background-color: #EBDEF0     ;
    position : absolute;
    right : 44%;
    top : 185%;
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

      height: 1200px;
background-color: #1C2833         ;


    }
</style>
</head>
<body>
<h1> <pre>     Thai Food            <font color="blue">     <i>Please select your Restaurant</i></font> </h1>
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

<form method="post" action="burger1.php">

<button type="button"  class="button1" style="width:200px;" onclick= "document.location='thaikfc.php'">KFC</button> 
<button type="button"  class="button2" style="width:200px;" onclick= "document.location='thainawabivoj.php'">Nawabi Voj</button> 
<button type="button"  class="button3" style="width:200px;" onclick= "document.location='thaiasianbistro.php'">Asian Bistro</button> 
<button type="button"  class="button4" style="width:200px;" onclick= "document.location='thaitasteoflanka.php'">Taste of Lanka</button>
<button type="button"  class="button5" style="width:200px;" onclick= "document.location='thaitreehouse.php'">Tree House</button> 
<button type="button"  class="button6" style="width:200px;" onclick= "document.location='thaimadchef.php'">Madchef</button> 
<button type="button"  class="button7" style="width:200px;" onclick= "document.location='thairatatouille.php'">Ratatouille</button> 
<button type="button"  class="button8" style="width:200px;" onclick= "document.location='thaihobnob.php'">Hobnob</button> 
<button type="button"  class="button9" style="width:200px;" onclick= "document.location='thaidelhidarbar.php'">Delhi Darbar</button> 
<button type="button"  class="button10" style="width:200px;" onclick= "document.location='thaichillis.php'">Chillis</button>
<button type="button"  class="button13" style="width:200px;" onclick= "document.location='category.php'">Back to Category</button>   


</body>
</html>