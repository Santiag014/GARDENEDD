<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    //Datos pertinentes para la conexion de la Base de Datos
    $serverName = "localhost";
    $userName = "gardened";
    $password = "gardened1234567890";
    $namedb = "bd_gardened";

    //Creamos la Conexion a la Base de Datos
    $createNewConnection = new mysqli($serverName, $userName, $password, $namedb);

    //Verificamos la Conexion
    if($createNewConnection->connect_error){
        die("Concexion Fallida: " . $createNewConnection->connect_error);
    }
    echo "Conexión Exitosa!";

    ?>

</body>
</html>