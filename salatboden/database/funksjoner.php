<?php
//mail funksjon for konto aktivering
function epost($to, $subject, $body) {
	mail($to, $subject, $body, 'From: info@salatboden.no ');
}

//sanitering 1
function array_sanitize(&$item)	{
	$item = mysql_real_escape_string($item);
}
//sanitering 2
function sanitize($data) {
	return mysql_real_escape_string($data);
}

//error array
function output_errors($errors) {
	$output = array();
	foreach($errors as $error) {
		$output[] = '<li>' . $error . '</li>';
	}
	return '<ul>' . implode('', $output) . '</ul>';
}
?>