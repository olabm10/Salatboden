<?php

include 'database.php';

//Hente data fra skjema
$fornavn = $_POST['fornavn'];
$etternavn = $_POST['etternavn'];
$mobilnummer = $_POST['mobilnummer'];
$epost = $_POST['epost'];
$adresse = $_POST['adresse'];
$postnummer = $_POST['postnummer'];
$sted = $_POST['sted'];
$passord = $_POST['passord'];
$lagre = $_POST['lagre'];
$hente = $_POST['hente'];

// Sjekker hva vi har valgt å gjøre på web skjemaet, her LAGRE     
if ($lagre)  // sjekker om knappen som heter lagre er aktivert 
    {    $today = date("Y-m-d H:i:s");  
        $result = mysql_query("INSERT INTO salatbrukere VALUES ('$fornavn','$etternavn','$mobilnummer','$epost','$adresse','$postnummer','$sted','$passord')"); 
        //$result = mysql_query("INSERT INTO salatbrukere (fornavn,mobil) VALUES ('knut','12345')"); 
        if ($result) 
            {    include "svar.php"; 
                mysql_close($result); 
            } 
        else    { include "feil.php"; } 
    }  // slutt lagre 
	
	
	
	else if ($hente) 
    {    $query="SELECT * FROM salatbrukere"; 
        $result=mysql_query($query);    // sender sql spørringen inn til basen, hente alt fra tabellen salatbrukere 

        $num=mysql_numrows($result);    // finner antall poster vi fant 
        mysql_close();                    // ferdig med databasen, utskrift gjenstår 

        echo "<b><center>Database Output</center></b><br><br>"; 
        $i=0; 
        // skriver ut en overskriftsrad i tabellen 
        echo "<tr><td>Dato reg</td>" . "<td> fornavn </td>" . "<td> etternavn </td>" . "<td> mobilnummer </td>" . "<td>epost </td>" . "</tr><br>"; 

        // går i løkke og skriver en tabellrad for hver post     
        while ($i < $num)  
        { 
            $today=mysql_result($result,$i,"dagensdato"); 
            $fornavn=mysql_result($result,$i,"fornavn"); 
            $etternavn=mysql_result($result,$i,"etternavn"); 
            $mobilnummer=mysql_result($result,$i,"mobilnummer"); 
            $epost=mysql_result($result,$i,"epost"); 
			$adresse=mysql_result($result,$i,"adresse");
			$postnummer=mysql_result($result,$i,"postnummer");
			$sted=mysql_result($result,$i,"sted");
			$passord=mysql_result($result,$i,"passord");
            echo "<tr><td>$today</td>" . "<td> $fornavn </td>" . "<td> $etternavn </td>" . "<td> $mobilnummer </td>" . "<td>$epost </td>" . 
			"<td>$adresse </td>" . "<td>$postnummer </td>" . "<td>$sted </td>" . "<td>$passord </td>" . "</tr><br>"; 
            $i++; 
        } // slutt while 
} // slutt $hente 

 ?> 