<?php include 'database/init.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Meny </title>
	
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
				<li class="active"><a href="meny.php">Meny</a></li>
				<li><a href="bestill.php">Bestill</a></li>
				<li><a href="restaurant.php">Restaurant</a></li>
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
	<h2>Meny</h2>
	<div class="sidemenu">
		<ul>
		<li><a href="meny.pdf" TARGET="_blank">Nedlastbar Meny</a></li>

	</ul>
</div>

</div>


<div>


<!-- unikt innhold på siden -->
<div id="content">
<h3 align="center">Salater</h3>
	<hr>	
<br>	
	
<img src="img/salat.jpg" width="204" height="142" align="left" border="2">
<p><br><b> 1. Pastasalat med Kylling </b>
	<br> Strimlet kylling med fullkornspasta, paprika, salatblader, olje og sesamfrø.

</p>	
<br>
<br>
<br>
<br>
<br>

<img src="img/caesar-salad.jpg" width="204" height="142" align="left" border="2">
<p><br><b> 2. Caesarsalat </b>
<br> Salatblader med bacon, brødkrutonger, strimlet kylling, tomat og rødløk.
<br> Serves med tradisjonell caesardressing.

</p>
<br>
<br>
<br>
<br>

<img src="img/shrimp.jpg" width="204" height="142" align="left" border="2">
<p><br><b> 3. Rekesalat med egg </b>
<br> Marinerte reker med salatblader, agurk, grønn paprika og egg.

</p>
<br>
<br>
<br>
<br>
<br>

<img src="img/gresk.jpg" width="204" height="142" align="left" border="2">
<p><br><b> 4. Gresk salat </b>
<br> Blandet salat, fetaost, sorte hele oliven, rødløk, tomater og brødkrutonger. Serveres med Balsamico.

</p>
<br>
<br>
<br>
<br>

<img src="img/tunfisksalat.jpg" width="204" height="142" align="left" border="2">
<p><br><b> 5. Tunfisksalat med egg </b>
<br> Grønn salat med tunfisk, oliven og egg.

</p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<h3 align="center">Tilbehør</h3>
	<hr>	
<br>

<img src="img/krutong.jpg" width="204" height="142" border="2" align="left" >
<p><br><b> 1. Sprøstekte krutonger </b>

</p>
<br>
<br>
<br>
<br>
<br>
<br>

<img src="img/hvitloksdressing.jpg" width="204" height="142" border="2" align="left" >
<p><br><b> 2. Hjemmelagd hvitløksdressing </b>

</p>
<br>
<br>
<br>
<br>
<br>
<br>

<img src="img/parmesan.jpg" width="204" height="142" border="2" align="left" >
<p><br><b> 3. Parmesanost </b>

</p>
<br>
<br>
<br>
<br>
<br>
<br>

<img src="img/foccacia.jpg" width="204" height="142" border="2" align="left" >
<p><br><b> 4. Hjemmelaget Foccacia </b>

</p>
<br>
<br>
<br>
<br>
<br>
<br>

<img src="img/rundstykker.jpg" width="204" height="142" border="2" align="left" >
<p><br><b> 5. Grovt rundstykke </b>

</p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<h3 align="center">Drikke</h3>
	<hr>	
<br>	
	
<img src="img/orju.jpg" width="104" height="142" border="2" align="left" >
<p><br><b> 1. Nypresset Applesinjuice </b>

</p>
<br>
<br>
<br>
<br>
<br>
<br>
 
<img src="img/smoothie.jpg" width="104" height="142" border="2" align="left" >
<p><br><b> 2. Smoothie med Jordbær og Mango </b> 

</p>
<br>
<br>
<br>
<br>
<br>
<br>
 
<img src="img/kiwi.jpg" width="104" height="142" border="2" align="left" >
<p><br><b> 3. Smoothie med Banan </b> 

</p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<h3 align="center">Dessert</h3>
	<hr>	
<br>

<img src="img/pancake.jpg" width="204" height="142" border="2" align="left" >
<p><br><b> 1. Husets proteinpannekaker </b>

</p>
<br>
<br>
<br>
<br>
<br>
<br>

<img src="img/pannacotta.png" width="204" height="142" border="2" align="left" >
<p><br><b> 2. Deilig vitamin panna cotta </b>

</p>
<br>
<br>
<br>
<br>
<br>
<br>

<img src="img/fruktcocktail.jpg" width="204" height="142" border="2" align="left" >
<p><br><b> 3. Eksotisk frukt-cocktail </b>

</p>
<br>
<br>
<br>
<br>
<br>
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
	<address>Made xx.11.2013 <br> by Memmo	</address>

</body>
</html>