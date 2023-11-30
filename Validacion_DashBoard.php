<?php session_start();  
    
    include '../Conexion.php';

    //Validacion Nombre del Usuario
    $consultaIdUsuario = "SELECT nombresUsuarios, apellidosUsuarios FROM usuarios WHERE numdocumentoUsuarios = '" . $_SESSION['usuario'] . "'";
    $resultadoConsultaId = $createNewConnection->query($consultaIdUsuario);
    
    if ($resultadoConsultaId) {
        // Si la consulta fue exitosa, obtenemos el resultado
        $fila = $resultadoConsultaId->fetch_assoc();
        $nombresUsuario = $fila['nombresUsuarios'];
        $apellidosUsuario = $fila['apellidosUsuarios'];

    } else {
        // Si hay un error en la consulta
        echo "Error en la consulta: " . $createNewConnection->error;
    }
    
    $createNewConnection->close();

    ?>