<?php


function user_data($user_id) {
	$data = array();
	$user_id = (int)$user_id;
	
	$func_num_args = func_num_args();
	
	$func_get_args = func_get_args();

	if($func_num_args > 1) {
		unset($func_get_args[0]);
		
		$fields = '`' . implode ('`, `', $func_get_args) . '`';
		echo "SELECT $fields FROM `brukere` WHERE `user id` = $user_id";
		die();
		$data = mysql_query("SELECT $fields FROM `brukere` WHERE `user id` = $user_id");
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






