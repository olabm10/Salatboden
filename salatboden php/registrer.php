<?php include 'database/init.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Bestilling </title>
	
	<!-- CSS -->
	<link href="css/salatboden.css" rel="stylesheet" type="text/css">

	
	<!-- JavaScript-->
	<script src type="text/javascript"></script>
    <script type="text/javascript" src="js/reginfo.js"></script>
    <script type="text/javascript" src="js/tinybox.js"></script>
    <script type="text/javascript" src="js/test2.js"></script>
    


	
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


	

	




<div>

<!-- unikt innhold på siden -->
<center>
<div id="content" style="padding-top:50px">

<h1> Registreringsskjema </h1><br>

<form method="post" action="brukere.php" name="brukere">
	<table id="registrer" > 
		<tbody>
			<tr>
				<td>Fornavn:</td>
				<td><input size="30" name="fornavn" class="input"></td>
			</tr>
			<tr>
				<td>Etternavn:</td>
				<td><input size="30" name="etternavn" class="input"></td>
			</tr>
			<tr>
				<td>Mobilnummer:</td>
				<td><input size="10" name="mobilnummer" class="input"></td>
			</tr>
			<tr>
				<td>Epost:</td>
				<td><input size="30" name="epost" class="input"></td>
			</tr>
			<tr>
				<td>Adresse:</td>
				<td><input size="30" name="adresse" class="input"></td>
			</tr>		
			<tr>
				<td>Postnummer:</td>
				<td><input size="2" name="postnummer" class="input">
			
				Sted:
				<input size="15" name="sted" class="input"></td>
			</tr>	
			<tr>
				<td>Passord:</td>
				<td><input size="30" name="passord" class="input"></td>
			</tr>
            <tr>
            	<td>Kjønn</td>
                <td><input type="radio" name="kjønn" value="kvinne">Kvinne
				<input type="radio" name="kjønn" value="mann">Mann </td>
                
		</tbody>
	</table>
    
	<input value="Lagre" name="lagre" type="submit" class="button">
    <a class="button" style="color:grey; background:; text-decoration:none; " href="hjem.php" > Avbryt</a>
	


        <!-- TinyBox info PopUp-->
    <div id="klikk1" class="button">Hjelp!</div>
    <script type="text/javascript">
		T$('klikk1').onclick = function(){TINY.box.show("hjelp.php",1,300,250,1)}
	</script>
    	

		

		
		

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