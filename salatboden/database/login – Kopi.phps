<?php

include 'init.php';





if(empty($_POST) === false) {
	$epost = $_POST['epost'];
	$passord = $_POST['passord'];

	//Sjekker om feltene er fylt ut, hvis ikke vises feilmelding
	if (empty($epost) === true || empty ($passord) === true) {
			$errors[] = 'Du må skrive inn brukernavn og passord';
		}	
		
		//sjekker om brukeren eksisterer med ekste_bruker funksjonen
		 else if(ekte_bruker($epost) === false) {
			$errors[] = 'Brukernavnet er ikke tidligere registrert';
		}
		
		//sjekker om brukeren er aktiv (verifisert kontoen via email)
		else if (aktiv_bruker($epost) === false) {
			$errors[] = 'Du har ikke aktivert kontoen tin';
		}
		
		//sjekker brukernavn og passord, så logger brukeren inn. Hvis feil returneres feilmelding.
		else {
			$login = login($epost, $passord);
			if ($login === false) {
				$errors[] = 'Feil passord.  Du e glemsk!';
			} else {  
					$_SESSION['user_id'] = $login;
					header('Location: ../hjem.php');
					exit();
			}
		}
} else {
	$errors[] = 'Ingen data mottatt';
}		
	if (empty($errors) === false) {
?>
<h2> Kunne ikke logge inn...</h2>

<?php
//printer feilmeldinger
echo output_errors($errors);
}
?>
<!--hjem link ved feil innlogging-->
<span>trykk <a href="../hjem.php">her</a> for å prøve igjen. </span>