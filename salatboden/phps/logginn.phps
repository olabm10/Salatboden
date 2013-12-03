<?php include 'database/init.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Bestilling </title>
	
	<!-- CSS -->
	<link href="css/salatboden.css" rel="stylesheet" type="text/css">

	
	<!-- JavaScripth-->
	<script src type="text/javascript"></script>
    <script type="text/javascript" src="js/reginfo.js"></script>
    <script type="text/javascript" src="js/tinybox.js"></script>
    <script type="text/javascript" src="js/test2.js"></script>
    


	
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
                <li><a href="omoss.php">Om Oss</a></li>
			</ul>
		</nav>
	</header>	


<div>

<div style="clear:both;"></div>


<div>

<!-- unikt innhold på siden -->
<center>
<div id="content" style="padding-top:50px">

<h1> Logg Inn</h1><br>
<form method="post" action="logginn.php" name="logginn">
	<table id="logginn">
    	<tbody>
        	<tr>
            	<td>E-post:</td>
                <td><input size="30" name="epost" class="input"></td>
            </tr>
            </tr>
            
            	<td>Passord:</td>
                <td><input type="password", input size="30" name="passord" class="input"></td>
            </tr>
		</tbody>
	</table>
    <br>
    <!-- login knapp -->
    <input value="Logg Inn" name="Logg inn" type="submit" class="button">
    
    <!-- Avbryt knapp -->
     <a class="button" style="color:grey; background:none; text-decoration:none; " href="hjem.php" > Avbryt</a>
     
     <!-- funker ikke??->
    <input value="Avbryt" name="Avbryt" type="submit" class="button" a href="hjem.php">

        <!-- TinyBox info PopUp-->
    <div id="klikk1" class="button">Hjelp!</div>
    <script type="text/javascript">
		T$('klikk1').onclick = function(){TINY.box.show("hjelp.php",1,300,250,1)}
	</script>
    	


</div>
</div>
 
 <!--Footer-->
 <?php  include 'footer.php' ;  ?>
 
</body>
</html>