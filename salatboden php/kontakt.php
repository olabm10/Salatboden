<?php include 'database/init.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Admin </title>
	
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
				<li><a href="restaurant.php">Restaurant</a></li>
                <li class="active"><a href="omoss.php">Om Oss</a></li>
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
	<h2>Om Oss</h2>
	<div class="sidemenu">
		<ul>
		<li><a href="omoss.php"> Om Oss</a></li>
		<li><a href="kontakt.php"> Kontakt Oss</a></li>

	</ul>
	</div>
</div>



<div>

<!-- unikt innhold på siden -->
<div id="content">


<h1>Tilbakemeldingsskjema</h1>
	<!--inputfelt for navn i kontaktskjema-->
	<form id="form1" name="form1" method="post" action="justsend.php">
	  Ditt navn
	  <br>
		<label>
			<input type="text" name="name" id="name" class="input" />
		</label>
	  <br>
	  <!--inputfelt for e-mail i kontaktskjema-->
	  Din email
	  <br>
		<label>
			<input type="text" name="email" id="email" class="input" />
		</label>
	  <br>
	  <!--tekstfelt for tilbakemelding i kontaktskjema-->
	  Tilbakemelding
	  <br>
		<label>
			<textarea name="feedback" id="feedback" cols="45" rows="5" class="input"></textarea>
		</label>
	  <br>
		
		<label>
			<input type="submit" name="submit" id="submit" value="Send" class="bitton" />
		</label>
 
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