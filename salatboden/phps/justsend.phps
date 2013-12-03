<?php 
	include 'database/init.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Salatboden </title>
	
	<!-- CSS -->
	<link rel="stylesheet" href="css/salatboden.css" rel="stylesheet" type="text/css">


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

<!-- unikt innhold på siden -->
<div id="content">

<?php

$to = 'even.hoyer@yahoo.no'; // her velger man hvilken mail tilbakemeldingen skal bli sendt til
$subject = 'Tilbakemelding fra salatboden'; // er er "emnet" som blir vist  i innboksen

$msg = "avsenders navn: ".$_POST['name']."\n".  // her er hovedinnholdet i teksten, man samler sammen det som blir skrevet i formen name, email og feedback. 
" Avsenders email: ".$_POST['email']."\n". 
" Tilbakemelding: ".$_POST['feedback']."";
// her kommer en if-test. Den gjør at hvis ikke alle feltene er fykt ut skriver den ut at du må prøve igjen. den sjekker om det er skrevet inn noe i formene
 if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['feedback'])) {
  echo ' du må fylle ut alle feltene ';
  echo '<a href="kontakt.php"> klikk her for å prøve igjen</a> ';
 } else {
  mail ($to, $subject, $msg, 'From:' . $_POST['email']);   // hvis iftesten finner ut at det er fylt ut noe i feltene sender den mailen, samt skriver en tilbakemelding på at mailen er sendt
  

  echo '<br> Takk for din tilbakemelding </br>';
  echo '<br> Ditt navn: ' . $_POST ['name'] .'</br>';     
  echo '<br> Din Email: ' . $_POST['email'] . '</br>';
  echo '<br> Din Tilbakemelding: ' . $_POST ['feedback'] . '</br>';
  echo '<br></br>';
  echo '<br>  </br>';

 }
?>


</div>
 
 <!--Footer-->
 <?php  include 'footer.php' ;  ?>

</body>
</html>
