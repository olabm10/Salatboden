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
<h3 align="center">Velg Din Dessert</h3>
	<hr>	
		
		
	<div id="menybestill" style="padding-top:50px">
<div class="mat">
			<div class="menyimg">
				<img src="img/pancake.jpg" width="154" height="142" align="left" border="2">
			</div>
			<div class="innhold" >
				<h3>1. Husets proteinpannekaker</h3>
				<p class="menytxt"> 
									</p>
				<br>
				<input id="gobutton" type="submit" value="Legg til - 49,-" /> 
				</ul>
			</div>
		</div>

		
<div class="mat">
			<div class="menyimg">
				<img src="img/pc.jpg" width="154" height="142" align="left" border="2">
			</div>
			<div class="innhold" >
				<h3>2. Deilig vitamin panna-cotta</h3>
				<p class="menytxt"> 
									</p>
				<br>
				<input id="gobutton" type="submit" value="Legg til - 49,-" /> 
				</ul>
			</div>
		</div>
		
		
<div class="mat">
			<div class="menyimg">
				<img src="img/fruktcocktail.jpg" width="154" height="142" align="left" border="2">
			</div>
			<div class="innhold" >
				<h3>3. Frukt-cocktail</h3>
				<p class="menytxt"> 
									</p>
				<br>
				<input id="gobutton" type="submit" value="Legg til - 49,-" /> 
				</ul>
			</div>
		</div>
	</div>	
</div>	


 
 <!--Footer-->
 <?php  include 'footer.php' ;  ?>
 
</body>
</html>