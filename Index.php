<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ingreso :. Gardened</title>
        <link rel="stylesheet" type="text/css" href="Estilo_Principal.css">
    </head>

    <body>
        <header>
            <img src="Imagenes/logo_san_angel.png" alt="Logo San Ángel" class="logo-Inicio">
            <div class="header-text">
                <h1>GIMNASIO PSICOPEDAGÓGICO SAN ÁNGEL</h1>
                <h2>«UN ESPACIO DE FORMACIÓN HUMANA»</h2>
            </div>
        </header>      
        <br>

        <section id="main">
            <div class="caja-de-ingreso">

                <form action="Index.php"  method="post">

                    <p>Por favor, ingrese sus datos de usuario y contraseña personales.</p>

                    <div>
                        <label for="user">Usuario:</label>
                        <input name="user" type="text" id="user" required placeholder="Ingrese su usuario">
                    </div>
                    

                    <div>
                        <label for="password">Contraseña:</label>
                        <input name="password" type="password" id="password" required placeholder="Ingrese su contraseña">
                    </div>
                    
                    <button type="submit" class="btn btn-default" onclick="inicio()">INGRESAR</button>
                                  
                    <div>   
                        <a href="olvidar.contraseña.php">¿Olvidó su contraseña?</a>
                    </div>

                    <?php if (isset($errorLogin)) { ?>
    <div>
        <p style="color: red;"><?php echo $errorLogin; ?></p>
    </div>
<?php } ?>

                     
                </form>

            </div>
        </section>
        <br>
        
        <hr>
        <footer>
            <img src="Imagenes/LogoGEv.1.6-removebg.png" alt="Logo Gardened">
            <p>COPYRIGHT © GARDENED 2023</p>
        </footer>

        <script src="/Docente/JS/Redireccion.js"></script>
    </body>
</html>    

<?php

session_start();
include 'Conexion.php';

// Obtener Datos del Formulario para iniciar sesión
$correoUser = $_POST['user'];
$passwordUser = $_POST['password'];

// Almacenar el numero de Identificacion del usuario en la sesión
$_SESSION['usuario'] = $correoUser;

// Se realiza una Consulta a la BD para verificar las Credenciales
$consultaLogin = "SELECT * FROM usuarios WHERE correoUsuarios = '$correoUser' AND claveUsuarios = '$passwordUser'";
$resultadoConsultaLogin = $createNewConnection->query($consultaLogin);

if ($resultadoConsultaLogin->num_rows == 1) {
    $row = $resultadoConsultaLogin->fetch_assoc();

    // Redirigimos Según el Rol
    if ($row['rol_idRol'] == '1') {
        header("Location: ./Directivo/Interfaz_Directivo.php");
    } else {
        header("Location: ./Docente/Interfaz_Docente.php");
    }
    exit();
} else {
    $errorLogin = "Credenciales Incorrectas";
    echo $errorLogin;
}

$createNewConnection->close();
?>
