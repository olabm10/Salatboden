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

<?php
//sjekker om påkrevd felt inneholder data
if (empty($_POST) === false) {
	$pakrevd_felt = array('fornavn', 'etternavn', 'mobilnummer', 'epost', 'passord', 'gjenta_passord');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $pakrevd_felt) === true) {
			$errors[] = 'Felt merket med stjerne er påkrevd';
			//bryter økt etter 1 feil. Ingen vits i å fortsette
			break 1;
		}
	}
	
	//sjekker om brukernavnet er ledig
	if (empty($errors) === true) {
		if (ekte_bruker($_POST['epost']) === true) {
			$errors[] = 'Beklager, \'' . $_POST['epost'] . '\' er allerede i bruk.';
		}	
		
		//sjekker om det er mellomrom i email
		if (preg_match("/\\s/", $_POST['epost']) == true) {
			$errors[] = 'Emailen kan ikke inneholde mellomrom.';
		}
		
		//sjekker at passordet er mer enn 5 tegn
		if(strlen($_POST['passord']) <= 5 ) {
			$errors[] = 'Passordet må være minimum 6, og maksimum 20 tegn';
		}
		
		//sjekker at passordet er gjentatt riktig
		if ($_POST ['passord'] !== $_POST['gjenta_passord']) {
			$errors[] = 'Passordene stemte ikke overens';
		}
		
		//sjekker om det er en mail adresse som blir fylt inn
		if(filter_var($_POST['epost'], FILTER_VALIDATE_EMAIL) === false) {
			 $errors[] = 'En ekte epost adresse kreves';
		}
		
		if (email_eksisterer($_POST['epost']) === true) {
			$error[] = 'Beklager, \'' . $_POST['epost'] . '\' er allerede i bruk.';
		}
	}
}
//printer feil
//print_r($errors);
?>

<h1> Registreringsskjema </h1><br>
<div id="error" style="list-style: none;">

<?php
if (isset($_GET['suksess']) && empty ($_GET['suksess'])) {
	echo 'Gratulerer, du er nå registrert :) ';
} 
//fjern formen når bruker er registrert
else {
	
	//Registrerer hvis ingen feilmeldinger. Hvis feil blir feilene vist til brujkeren
	if (empty($_POST) === false && empty($errors) === true) {
		$register_data = array(
		'fornavn' => $_POST['fornavn'],
		'etternavn' => $_POST['etternavn'],
		'mobilnummer' => $_POST['mobilnummer'],
		'epost' => $_POST['epost'],
		'adresse' => $_POST['adresse'],
		'postnummer' => $_POST['postnummer'],
		'sted' => $_POST['sted'],
		'passord' => $_POST['passord'],
		);
		
		register_user($register_data);
		//ved å gå til register.php?suksess kan ikke brukeren trykke f5 for å registrere seg mange ganger. ville ikke fungert uansett pga form validringa
		header('Location: registrer.php?suksess');
		exit();
		
		} else if (empty($errors) === false) {
			echo output_errors($errors);
	}

	?>

	</div>

<form method="post" action="" name="brukere">
	<table id="registrer" > 
		<tbody>
			<tr>
				<td>Fornavn*:</td>
				<td><input size="30" name="fornavn" class="input"></td>
			</tr>
			<tr>
				<td>Etternavn*:</td>
				<td><input size="30" name="etternavn" class="input"></td>
			</tr>
			<tr>
				<td>Mobilnummer*:</td>
				<td><input size="10" name="mobilnummer" class="input"></td>
			</tr>
			<tr>
				<td>Epost*:</td>
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
				<td>Passord*:</td>
				<td><input size="30" name="passord" type="password" class="input"></td>
			</tr>
			<tr>
				<td>Gjenta passord*:</td>
				<td><input size="30" name="gjenta_passord" type="password" class="input"></td>
			</tr>      
		</tbody>
	</table>
 
	<input value="Registrer" name="Registrer" type="submit" class="button">
    <a class="button" style="color:grey; background:; text-decoration:none; " href="hjem.php" > Avbryt</a>
	


        <!-- TinyBox info PopUp-->
    <div id="klikk1" class="button">Hjelp!</div>
    <script type="text/javascript">
		T$('klikk1').onclick = function(){TINY.box.show("hjelp.php",1,300,250,1)}
	</script>
    	

<?php
//avsluttningstagg, fjerner formen når bruker er registrert
}?>
	

		
		

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