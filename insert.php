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
        $my_insert_statement = $conexion -> prepare("INSERT INTO usuario(nombre,pass,correo,sexo) VALUES (?,?,?,?)");
        if ($my_insert_statement-> execute(array("Jessica","12345","jessica@gmail.com","M"))){
            echo "Agregado <br>";
        }else{
            echo "Error al agregar<br>";
        }       
    }catch (PDOException $error){
        echo "Error de conexion";
    }finally{
        echo "<br>";
    }


?>