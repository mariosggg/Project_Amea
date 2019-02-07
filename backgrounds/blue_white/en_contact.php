<html lang="el-GR">


<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Τουρισμός ΚΑΙ ΑμεΑ</title>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter=new google.maps.LatLng(35.341846,25.148254);
function initialize() {
var mapProp = {
center:myCenter,
zoom:5,
mapTypeId:google.maps.MapTypeId.ROADMAP
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

function loadScript()
{
var script = document.createElement("script");
script.type = "text/javascript";
script.src = "http://maps.googleapis.com/maps/api/js?key=&sensor=false&callback=initialize";
document.body.appendChild(script);
}
window.onload = loadScript;;
</script>
	   <script src="js/top1.js"></script>
	   <script src="js/top2.js"></script>
  

   

<meta name="description" content="Welcome to Heraklion">
		<meta name="keywords" content="html, javascript, css">

		<link rel="shortcut icon" href="images/favicon.ico">
<link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>

	<div id="section_top">
    
    	<div class="container">
		
        	<div id="header">
				<div id="logo_section">   
		<h4><script>
		var d=new Date()

		var weekday=new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")

		var monthname=new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec")

		document.write(weekday[d.getDay()] + ", ")

		document.write(d.getDate() + "  ")

		document.write(monthname[d.getMonth()] + " ")

		document.write(d.getFullYear())
		</script></h4>	<br>
						<div id="logo_section1"> 		
		<img src="images/audio.png" alt="Sound" width="42" height="42"&nbsp;&nbsp;/>
		</div>
		<h2>&nbsp;&nbsp;Audio texts for the Disabled</h2>
		        	        <h1><a href="index.html" target="_parent">We welcome people</a></h1><br>
							<br><h1><a href="index.html" target="_parent">with disabilities in Heraklion</a></h1>
				</div>
              
         	</div><!-- end of headder -->
                
    		<div id="menu_panel">
            							
				
				
    			<div id="menu_section">
				
				

									
										
            		<ul>
		                <li><a href="en_index.html">Home</a></li>
        		        <li><a href="en_hotels.html">Hotels</a></li>
		                <li><a href="en_rest.html">Restaurants</a></li>
						<li><a href="en_beaches.html">Beaches</a></li>
						<li><a href="en_museum.html">Museums</a></li>
                		<li><a href="en_contact.php">Contact</a></li> 
		            </ul> 
							
				
                    
				</div>
				
                
		    </div> <!-- end of menu -->
            	
		</div><!-- end of container-->
        
	</div><!-- end of background_section_top-->

    
		<div id="background_section_middle">
  
    	
		
<div id="pos2">
<form action="en_contactF.php" method="post">
Name:<br> 
<input type="text" name="name">
<br>
Lastname:<br>
<input type="text" name="lastname">
<br>
E-mail:<br> 
<input type="text" name="email">
<br>
Comments:<br>
<textarea name="comment" rows="10" cols="30"></textarea>
<br>
<input type="submit" name="Submit">
</form>
<!-- -->

<?php
$servername = "localhost";
$username = "user409";
$password = "uvakEmNo";
$dbname = "user409_db1";

$conn = mysqli_connect($servername, $username, $password,$dbname);

$name=$_POST["name"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$comment=$_POST["comment"];
$sql1="INSERT INTO SUBSCRIBERS (NAME,LASTNAME,EMAIL,COMMENTS)
VALUES ('$name','$lastname','$email','$comment');";
$res=$conn->query($sql1);
$sql = "SELECT * FROM SUBSCRIBERS";
$result = $conn->query($sql);


$conn->close();

?>
</div>
<div id="flags"><a href="contact.php"><img src="images/gr.gif" alt="greece" width="60px;"/></a>&nbsp;&nbsp;<a href="en_contact.php"><img src="images/uk.gif" alt="uk" width="60px;"/></a>&nbsp;&nbsp;<a href="fr_contact.php"><img src="images/fr.gif" alt="fr" width="60px;"/></a>&nbsp;&nbsp;</div>
<br><br><br>
			<div id="change">
			Change Colors
			</div>
	<div id="flags2">
<form>
<select name="menu" style= "background-color: #ccff00;">
<option value="../../index.html">Default colors</option>
<option value="en_index.html">Black Green</option>
<option value="../black_orange/en_index.html">Black Orange</option>
<option value="../blue_white/en_index.html">Blue White</option>
<option value="../yellow_black/en_index.html">Yellow Black</option>
</select>
<input style="background-color: #ccff00;" type="button" onClick="location=this.form.menu.options[this.form.menu.selectedIndex].value;" value="Submit">
</form>
</div>
<div id="pos3">
 <div id="googleMap" style="width:80%;height:380px;color:red"></div> 
	</div>	
	</div><!-- end of background middle-->
  
    <div id="bottom_panel">
    	<div id="bottom_section">
        	<div class="bottom_section_box">
            	<div class="top">
                  Useful Links</div>
                <div class="body">
                    <ul>
                    
                    	<li><a href="http://amea-blog.blogspot.gr/" target="_blank">RIGHTS AND BENEFITS DISABLED</a></li>
                        <li><a href="http://nomameaira.blogspot.gr/" target="_parent">CLUB DISABLED IRAKLEIOU</a></li>
                        <li><a href="http://www.newsitamea.gr/category/%CE%B1%CE%BC%CE%B5%CE%B1-news/" target="_parent">DISABLED NEWS</a></li>
                        
                    	<li><a href="http://www.ameagreek.gr/" target="_parent">AMEAGREEK.GR</a></li>
                        <li><a href="http://www.healthpages.gr/portal/page/portal/1535/Fullstory?ArticleID=625" target="_parent">EMERGENCY PHONE NUMBERS</a></li>
                        <li><a href="http://www.heraklion.gr/ourplace/useful-phones/useful-phones.html" target="_parent">USEFUL NUMBERS HERAKLION</a></li>
                  
                    </ul>
                </div>
            </div>
       
            <div style="float:right;" class="bottom_section_box">
            	<div class="top">License EL/LAK</div>
                <div class="body">
                    <a rel="license" >The project <span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Dataset" property="dct:title" rel="dct:type">TOURISM AND DISABILITIES</span> available under <br><a href="http://creativecommons.org/licenses/by/4.0/"></a><a rel="license" href="http://creativecommons.org/licenses/by/4.0/">License Creative Commons 4.0<br/></a><br><img alt="License Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png"/>	
                </div>
            </div>
        </div>

    </div>
	<div id="footer_bottom">
<h4>copyright © 2014 Specifications for facilitating access for the DISABLED </h4>
</div></body>

</html>