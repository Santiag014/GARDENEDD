<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña :. Gardened</title>
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
            <h3>¿Olvidó su contraseña?</h3>

            <p>Si ha olvidado su contraseña o tiene dificultades para ingresar, por favor digite su correo electrónico vinculado a la cuenta de Gardened.<br><br>Se le enviará a su correo una contraseña de respaldo que tendrá una vigencia de 24 horas. Luego, en el sistema, podrá modificar y personalizar nuevamente su contraseña.
            </p>

                <div>
                    <label for="email">Correo:</label>
                    <input name="email" type="email" id="email" required placeholder="Ingrese su correo">
                </div>

                <button type="submit" onclick="enviar()" class="btn btn-default">Enviar</button>

            </form>

        </div>
    </section>
    <br>

    <script type="text/javascript">
    function enviar() {
        var email = document.getElementById("email").value;
        alert('Se ha enviado la nueva contraseña al correo: '+email);
    }
    </script>

<hr>
<footer>
    <img src="Imagenes/LogoGEv.1.6-removebg.png" alt="Logo Gardened">
    <p>COPYRIGHT © GARDENED 2023</p>
</footer>

</body>
</html>    