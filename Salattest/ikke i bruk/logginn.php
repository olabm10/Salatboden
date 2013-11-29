<?php

$epost = $_POST['epost'];
$passord = $_POST['passord'];


	//sjekker om brukernavn og passord er riktig
if ($epost&&$passord) {

	//logger på databasen med brukernavn og passord
	$connect = mysql_connect("boltit", "olabm10", "3EhAjA8aqutynU2E") or die("Kunne ikke koble til");
	
	//velger database
	mysql_select_db("olabm10") or die("fant ikke database");
	}
	
	
$query = mysql_query("SELECT * FROM salatbrukere ");

$numrows = mysql_num_rows($query);
echo $numrows;
	
	
else
	//brukernavn og passord er ikke fylt ut
	die("Skriv inn brukernavn og passord");
	
?>