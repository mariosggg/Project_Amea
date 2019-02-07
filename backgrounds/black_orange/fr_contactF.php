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

		var weekday=new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi")

		var monthname=new Array("Jan", "Fιv", "Mars", "Avr", "Mai", "Juin", "Jui", "Aoϋt", "Sep", "Oct", "Nov", "Dιc")

		document.write(weekday[d.getDay()] + ", ")

		document.write(d.getDate() + "  ")

		document.write(monthname[d.getMonth()] + " ")

		document.write(d.getFullYear())
		</script></h4>	<br>
							<div id="logo_section1"> 		
		<img src="images/audio.png" alt="Sound" width="42" height="42"&nbsp;&nbsp;/>
		</div>
		<h2>&nbsp;&nbsp;Sons audio pour personnes handicapées</h2>
		        	        <h1><a href="index.html" target="_parent">Nous accueillons les</a></h1><br>
							<br><h1><a href="index.html" target="_parent">personnes handicapées à Héraklion</a></h1>
				</div>
              
         	</div><!-- end of headder -->
                
    		<div id="menu_panel">
            							
				
				
    			<div id="menu_section">
				
				

									
										
            		<ul>
		                <li><a href="fr_index.html">Maison</a></li>
        		        <li><a href="fr_hotels.html">Hôtels</a></li>
		                <li><a href="fr_rest.html">Restaurants</a></li>
						<li><a href="fr_beaches.html">Plages</a></li>
						<li><a href="fr_museum.html">Musées</a></li>
                		<li><a href="fr_contact.php">Contact</a></li> 

		            </ul> 
							
				
                    
				</div>
				
                
		    </div> <!-- end of menu -->
            	
		</div><!-- end of container-->
        
	</div><!-- end of background_section_top-->

    
		<div id="background_section_middle">
  
    	
		
<div id="pos2">
<form action="fr_contactF.php" method="post">
Nom:<br> 
<input type="text" name="name">
<br>
Nom de famille:<br>
<input type="text" name="lastname">
<br>
E-mail:<br> 
<input type="text" name="email">
<br>
Commentaires:<br>
<textarea name="comment" rows="10" cols="30"></textarea>
<br>
<input type="submit" name="Υποβολή">
</form>
<!-- -->
<div id="pos1">
<b>Merci : <?php echo $_POST["name"]; ?> <?php echo $_POST["lastname"]; ?> </b><br/>
E-mail : <?php echo $_POST["email"]; ?><br/>
Commentaires : <?php echo $_POST["comment"]; ?><br/>
</div>
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
<div id="flags"><a href="contact.php"><img src="images/gr.gif" alt="greece" width="60px;"/></a>&nbsp;&nbsp;<a href="en_contactF.php"><img src="images/uk.gif" alt="uk" width="60px;"/></a>&nbsp;&nbsp;<a href="fr_contact.php"><img src="images/fr.gif" alt="fr" width="60px;"/></a>&nbsp;&nbsp;</div>
		<br><br><br>
			<div id="change">
			Changer les couleurs
			</div>
	<div id="flags2">
<form>
<select name="menu" style= "background-color: #ccff00;">
<option value="../../index.html">Couleurs primaires</option>
<option value="fr_index.html">Noir Vert</option>
<option value="../black_orange/fr_index.html">Noir Orange</option>
<option value="../blue_white/fr_index.html">Bleu Blanc</option>
<option value="../yellow_black/fr_index.html">Jaune Noir</option>
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
                  Liens Utiles</div>
                <div class="body">
                    <ul>
                    
                    	<li><a href="http://amea-blog.blogspot.gr/" target="_blank">DROITS ET AVANTAGES PERSONNES HANDICAPEES</a></li>
                        <li><a href="http://nomameaira.blogspot.gr/" target="_parent">CORPORATION PERSONNES HANDICAPEES Ν. HERAKLION</a></li>
                        <li><a href="http://www.newsitamea.gr/category/%CE%B1%CE%BC%CE%B5%CE%B1-news/" target="_parent">PERSONNES HANDICAPEES NOUVELLES</a></li>
                        
                    	<li><a href="http://www.ameagreek.gr/" target="_parent">AMEAGREEK.GR</a></li>
                        <li><a href="http://www.healthpages.gr/portal/page/portal/1535/Fullstory?ArticleID=625" target="_parent">LES NUMEROS DE TELEPHONE D'URGENCE</a></li>
                        <li><a href="http://www.heraklion.gr/ourplace/useful-phones/useful-phones.html" target="_parent">NUMEROS UTILES HERAKLION</a></li>
                  
                    </ul>
                </div>
            </div>
       
            <div style="float:right;" class="bottom_section_box">
            	<div class="top">Licence EL/LAK</div>
                <div class="body">
                    <a rel="license" >Le projet <span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Dataset" property="dct:title" rel="dct:type">DE TOURISME ET PERSONNES HANDICAPEES</span> Disponible sous la <br><a href="http://creativecommons.org/licenses/by/4.0/"></a><a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Licence Creative Commons 4.0<br/></a><br><img alt="Άδεια Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png"/>	
                </div>
            </div>
        </div>

    </div>
	<div id="footer_bottom">
<h4>copyright © 2014 Normes pour faciliter l'accès à Personnes Handicapees </h4>
</div>
	
</body>

</html>