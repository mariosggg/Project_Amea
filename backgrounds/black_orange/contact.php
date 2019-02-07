<html lang="el-GR">


<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Τουρισμός ΚΑΙ ΑμεΑ</title>
	   <script src="js/top1.js"></script>
	   <script src="js/top2.js"></script>


   

<meta name="description" content="Welcome to Heraklion">
		<meta name="keywords" content="html, javascript, css">

		<link rel="shortcut icon" href="images/favicon.ico">
<link href="style.css" rel="stylesheet" type="text/css" />
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
	   <script>
	   var Arxikh = new Audio();
	   Arxikh.src = "../../sounds/Arxikh.mp4";
	   var hotels = new Audio();
	   hotels.src = "../../sounds/hotels.mp4";
	   var restaurant = new Audio();
	   restaurant.src = "../../sounds/restaurant.mp4";
	   var beaches = new Audio();
	   beaches.src = "../../sounds/beaches.mp4";
	   var museum = new Audio();
	   museum.src = "../../sounds/museum.mp4";
	   var contact = new Audio();
	   contact.src = "../../sounds/contact.mp4";
	   </script>

</head>

<body>

	<div id="section_top">
    
    	<div class="container">
		
        	<div id="header">
				<div id="logo_section">   
		<h4><script>
		var d=new Date()

		var weekday=new Array("Κυριακή", "Δευτέρα", "Τρίτη", "Τετάρτη", "Πέμπτη", "Παρασκευή", "Σάββατο")

		var monthname=new Array("Ιαν", "Φεβ", "Μαρ", "Απρ", "Μαι", "Ιουν", "Ιουλ", "Αυγ", "Σεπ", "Οκτ", "Νοε", "Δεκ")

		document.write(weekday[d.getDay()] + ", ")

		document.write(d.getDate() + "  ")

		document.write(monthname[d.getMonth()] + " ")

		document.write(d.getFullYear())
		</script></h4>	<br>		
						<div id="logo_section1"> 		
		<img src="images/audio.png" alt="Sound" width="42" height="42"&nbsp;&nbsp;/>
		</div>
		<h2>&nbsp;&nbsp;Ηχητικά Κείμενα για τα ΑμεΑ</h2>
		        	        <h1><a href="index.html" target="_parent">Καλωσορίζουμε τα ΑμεΑ</a></h1><br>
							<br><h1><a href="index.html" target="_parent">στο Ηράκλειο</a></h1>
				</div>
              
         	</div><!-- end of headder -->
                
    		<div id="menu_panel">
            							
				
				
    			<div id="menu_section">
				
				

									
										
            		<ul>
		                <li><a href="index.html" onmouseover="Arxikh.play()">Αρχική</a></li>
        		        <li><a href="hotels.html" onmouseover="hotels.play()">Ξενοδοχεία</a></li>
		                <li><a href="rest.html" onmouseover="restaurant.play()">Εστιατόρια</a></li>
						<li><a href="beaches.html" onmouseover="beaches.play()">Παραλίες</a></li>
						<li><a href="museum.html" onmouseover="museum.play()">Μουσεία</a></li>
                		<li><a href="contact.php" onmouseover="contact.play()">Επικοινωνία</a></li> 
		            </ul> 
							
				
                    
				</div>
				
                
		    </div> <!-- end of menu -->
            	
		</div><!-- end of container-->
        
	</div><!-- end of background_section_top-->

    
		<div id="background_section_middle">
  
    	
		
<div id="pos2">
<form action="contactF.php" method="post">
Όνομα:<br> 
<input type="text" name="name">
<br>
Επώνυμο:<br>
<input type="text" name="lastname">
<br>
Ηλεκτρονικό Ταχυδρομείο:<br> 
<input type="text" name="email">
<br>
Σχόλια:<br>
<textarea name="comment" rows="10" cols="30"></textarea>
<br>
<input type="submit" name="Υποβολή">
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
			Αλλαγή Χρωμάτων
			</div>
	<div id="flags2">
<form>
<select name="menu" style= "background-color: #ccff00;">
<option value="../../index.html">Αρχικά Χρώματα</option>
<option value="index.html">Μαύρο Πράσινο</option>
<option value="../black_orange/index.html">Μαύρο Πορτοκαλί</option>
<option value="../blue_white/index.html">Μπλέ Άσπρο</option>
<option value="../yellow_black/index.html">Κίτρινο Μαύρο</option>
</select>
<input style="background-color: #ccff00;" type="button" onClick="location=this.form.menu.options[this.form.menu.selectedIndex].value;" value="Υποβολή">
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
                   Χρήσιμα links</div>
                <div class="body">
                   <ul>
                    
                    	<li><a href="http://amea-blog.blogspot.gr/" target="_blank">ΔΙΚΑΙΩΜΑΤΑ ΚΑΙ ΠΑΡΟΧΕΣ ΑΜΕΑ</a></li>
                        <li><a href="http://nomameaira.blogspot.gr/" target="_parent">ΣΩΜΑΤΕΙΟ ΑΜΕΑ Ν. ΗΡΑΚΛΕΙΟΥ</a></li>
                        <li><a href="http://www.newsitamea.gr/category/%CE%B1%CE%BC%CE%B5%CE%B1-news/" target="_parent">ΑΜΕΑ NEWS</a></li>
                        
                    	<li><a href="http://www.ameagreek.gr/" target="_parent">AMEAGREEK.GR</a></li>
                        <li><a href="http://www.healthpages.gr/portal/page/portal/1535/Fullstory?ArticleID=625" target="_parent">ΤΗΛΕΦΩΝΑ ΕΚΤΑΚΤΗΣ ΑΝΑΓΚΗΣ</a></li>
                        <li><a href="http://www.heraklion.gr/ourplace/useful-phones/useful-phones.html" target="_parent">ΧΡΗΣΙΜΑ ΤΗΛΕΦΩΝΑ ΗΡΑΚΛΕΙΟΥ</a></li>
                  
                    </ul>
                </div>
            </div>
       
            <div style="float:right;" class="bottom_section_box">
            	<div class="top">Άδεια ΕΛ/ΛΑΚ</div>
                <div class="body">
                    <a rel="license" >Το έργο <span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Dataset" property="dct:title" rel="dct:type">ΤΟΥΡΙΣΜΟΣ ΚΑΙ ΑμεΑ</span> διατίθεται υπό την <br><a href="http://creativecommons.org/licenses/by/4.0/"></a><a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Άδεια Creative Commons 4.0<br/></a><br><img alt="Άδεια Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png"/>	
                </div>
            </div>
        </div>

    </div>
	<div id="footer_bottom">
<h4>copyright © 2014 Προδιαγραφές για διευκόλυνση πρόσβασης σε ΑμεΑ </h4>
</div>></body>

</html>