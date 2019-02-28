<?php
	$cadena = "Esto es una cadena de prueba";
	$patron = "/de/";
	$encontrado = preg_match_all($patron, $cadena, $coincidencias, PREG_OFFSET_CAPTURE);
	echo "EXPRESIONES REGULARES<br>";
	echo "FUNCION: 	preg_match_all()<br><br>";
	
	if ($encontrado) {
		print "<pre>"; print_r($coincidencias); print "</pre>\n";
		print "<p>Se han encontrado $encontrado coincidencias.</p>\n";
		foreach ($coincidencias[0] as $coincide) {
			print "<p>Cadena: '$coincide[0]' - Posición: $coincide[1]</p>\n";
		}
	} else {
		print "<p>No se han encontrado coincidencias.</p>\n";
	}
?>
