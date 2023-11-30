<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Estilos_Docente.css">

</head>
<body>
    <div class="Container-principal">

        <div class="Usuario-interfaz">

            <button id="Abrir-Menu-Desplegable"><img src="../Imagenes/Iconos-Menu-Docente/menu.svg" alt=""></button>

            <div class="Img-Usuario-Interfaz">
                <img src="../Imagenes/img-usuario.png" alt="" class="Img-Usuario">
                <h5><STRONg>NOMBRE USUARIO</STRONg></h5>
            </div>

            <div class="Menu-Interfaz-Docente">
                <nav class="nav">
                    <ul class="list">
                        <li class="list-item list-item--click">
                            <div class="list-button list-button--click">
                                <img src="../Imagenes/Iconos-Menu-Docente/home.svg" alt="" class="list-img">
                                <a href="../Docente/Interfaz_Docente.php" class="nav_link nav_link_new">Home</a>
                                <img src="../Docente/Imagenes/Iconos-Menu-Docente/arrow.svg" alt="" class="list-arrow" >
                            </div>
                        </li>

                        <li class="list-item list-item--click ">
                            <div class="list-button list-button--click">
                                <img src="../Imagenes/Iconos-Menu-Docente/gestionDocente.svg" alt="" class="list-img">
                                <a href="Gestion_Cursos.php" class="nav_link nav_link_new"><strong>Gestión de Cursos</strong></a>
                            </div>

                            <ul class="list-item list-item--click list-new">
                                <li class="list-inside">
                                    <div class="list-button list-button--click">
                                        <a href="Gestion_Cursos.php" class="nav_link "><strong>Curso 1</strong></a>
                                    </div>

                                    <ul class="list-show">
                                        <li class="list-inside">
                                            <a href="Registrar_Asistencia.php" class="nav_link nav_link--inside">Registrar Asistencia</a>
                                        </li>
                                        <li class="list-inside">
                                            <a href="Registro_Calificaciones.php" class="nav_link nav_link--inside">Ingresar Calificaciones</a>
                                        </li>
                                        <li class="list-inside">
                                            <a href="Planillas_Cursos.php" class="nav_link nav_link--inside">Planillas</a>
                                        </li>
                                    </ul>   
                                </li>
                            </ul>

                            <ul class="list-item list-item--click list-new list-new">
                                <li class="list-inside">
                                    <div class="list-button list-button--click">
                                        <a href="Gestion_Cursos.php" class="nav_link "><STRONg>Curso 2</STRONg></a>
                                    </div>

                                    <ul class="list-show">
                                        <li class="list-inside">
                                            <a href="Registrar_Asistencia.php" class="nav_link nav_link--inside">Registrar Asistencia</a>
                                        </li>
                                        <li class="list-inside">
                                            <a href="Registro_Calificaciones.php" class="nav_link nav_link--inside">Ingresar Calificaciones</a>
                                        </li>
                                        <li class="list-inside">
                                            <a href="Planillas_Cursos.php" class="nav_link nav_link--inside">Planillas</a>
                                        </li>
                                    </ul>    
                                </li>
                            </ul>

                            <ul class="list-item list-item--click list-new">
                                <li class="list-inside">
                                    <div class="list-button list-button--click">
                                        <a href="Gestion_Cursos.php" class="nav_link "><Strong>Curso 3</Strong></a>
                                    </div>

                                    <ul class="list-show">
                                        <li class="list-inside">
                                            <a href="Registrar_Asistencia.php" class="nav_link nav_link--inside">Registrar Asistencia</a>
                                        </li>
                                        <li class="list-inside">
                                            <a href="Registro_Calificaciones.php" class="nav_link nav_link--inside">Ingresar Calificaciones</a>
                                        </li>
                                        <li class="list-inside">
                                            <a href="Planillas_Cursos.php" class="nav_link nav_link--inside">Planillas</a>
                                        </li>
                                    </ul>   
                                </li>
                            </ul>
                        </li>

                        <li class="list-item list-item--click">
                            <div class="list-button list-button--click">
                                <img src="../Imagenes/Iconos-Menu-Docente/gestionDocente.svg" alt="" class="list-img">
                                <a href="Observar_Cursos.php" class="nav_link nav_link_new">Observador </a>
                            </div>

                                <ul class="list-show">
                                    <li class="list-inside">
                                        <a href="#" class="nav_link nav_link--inside">Curso 1</a>
                                    </li>
                                    <li class="list-inside">
                                        <a href="#" class="nav_link nav_link--inside">Curso 2</a>
                                    </li>
                                </ul>   
                            </li>
                            
                        </li>
                    </ul>
                </nav>

            </div>

            <div>
                <button class="Botton-Act-Datos" onclick="ActualizarDatos()">ACTUALIZAR DATOS</button>
            </div>

        </div>

        <div class="Institucion-interfaz">
            <div class="logo">
                <img src="../Imagenes/logo_san_angel.png" alt="" class="Logo-Institucion-Interfaz">
            </div>
            <div class="Nombre-Institucion">
                <h3>GIMNASIO PSICOPEDAGÓGICO SAN ANGEL</h3>
            </div>
            <div class="button">
                <button class="Button-Salir-Interfaz" onclick="btn_Salir()" >SALIR</button>
            </div>
        </div>

        <div class="Contenido-interfaz">

            <div class="Cambio_Contraseña">

                <div class="First_h3_Contraseña">
                    <h3>CAMBIO DE CONTRASEÑA</h3>
                </div>

                <div class="Cambio_Contraseña-Container">
                    <div class="divs-Cambio-Contraseña">
                        <label for="">Contraseña Actual</label>
                        <input type="text" id="ContraActual-">
                    </div>
    
                    <div class="divs-Cambio-Contraseña">
                        <label for="">Nueva Contraseña</label>
                        <input type="text" id="ContraNew-">
                    </div>
    
                    <div class="divs-Cambio-Contraseña">
                        <label for="">Confirmar Contraseña</label>
                        <input type="text" id="ConfirmarContra-">
                    </div>
                </div>
                
                <div class="buttons-Cambio-Contraseña">

                    <button class="Regresar_Buttom_Contraseña" onclick="back_CambiarContraseña()">
                        <img src="../Imagenes/Iconos-Menu-Docente/back.svg" alt="" width="10px" height="10px">
                        <span>REGRESAR</span>
                    </button>
                    
                    <button class="Confirmar_Buttom_Contraseña" onclick="redireccionar_ConfirmarContraseña()">
                        <span>CONFIRMAR</span>
                        <img src="../Imagenes/Iconos-Menu-Docente/next.svg" alt="" width="15px" height="10px">
                        
                    </button>
    
                </div>

                <div class="end_h3_Contraseña">
                    <h3>UN ESPACIO DE FORMACIÓN HUMANA</h3>
                    <p>COPYRIGHT © GARDENED 2023</p>
                </div>
            </div>

            <div class="Div-Cerrar-Seccion" id="btn_Salir">
                <div class="Seguro">
                    <h3>¿Está seguro que desea cerrar su sesión?</h3>
                </div>
    
                <div class="btn-Div-Salir">
                    <div>
                        <button class="btn-Salir1" id="btnSi">SÍ, CERRAR</button>
                        <button class="btn-Salir1" id="btnNo">NO, CANCELAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="JS/Redireccion.js"></script>
    <script src="JS/Script.js"></script>
    <script src="JS/Validacion.js"></script>
    
</body>
</html>