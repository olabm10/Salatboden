<?php
//starter innloggins session
session_start();
//error_reporting(0);


//require er identisk med include bortsett fra at ved feil gir include varsler og require stopper skriptet.
require 'tilkoble.php';
require 'funksjoner.php';
require 'brukere.php';


//gir tilgang til fornavn, etternavn og epost
if (logget_inn() === true) {
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id', 'fornavn', 'etternavn', 'epost');
	}

$errors = array();
?>