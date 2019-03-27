<HTML>
<BODY>
<?php
if (isset ($_POST["enviar"]))
{
    $usuario = $_REQUEST['usuario'];
    $contraseña = $_REQUEST['contraseña'];
    $patron = "/^(?=.*\d)([[:alpha:]]{1}[[:alnum:]]{4,10};$)/";
    
    if (preg_match($patron, $usuario)) {
        print "<p>Usuario valido</p>\n";
    } else {
        print "<p>Usuario $usuario no valido</p>\n";
    }
    
    if (preg_match($patron, $contraseña)) {
        print "<p>Contraseña valida</p>\n";
    } else {
        print "<p>Contraseña $contraseña no valida</p>\n";
    }
} else{
    print "<p>No se enviaron datos. Favor de intentar de nuevo<p>";
    //print <INPUT TYPE=submit" N-AME="reenviar" VALUE="Volver" <a href="WEB/Proyecto_web/php/ingresar_psswrd_usr.php"> </a>;
    print '<form action="ingresar_psswrd_usr.php" method="get">';
    print '<input type="submit" value="Aceptar">';
    print '</form>';
    
}


?>
</BODY>
</HTML>