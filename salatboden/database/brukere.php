<?php

//registrerer bruker, sikrer informasjonen og krypterer passordet med md5
function register_user($register_data) {
	array_walk($register_data, 'array_sanitize');
	$register_data['passord'] = md5($register_data['passord']);

	
	//fields, som er registreringsdataen dekket inn i ``
	$fields = '`' . implode('`, `', array_keys($register_data)) . '`';;
	$data = '\'' . implode('\', \'',  $register_data) . '\'';
	
	//samler data for å sende til registrering i db
	mysql_query("INSERT INTO `brukere`($fields) VALUES ($data)");
	}

function user_data($user_id) {
	$data = array();
	$user_id = (int)$user_id;
	
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();

	if ($func_num_args > 1) {
		unset($func_get_args[0]);
		
		$fields = '`' . implode('`, `', $func_get_args) . '`';
		$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `brukere` WHERE `user_id` = $user_id"));
		 //returnerer brukerdata for denne økten
		return $data;
	}
}


function logget_inn() {
	return (isset($_SESSION['user_id'])) ? true : false;
}


//sjekk om bruker eksisterer
function ekte_bruker($epost){
	//sanitering er et verktøy for å forhindre korrupt data. Endrer ulovlige tegn. etter validering av data.
	$epost = sanitize($epost);
		return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `brukere` WHERE `epost`= '$epost'"), 0) == 1) ? true : false;
}

//sjekk om bruker eksisterer
function email_eksisterer($epost){
	$epost = sanitize($epost);
		return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `brukere` WHERE `epost`= '$epost'"), 0) == 1) ? true : false;
}

//Sjekker om bruker er aktiv
function aktiv_bruker($epost){
	$epost = sanitize($epost);
		return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `brukere` WHERE `epost` = '$epost' AND `aktiv` = 1"), 0) == 1)? true : false;
}

//returnerer ID fra bruker som logger inn
function id_fra_bruker($epost) {
	$epost = sanitize($epost);
	return mysql_result(mysql_query("SELECT `user_id` FROM `brukere` WHERE `epost` = '$epost'"), 0, 'user_id');
}

function login ($epost, $passord) {
	$user_id = id_fra_bruker($epost);
	
	$epost = sanitize($epost);
	$passord = md5($passord);
	
	//Sjekker om det finnes en match mellom brukernavn og passord. I så fal blir resultatet = 1 og bruker ID blir returnert fra DB
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `brukere` WHERE `epost` = '$epost' AND `passord` = '$passord'"), 0) == 1) ? $user_id : false;
	}

	
?>






