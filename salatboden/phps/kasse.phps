<?php include 'database/init.php' ; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Kasse </title>
	
	<!-- CSS -->
	<link href="css/salatboden.css" rel="stylesheet" type="text/css">

	
</head>

<body>



<div id="container">
		 <a href="registrer.php">Registrer</a>
         <a href="logginn.php">Logg inn</a>
	</div>

<div id="navcontainer">
	<ul id="navlist" >
	<li><a href="hjem.php">Hjem</a>
	<li><a href="meny.php" >Meny</a>
	<li><a href="bestill.php" >Bestill Online</a>
	<li><a href="restaurant.php" > Restaurant</a>
	<li><a href="omoss.php" > Om Oss</a>
	</ul>
</div>

</div>



<!--Skrift etter denne setninen blir forstørret/forminsket-->
<div id="mydiv" style="font-size: 1em">

<!-- unikt innhold på siden -->
<div id="content">
(Notat tekst til siden:) <br>
Liste over valgte varer/ordre <br>
Totalbeløp <br>
Kundeopplysninger <br>
Kort eller kontant <br>
paypal, visa etc. <br>


</div>
</div>
 
 <!--Footer-->
 <?php  include 'footer.php' ;  ?>
 
</body>
</html>