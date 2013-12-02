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
	<!--hele headeren, både logo og innloggingsfelt-->
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


<div> 
 

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
<h3>Kristiansand Sørlandssenteret</h3>
	<hr>	
	
	
	
</p>

 <br>
<b>Adresse:</b> 
<br>Sørlandssenteret
<br>Barstølveien 31-35, 4659 Kristiansand  <br>
<br>

<b>Åpningstider:</b> <br> 
	Mandag - Fredag:	10:00 - 21:00 <br>
	Lørdag:				10:00 - 19:00 <br>
	Søndag:				12:00 - 19:00 <br>
<br><br>

<b>Tlf. nummer:</b> +47 00 00 00 00 <br>
<br><br>

<b>Mail-adresse:</b> sorlandssenteret@salatboden.no <br>
<br><br>


<!-- Kart: (orginalt er width="425") -->
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.no/maps?f=q&amp;source=s_q&amp;hl=no&amp;geocode=&amp;q=S%C3%B8rlandssenteret,+Barst%C3%B8lveien,+Kristiansand&amp;aq=0&amp;oq=s%C3%B8rlands&amp;sll=58.146228,7.999313&amp;sspn=0.00872,0.022724&amp;g=Dronningens+gate,+Kristiansand&amp;ie=UTF8&amp;hq=S%C3%B8rlandssenteret,+Barst%C3%B8lveien,+Kristiansand&amp;t=h&amp;ll=58.179917,8.129542&amp;spn=0.011766,0.032015&amp;output=embed"></iframe><br /><small><a href="https://maps.google.no/maps?f=q&amp;source=embed&amp;hl=no&amp;geocode=&amp;q=S%C3%B8rlandssenteret,+Barst%C3%B8lveien,+Kristiansand&amp;aq=0&amp;oq=s%C3%B8rlands&amp;sll=58.146228,7.999313&amp;sspn=0.00872,0.022724&amp;g=Dronningens+gate,+Kristiansand&amp;ie=UTF8&amp;hq=S%C3%B8rlandssenteret,+Barst%C3%B8lveien,+Kristiansand&amp;t=h&amp;ll=58.179917,8.129542&amp;spn=0.011766,0.032015" style="color:#0000FF;text-align:left">Vis større kart</a></small>

<br><br>
<b></b> <br>
<br>

</div>
</div>
 
 <!--Footer-->
 <?php  include 'footer.php' ;  ?>
 
</body>
</html>