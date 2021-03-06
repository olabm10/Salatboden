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
<h3>Kristiansand Sentrum</h3>
	<hr>	
	
	
	
</p>

 <br>
<b>Adresse;</b>
<br> Markensgate 31, 4611 Kristiansand Sentrum <br>
<br>

<b>Åpningstider:</b> <br>
	Mandag - Torsdag:	09:00 - 22:00 <br>
	Fredag - Lørdag:	09:00 - 20:00 <br>
	Søndag:				11:00 - 20:00 <br>
<br><br>

<b>Tlf. nummer;</b> +47 00 00 00 00 <br>
<br><br>

<b>Mail-adresse;</b> Salatboden@salatboden.no <br>
<br><br>


<!-- Kart: (orginalt er width="425") -->
<iframe width="425" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=no&amp;geocode=&amp;q=Markens+gate+31,+Kristiansand,+Norge&amp;aq=t&amp;sll=37.0625,-95.677068&amp;sspn=40.59616,75.761719&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Markens+gate+31,+4611+Kristiansand,+Vest-Agder,+Norge&amp;ll=58.146179,7.991534&amp;spn=0.003312,0.009248&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=no&amp;geocode=&amp;q=Markens+gate+31,+Kristiansand,+Norge&amp;aq=t&amp;sll=37.0625,-95.677068&amp;sspn=40.59616,75.761719&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Markens+gate+31,+4611+Kristiansand,+Vest-Agder,+Norge&amp;ll=58.146179,7.991534&amp;spn=0.003312,0.009248&amp;z=14" style="color:#0000FF;text-align:left">Vis større kart</a></small>

<br><br>
<b></b> <br>
<br>

</div>
</div>
 
 <!--Footer-->
 <?php  include 'footer.php' ;  ?>
 
</body>
</html>