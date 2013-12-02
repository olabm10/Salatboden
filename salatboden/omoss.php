<?php include 'database/init.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Om oss </title>
	
	<!-- CSS  -->
	<link href="css/salatboden.css" rel="stylesheet" type="text/css">


	
</head>

<body>

<div id="container">
	<!--hele headeren, både logo og innloggingsfelt-->
 		<?php 	include 'database/sideboks.php'; ?>

	<header class="mainheader">

		<nav>
			<ul>
				<li><a href="hjem.php">Hjem</a></li>
				<li><a href="meny.php">Meny</a></li>
				<li><a href="bestill.php">Bestill</a></li>
				<li><a href="restaurant.php">Restaurant</a></li>
                <li class="active"><a href="omoss.php">Om Oss</a></li>
			</ul>
		</nav>
	</header>	


<div> 

 
<div style="clear:both;"></div>
<div id="sidebar">
	<h2>Om Oss</h2>
	<div class="sidemenu">
		<ul>
		<li><a href="omoss.php"> Om Oss</a></li>
		<li><a href="kontakt.php "> Kontakt Oss</a></li>

	</ul>
	</div>
</div>



<div>

<!-- unikt innhold på siden -->



<div id="content">
<h3 align="center">Om Oss</h3>
	<hr>	
		
		
<h4>Salatboden ble etablert høsten 2013 av fem studenter som ville lage en nettside med et sunt og samtidig godt tilbud. 
Gruppen bak denne fantastiske ideen kaller seg MEMMO, og er alle studenter ved Universitetet i Agder, Kristiansand.  </h4> <br>

		
			   
	<div id="menybestill">

	<!-- mat klassen er en rett-->
		<div class="mat">
			<div class="menyimg">
				<img src="img/mats.jpg" width="150" height="142" align="center" border="2">
			</div>
			<div class="innhold" >
				<h3>Mats</h3>
				<p class="menytxt"> 
				Mats er en kjekk og hyggelig gutt fra Egersund som er 23 år.<br>
				<a href="https://www.facebook.com/MadMats90"target="_blank">Mats på facebook</a>
				</p>

			
			</div>
		</div>
		

	<div class="mat">
			<div class="menyimg">
				<img src="img/even.jpg" width="150" height="142" align="center" border="2">
			</div>
			<div class="innhold" >
				<h3>Even</h3>
				<p class="menytxt"> 
				Even er en sliten gutt fra Kristiansand som er 20 år.<br>
				<a href="https://www.facebook.com/even.hoyer"target="_blank">Even på facebook</a>
				</p>

			
			</div>
		</div>
		
	<div class="mat">
			<div class="menyimg">
				<img src="img/maiken.jpg" width="150" height="142" align="center" border="2">
			</div>
			<div class="innhold" >
				<h3>Maiken</h3>
				<p class="menytxt"> 
				Maiken er ei trivelig jente fra Kongsberg som er 23 år<br>
				<a href="https://www.facebook.com/maiken.flaagan"target="_blank">Maiken på facebook</a>				
				</p>

			
			</div>
		</div>
		
	<div class="mat">
			<div class="menyimg">
				<img src="img/marte.jpg" width="150" height="142" align="center" border="2">
			</div>
			<div class="innhold" >
				<h3>Marte</h3>
				<p class="menytxt"> 
				Marte er ei gøyal jente fra Kragerø som er 20 år.<br>
				<a href="https://www.facebook.com/martesofie"target="_blank">Marte på facebook</a>
				</p>

			
			</div>
		</div>
		
	<div class="mat">
			<div class="menyimg">
				<img src="img/ola.jpg" width="150" height="142" align="center" border="2">
			</div>
			<div class="innhold" >
				<h3>Ola</h3>
				<p class="menytxt"> 
				Ola er en hyggelig gutt fra Grimstad som er 23 år.<br>
				<a href="https://www.facebook.com/olamalnes"target="_blank">Ola på facebook</a>
				</p>

			
			</div>
		</div>
		







<!-- Teamfoto -->
<center></center> <br>
<br>



</div>
</div>
 
 <!--Footer-->
 <?php  include 'footer.php' ;  ?>
 
</body>
</html>