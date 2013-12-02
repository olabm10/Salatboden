<?php

//include 'header.php';

if (isset($_GET['epost'], $_GET['epost_kode']) === true) {
	
	$epost		= trim($_GET['epost']);
	$epost_kode	= trim($_GET['epost_kode']);
		
	if (email_eksisterer($epost) === false) {
		$errors[] = 'Email adressen er ikke registrert';
	} else if(aktiver($epost, $epost_kode) === false) {
		$errors[] = 'Kunne ikke aktivere kontoen';
	}
} else   {
	header('Location: hjem.php');
	exit();
}


//include 'footer.php';
?>


