<?php
	
	$cadena = "aaAA123";
	$patron1 = "/^[a-z]+$/";
	$patron2 = "/^[a-z]+$/i";
	echo "EXPRESIONES REGULARES<br>";
	echo "FUNCION: 	preg_match()<br><br>";
	
	if (preg_match($patron1, $cadena)) {
		print "<p>La cadena $cadena son sólo letras minúsculas.</p>\n";
	} else {
		print "<p>La cadena $cadena no son sólo letras minúsculas.</p>\n";
	}
	
	if (preg_match($patron2, $cadena)) {
		print "<p>La cadena $cadena son sólo letras minúsculas o mayúsculas.</p>\n";
	} else {
		print "<p>La cadena $cadena no son sólo letras minúsculas o mayúsculas.</p>\n";
	}
?>
