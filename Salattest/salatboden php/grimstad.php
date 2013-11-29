<?php include 'database/init.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Restaurant </title>
	
	<!-- CSS -->
	<link href="css/salatboden.css" rel="stylesheet" type="text/css">



	
</head>

<body>



<div id="container">
	<!--hele header, altså logo og innloggings felt-->
	<?php 	include 'database/sideboks.php'; ?>
	
<header class="mainheader">	
<nav>
			<ul>
				<li><a href="hjem.php">Hjem</a></li>
				<li><a href="meny.php">Meny</a></li>
				<li><a href="bestill.php">Bestill</a></li>
				<li class="active"><a href="restaurant.php">Restaurant</a></li>
                <li><a href="omoss.php">Om Oss</a></li>
			</ul>
		</nav>
	</header>
<!--
<div id="navcontainer">
	<ul id="navlist" >
	<li><a href="hjem.php">Hjem</a>
	<li><a href="meny.php" >Meny</a>
	<li><a href="bestill.php" >Bestill Online</a>
	<li><a href="restaurant.php" > Restaurant</a>
	<li><a href="omoss.php" > Om Oss</a>
	</ul>
</div>-->


<div style="clear:both;"></div>
<div id="sidebar">
	<h2>Restauranter</h2>
	<div class="sidemenu">
		<ul>
		<li><a href="restaurant.php"> Kristiansand</a></li>
		<li><a href="sorlandsparken.php"> Sørlandspark.</a></li>
		<li><a href="grimstad.php"> Grimstad</a></li>

	</ul>
	</div>
</div>



<div>

<!-- unikt innhold på siden -->
<div id="content">
<center>
<h3>Grimstad Sentrum</h3>
	<hr>	
	
	
	
</p>

 <br>
<b>Adresse;</b> 
<br>Storgaten 20, 4876 Grimstad ‎  <br>
<br>

<b>Åpningstider:</b> <br>
	Mandag - Torsdag:	09:00 - 21:00 <br>
	Fredag - Lørdag:	09:00 - 20:00 <br>
	Søndag:				12:00 - 18:00 <br>
<br><br>

<b>Tlf. nummer;</b> +47 00 00 00 00 <br>
<br><br>

<b>Mail-adresse;</b> grimstad@salatboden.no <br>
<br><br>


<!-- Kart: (orginalt er width="425") -->
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.no/maps?f=q&amp;source=s_q&amp;hl=no&amp;geocode=&amp;q=storgaten+20+,+Grimstad&amp;aq=&amp;sll=58.34324,8.589172&amp;sspn=0.008671,0.022724&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Storgaten+20,+4876+Grimstad,+Aust-Agder&amp;ll=58.343245,8.589163&amp;spn=0.008672,0.022724&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.no/maps?f=q&amp;source=embed&amp;hl=no&amp;geocode=&amp;q=storgaten+20+,+Grimstad&amp;aq=&amp;sll=58.34324,8.589172&amp;sspn=0.008671,0.022724&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Storgaten+20,+4876+Grimstad,+Aust-Agder&amp;ll=58.343245,8.589163&amp;spn=0.008672,0.022724&amp;z=14" style="color:#0000FF;text-align:left">Vis større kart</a></small>

<br><br>
<b></b> <br>
<br>

</div>
</div>
 
 <!--Footer-->
<div id="footer"> 
	<a href="https://www.facebook.com/even.hoyer">Even</a> | 
	<a href="https://www.facebook.com/MadMats90">Mats</a> | 
	<a href="https://www.facebook.com/olamalnes">Ola</a> | 
	<a href="https://www.facebook.com/martesofie">Marte</a> | 
	<a href="https://www.facebook.com/maiken.flaagan">Maiken</a> | 
	<span id="kontakt"><a href="kontakt.php">Kontakt Oss</a> | 
	&copy; 2013 Anyone | 
	
</div>





	<!-- forfatter og dato-->
	<address>Made xx.11.2013 <br> by Memmo 	</address>
</body>
</html>