<?php include 'database/init.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Bestilling </title>
	
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
				<li class="active"><a href="bestill.php">Bestill</a></li>
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
			<li><a href="bestill.php">Salater</a></li>
			<li><a href="tilbehor.php">Tilbehør</a></li>
			<li><a href="dessert.php">Desserter</a></li>
			<li><a href="drikke.php">Drikke</a></li>
		</ul>
		
		
		</div>
	</div>

	
	
<div>

<!-- unikt innhold på siden -->
<div id="content">
<h3 align="center">Velg din salat</h3>
	<hr>	
		
		
	<div id="menybestill" style="padding-top:50px">

	<!-- mat klassen er en rett ("menyimg" hvis ikke "grow pic" funker)-->
		<div class="mat">
			<div class="menyimg">
				<img src="img/salat.jpg" width="204" height="142" align="left" border="2">
			</div>
			<div class="innhold" >
				<h3>1. Pastasalat med kylling </h3>
				<p class="menytxt"> 
					Strimlet kylling med fullkornspasta, paprika, salatblader, olje og sesamfrø.
				</p>
				<br>
				<input id="gobutton" type="submit" value="Legg til - 69,-" /> 
				</ul>
			</div>
		</div>
		

		<div class="mat">
			<div class="menyimg">
				<img src="img/caesar-salad.jpg" width="204" height="142" align="left" border="2" >
			</div>
			<div class="innhold">
				<h3> 2. Caesarsalat</h3>
				<p class="menytxt"> 
				Salatblader med bacon, brødkrutonger, strimlet kylling, tomat og rødløk. <br>
				Serves med tradisjonell caesardressing.
			</p>
			<br>
				<input id="gobutton" type="submit" value="Legg til - 79,-" /> 
				</ul>
			</div>        
		</div>
		
		
		<div class="mat">
			<div class="menyimg">
				<img src="img/shrimp.jpg" width="204" height="142" align="left" border="2">
			</div>
			<div class="innhold">
				<h3> 3. Rekesalat med egg</h3>
				<p class="menytxt">
				Marinerte reker med salatblader, agurk, grønn paprika og egg.
			</p>
			<br>
					<input id="gobutton" type="submit" value="Legg til - 89,-" /> 
									</ul>
			</div>
		</div>

			<div class="mat">
			<div class="menyimg">
				<img src="img/gresk.jpg" width="204" height="142" align="left" border="2" >
			</div>
			<div class="innhold">
				<h3> 4. Gresk salat</h3>
				<p class="menytxt"> 
				Blandet salat, fetaost, sorte hele oliven, rødløk, tomater og brødkrutonger. Serveres med Balsamico.
			</p>
			<br>
				<input id="gobutton" type="submit" value="Legg til - 79,-" /> 
				</ul>
			</div>        
		</div>

		
		<div class="mat">
			<div class="menyimg">
				<img src="img/tunfisksalat.jpg" width="204" height="142" align="left" border="2">
			</div>
			<div class="innhold">
				<h3> 5. Tunfisksalat med egg</h3>
				<p class="menytxt">
				Grønn salat med tunfisk, oliven og egg.
			</p>
			<br>
					<input id="gobutton" type="submit" value="Legg til - 79,-" /> 
									</ul>
			</div>
		</div>
		

	</div>
</div> 


<!--Footer-->
 <?php  include 'footer.php' ;  ?>
 
</body>
</html>