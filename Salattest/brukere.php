<?php

include 'database.php';
include 'css/salatboden.css';

//Hente data fra skjema
$fornavn = $_POST['Fornavn'];
$etternavn = $_POST['Etternavn'];
$mobilnummer = $_POST['Mobilnummer'];
$epost = $_POST['Epost'];
$adresse = $_POST['Adresse'];
$postnummer = $_POST['Postnummer'];
$sted = $_POST['Sted'];
$passord = $_POST['Passord'];
$lagre = $_POST['lagre']

// Sjekker hva vi har valgt å gjøre på web skjemaet, her LAGRE     
if ($lagre)  // sjekker om knappen som heter lagre er aktivert 
    {    $today = date("Y-m-d H:i:s");  
        $result = mysql_query("INSERT INTO person07 VALUES ('$today','$fornavn','$etternavn','$mobil','$epost')"); 
        //$result = mysql_query("INSERT INTO person07 (fornavn,mobil) VALUES ('knut','12345')"); 
        if ($result) 
            {    include "svar.php"; 
                mysql_close($result); 
            } 
        else    { include "feil.php"; } 
    }  // slutt lagre 
	
	
	
	else if ($hente) 
    {    $query="SELECT * FROM person07"; 
        $result=mysql_query($query);    // sender sql spørringen inn til basen, hente alt fra tabellen person07 

        $num=mysql_numrows($result);    // finner antall poster vi fant 
        mysql_close();                    // ferdig med databasen, utskrift gjenstår 

        echo "<b><center>Database Output</center></b><br><br>"; 
        $i=0; 
        // skriver ut en overskriftsrad i tabellen 
        echo "<tr><td>Dato reg</td>" . "<td> Fornavn </td>" . "<td> Etternavn </td>" . "<td> Mobil </td>" . "<td>Epost </td>" . "</tr><br>"; 

        // går i løkke og skriver en tabellrad for hver post     
        while ($i < $num)  
        { 
            $today=mysql_result($result,$i,"dagensdato"); 
            $fornavn=mysql_result($result,$i,"Fornavn"); 
            $etternavn=mysql_result($result,$i,"Etternavn"); 
            $mobilnummer=mysql_result($result,$i,"Mobilnummer"); 
            $epost=mysql_result($result,$i,"Epost"); 
            echo "<tr><td>$today</td>" . "<td> $fornavn </td>" . "<td> $etternavn </td>" . "<td> $mobil </td>" . "<td>$epost </td>" . "</tr><br>"; 
            $i++; 
        } // slutt while 
} // slutt $hente 

 ?> 