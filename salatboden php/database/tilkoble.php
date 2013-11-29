<?php
$connect_error = 'Beklager, en feil oppstod. Venligst prøv igjen senere <br> Pleace try again later.';

//kobler til serveren. die error kun for test.
mysql_connect('localhost','root','') or die(mysql_error());

//kobler til databasen
mysql_select_db('salatboden') or die($connect_error);

?>