<?php


$result = mysql_connect ("boltit", "olabm10", "3EhAjA8aqutynU2E");
	if ($result == FALSE)
		echo "Kunne ikke koble til databasen";
		
$result = mysql_select_db("olabm10");
	if(!result)
		echo "Kunne ikke koble til database";
		
?>