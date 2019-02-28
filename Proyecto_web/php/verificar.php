<HTML>
<BODY>
<?php
$usuario = $_REQUEST['usuario'];
$contraseña = $_REQUEST['contraseña'];
$patron = "/^(?=.*\d)([[:alpha:]]{1}[[:alnum:]]{4,10};$)/";

if (preg_match($patron, $usuario)) {
    print "<p>Usuario valido</p>\n";
} else {
    print "<p>Usuario no valido</p>\n";
}

if (preg_match($patron, $contraseña)) {
    print "<p>Contraseña valida</p>\n";
} else {
    print "<p>Contraseña no valida</p>\n";
}

?>
</BODY>
</HTML>