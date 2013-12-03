<?php


require 'database/init.php';
include 'header.php';

if (isset($_GET['suksess']) === true && empty($_GET['suksess']) === true) {
?>
	<h2>WEE:D</h2>
	<p>Vi har aktivert din konto!</p>
	
<?php
} else if (isset($_GET['epost'], $_GET['epost_kode']) === true) {

	$epost 		= ($_GET['epost']);
	$epost_kode =($_GET['epost_kode']);
	
	if (email_eksisterer($epost) === false) {
		$errors[] = 'Email adressen er ikke registrert';
	} else if (aktiver($epost, $epost_kode) === false) {
		$errors[] = 'Kunne ikke aktivere kontoen';
	}
	
	if (empty($errors) === false) {
	?>
		<h3>Oops...</h3>
	<?php
		echo output_errors($errors);
	} else {
		header('Location: aktiver.php?suksess');
		exit();
	}

} else {
	header('Location: hjem.php');
	exit();
}

include 'footer';
?>


