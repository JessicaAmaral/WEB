<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $bd="lacousine_bd";

    $sql ="mysql:host=$servername;dbname=$bd;";
    $dsn_Op=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

    try {
        $conexion = new PDO ($sql, $username, $password, $dsn_Op);
        echo "Conexion exitosa <br>";
        $my_select_statement = $conexion -> prepare("SELECT * FROM usuario WHERE nombre = ?");
        $my_select_statement-> execute(array("Jessica"));
        $resultado = $my_select_statement->fetchAll();
        echo "ID | Nacionalidad | Nombre | Contraseña | Correo | Sexo | Tipo | Imagen <br>";
        foreach ($resultado as $row){
            echo $row["id_usuario"];
            echo "\n | \n";
            echo $row["id_nacionalidad"];
            echo "\n | \n";
            echo $row["nombre"];
            echo "\n | \n";
            echo $row["pass"];
            echo "\n | \n";
            echo $row["correo"];
            echo "\n | \n";
            echo $row["sexo"];
            echo "\n | \n";
            echo $row["tipo"];
            echo "\n | \n";
            echo $row["img_perfil"];
            echo "\n | \n";
        }      
    }catch (PDOException $error){
        echo "Error de conexion";
    }finally{
        echo "<br>";
    }

?>


    

