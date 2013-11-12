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
	<div id="topimg">
        
        <!-- Navigeringsknapper top right-->
        <div id="topright">
		 <a href="registrer.html">Registrer</a>
         <a href="logginn.html">Logg inn</a>
		</div>
	</div>

	

<div id="navcontainer">
	<ul id="navlist" >
        <li><a href="index.html">Hjem</a>
        <li><a href="meny.html" >Meny</a>
        <li><a href="bestill.html" >Bestill Online</a>
        <li><a href="restaurant.html" > Restaurant</a>
        <li><a href="omoss.html" > Om Oss</a>
	</ul>
</div>



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
  echo '<a href="kontakt.html"> klikk her for å prøve igjen</a> ';
 } else {
  mail ($to, $subject, $msg, 'From:' . $_POST['email']);   // hvis iftesten finner ut at det er fylt ut noe i feltene sender den mailen, samt skriver en tilbakemelding på at mailen er sendt
  
  
  echo ' <br> Takk for din tilbakemelding </br>';
  echo '<br> Ditt navn: ' . $_POST ['name'] .'</br>';     
  echo '<br> Din Email: ' . $_POST['email'] . '</br>';
  echo '<br> Din Tilbakemelding: ' . $_POST ['feedback'] . '</br>';
  echo '<br></br>';
  echo '<br> Din henvendelse vil bli behandlet ASAP </br>';
 }
?>


</div>
 
 <!--Footer-->
<div id="footer"> 
	<a href="https://www.facebook.com/even.hoyer">Even</a> | 
	<a href="https://www.facebook.com/MadMats90">Mats</a> | 
	<a href="https://www.facebook.com/olamalnes">Ola</a> | 
	<a href="https://www.facebook.com/martesofie">Marte</a> | 
	<a href="https://www.facebook.com/maiken.flaagan">Maiken</a> | 
	<span id="kontakt"><a href="Kontakt.html">Kontakt Oss</a> | 
	&copy; 2013 Anyone | 
	
</span></div>






	<!-- forfatter og dato-->
	<address>Made xx.11.2013 <br> By Memmo 	</address>
    <script type="text/javascript" src="js/navigation.js"></script>

</body>
</html>
