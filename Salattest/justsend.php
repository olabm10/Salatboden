<!--Forteller nettleser at dokumentet skal leses som html-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--head, effekter til siden, men vil ikke være synlig på siden. Tekstspråket er satt til å kunne vise a,ø og å. Tittel på siden, link til eksternt .css og .js fil-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Pizza Heaven</title>
	<link rel="stylesheet" type="text/css" href="utseende.css" />
	<script src="" type="text/javascript"></script>
</head>

<body>
<!--header div rundt begge menyene, logo og slagord-->
<div id="header1">
<!-- her begynner toppmenyknappene som er oppe til høye -->
	<div id="toppmeny">
		<ul>
			<li class="toppmenyknapper">
				<a href="ledig.html">Ledige stillinger</a>
			</li>
			<li class="toppmenyknapper">
				<a href="kontakt.html">Kontakt/tilbakemelding</a>
			</li>
		</ul>
	</div>
	<div id="logo">
		<a href ="index.html"><img src="bilder/pizzalogo.png">
	</div>
</div>
<div id="hovedmeny">
	<div id="hovedmenyknapper">
	<div class="menylinks">
	<ul>
		<li><a href="index.html"><img src="knapper/hjemu.png" width="221" height="50" align="left" onmouseover="src='knapper/hjemi.png'" onmouseout="src='knapper/hjemu.png'" /></a></li>
<li>
			<a href="meny.html"><img src="knapper/menyu.png" width="221" height="50" align="left" onmouseover="src='knapper/manyi.png'" onmouseout="src='knapper/menyu.png'">	</a>	</li>
		<li>
			<a href="restauranter.html"><img src="knapper/restauranteru.png" width="221" height="50" align="left" onmouseover="src='knapper/restauranteri.png'" onmouseout="src='knapper/restauranteru.png'">	</a></li>
		<li>
			<a href="omoss.html"><img src="knapper/omossu.png" width="221" height="50" align="right" onmouseover="src='knapper/omossi.png'" onmouseout="src='knapper/omossu.png'"> </a>  </li>	
</ul>
	</div>
  </div>
</div>
<!--Når man klikker på "send" på kontakt.html blir man videresendt til justsend.php. den har akkurat de samme funksjonen som resten av siden. men inni divene er det PHP. -->
<div id="innhold">
<div id="kontakt">
<?php

$to = 'even.hoyer@yahoo.no'; // her velger man hvilken mail tilbakemeldingen skal bli sendt til
$subject = 'Tilbakemelding fra pizzaheaven'; // er er "emnet" som blir vist  i innboksen

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
</div>
<div id="bunnbox">
	<!--Bunn box-->
</div>
 
 
</div>
</body>
</html>
