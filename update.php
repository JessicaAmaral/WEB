<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $bd="lacousine_bd";

    $sql ="mysql:host=$servername;dbname=$bd;";
    $dsn_Op=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

    try {
        $conexion = new PDO ($sql, $username, $password, $dsn_Op);
        echo "Conexion exitosa<br>";
        $my_update_statement = $conexion -> prepare("UPDATE usuario SET nombre = ? WHERE nombre = ?");
        if ($my_update_statement-> execute(array("Pancha", "Jessica"))){
            echo "Actualizado <br>";
        }else{
            echo "Error al actualizar<br>";
        }       
    }catch (PDOException $error){
        echo "Error de conexion";
    }finally{
        echo "<br>";
    }


?>



