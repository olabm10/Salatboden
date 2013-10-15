<?php


$result = mysql_connect ("kunder", "olabm10", "my5UsEnUsUnY2Y8Y");
	if ($result == FALSE)
		echo "Kunne ikke koble til databasen";
		
$result = mysql_select_db("olabm10");
	if(!result)
		echo "Ikke OK";
		
?>