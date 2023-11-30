<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Estilos_Directivo.css">

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
                                <a href="Interfaz_Directivo.php" class="nav_link nav_link_new">Home</a>
                                <img src="../Docente/Imagenes/Iconos-Menu-Docente/arrow.svg" alt="" class="list-arrow" >
                            </div>
                        </li>

                        <li class="list-item list-item--click ">
                            <div class="list-button list-button--click">
                                <img src="../Imagenes/Iconos-Menu-Docente/Gestion_.png" alt="" class="list-img">
                                <a href="Gestion_Cursos_Directivo.php" class="nav_link nav_link_new"><strong>Gestión de Cursos</strong></a>
                                <!--<img src="../Imagenes/Iconos-Menu-Docente/arrow.svg" alt="" class="list-arrow" >-->
                            </div>

                            <ul class="list-item list-item--click list-new">
                                <li class="list-inside">
                                    <div class="list-button list-button--click">
                                        <a href="Curso1_Gestion_Directivo.php" class="nav_link "><strong>Curso 1</strong></a>
                                        <!--<img src="../Imagenes/Iconos-Menu-Docente/arrow.svg" alt="" class="list-arrow" >-->
                                    </div>

                                    <ul class="list-show">
                                        <li class="list-inside">
                                            <a href="Registrar_Asistencia_Directivo.php" class="nav_link nav_link--inside">Registrar Asistencia</a>
                                        </li>
                                        <li class="list-inside">
                                            <a href="Registro_Calificaciones_Directivo.php" class="nav_link nav_link--inside">Ingresar Calificaciones</a>
                                        </li>
                                        <li class="list-inside">
                                            <a href="Planillas_Cursos_Directivo.php" class="nav_link nav_link--inside">Planillas</a>
                                        </li>
                                    </ul>   
                                </li>
                            </ul>

                            <ul class="list-item list-item--click list-new list-new">
                                <li class="list-inside">
                                    <div class="list-button list-button--click">
                                        <a href="Curso1_Gestion_Directivo.php" class="nav_link "><STRONg>Curso 2</STRONg></a>
                                        <!--<img src="../Imagenes/Iconos-Menu-Docente/arrow.svg" alt="" class="list-arrow" >-->
                                    </div>

                                    <ul class="list-show">
                                        <li class="list-inside">
                                            <a href="Registrar_Asistencia_Directivo.php" class="nav_link nav_link--inside">Registrar Asistencia</a>
                                        </li>
                                        <li class="list-inside">
                                            <a href="Registro_Calificaciones_Directivo.php" class="nav_link nav_link--inside">Ingresar Calificaciones</a>
                                        </li>
                                        <li class="list-inside">
                                            <a href="Planillas_Cursos_Directivo.php" class="nav_link nav_link--inside">Planillas</a>
                                        </li>
                                    </ul>   
                                </li>
                            </ul>
                        </li>

                        <li class="list-item list-item--click ">
                            <div class="list-button list-button--click">
                                <img src="../Imagenes/Iconos-Menu-Docente/nota.png" alt="" class="list-img">
                                <a href="#" class="nav_link nav_link_new"><strong>Registro de Matrícula</strong></a>
                                <!--<img src="../Imagenes/Iconos-Menu-Docente/arrow.svg" alt="" class="list-arrow" >-->
                            </div>

                            <ul class="list-item list-item--click list-new">
                                <li class="list-inside">
                                    <div class="list-button list-button--click">
                                        <a href="GestionEstudinate_Cursos_Directivo.php" class="nav_link "><strong>Ingresar Estudiante Nuevo</strong></a>
                                        <!--<img src="../Imagenes/Iconos-Menu-Docente/arrow.svg" alt="" class="list-arrow" >-->
                                    </div> 
                                </li>
                            </ul>  

                            <ul class="list-item list-item--click list-new">
                                <li class="list-inside">
                                    <div class="list-button list-button--click">
                                        <a href="GestionEstudinate_Cursos_Directivo.php" class="nav_link "><strong>Gestionar Estudiante</strong></a>
                                        <!--<img src="../Imagenes/Iconos-Menu-Docente/arrow.svg" alt="" class="list-arrow" >-->
                                    </div>

                                    <ul class="list-show">
                                        <li class="list-inside">
                                            <a href="Seleccion_Curso_Directivo.php" class="nav_link nav_link--inside">Curso 1</a>
                                        </li>
                                        <li class="list-inside">
                                            <a href="Seleccion_Curso_Directivo.php" class="nav_link nav_link--inside">Curso 2</a>
                                        </li>
                                    </ul>   
                                </li>
                            </ul>

                        <li class="list-item list-item--click">
                            <div class="list-button list-button--click">
                                <img src="../Imagenes/Iconos-Menu-Docente/observador.png" alt="" class="list-img">
                                <a href="#" class="nav_link nav_link_new">Observador Estudiantil</a>
                                <img src="../Docente/Imagenes/Iconos-Menu-Docente/arrow.svg" alt="" class="list-arrow" >
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

                        <li class="list-item list-item--click">
                            <div class="list-button list-button--click">
                                <img src="../Imagenes/Iconos-Menu-Docente/Registro_Docente.png" alt="" class="list-img">
                                <a href="Registro_Docente_Directivo.php" class="nav_link nav_link_new">Registro Usuario</a>
                                <img src="../Docente/Imagenes/Iconos-Menu-Docente/arrow.svg" alt="" class="list-arrow" >
                            </div>

                            <ul class="list-show">
                                <li class="list-inside">
                                     <a href="Ingresar_Docente_Directivo.php" class="nav_link nav_link--inside">Ingresar Docente</a>
                                </li>
                                <li class="list-inside">
                                     <a href="Gestionar_Usuarios_Directivo.php" class="nav_link nav_link--inside">Gestionar Usuario</a>
                                </li>
                          </ul>   
                        </li>

                    </ul>
                </nav>


            </div>

            <div>
                <button class="Botton-Act-Datos" onclick="redireccionarIntefazDirectivo()" >ACTUALIZAR DATOS</button>
            </div>

        </div>

        <div class="Institucion-interfaz">
            <div class="logo">
                <img src="../Imagenes/logo_san_angel.png" alt=""  class="Logo-Institucion-Interfaz">
            </div>
            <div class="Nombre-Institucion">
                <h3>GIMNASIO PSICOPEDAGÓGICO SAN ANGEL</h3>
            </div>
            <div class="button">
                <button class="Button-Salir-Interfaz" onclick="btn_Salir()" >SALIR</button>
            </div>
        </div>

        <div class="Contenido-interfaz">

            <div class="Contenido-Interfaz-Administrativo-Principal">

                <div class="slider-frame">
                    <ul class="ul-slider">
                        <li class="li.slider"><img src="../Imagenes/slider/tree-832079_1280.jpg" alt="" class="img-slider"></li>
                        <li  class="li.slider"><img src="../Imagenes/slider/books-1163695_1280.jpg" alt="" class="img-slider"></li>
                        <li class="li.slider"><img src="../Imagenes/slider/glasses-1052010_1280.jpg" alt="" class="img-slider"></li>
                        <li class="li.slider"><img src="../Imagenes/slider/paper-1100254_1280.jpg" alt="" class="img-slider"> </li>
                    </ul>   
                </div>

                <div class="Interacciones-Interfaz-Admninistrativo">
                    <div class="GestionCursos-Interfaz">
                        <a href="Registrar_Asistencia_Directivo.php" class="Interacciones_Interfaz"><img src="../Imagenes/Iconos-Menu-Docente/asistencia.png" class="img-interacciones"></a>
                        <p>REGISTRAR ASISTENCIA</p>
                    </div>
                    <div class="RegistroMatricula-Interfaz">
                        <a href="Registro_Calificaciones_Directivo.php"><img src="../Imagenes/Iconos-Menu-Docente/calificaciones-de-los-estudiantes.png" alt="" class="img-interacciones" ></a>
                        <p>INGRESAR CALIFICACIONES</p>
                    </div>
                    <div class="RegistroMatricula-Interfaz">
                        <a href="Planillas_Cursos_Directivo.php"><img src="../Imagenes/Iconos-Menu-Docente/planilla.png" alt="" class="img-interacciones" ></a>
                        <p>PLANILLAS</p>
                    </div>
                </div>

                <div class="InformacionIns-Interfaz-Administrativo">
                    <h3>UN ESPACIO DE FORMACIÓN HUMANA</h3>
                    <p>COPYRIGHT © GARDENED 2023</p>
                </div>


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

    
    <script src="JS-DIRECTIVO/Script.js"></script>
    <script src="JS-DIRECTIVO/Redireccionamiento.js"></script>
    
</body>
</html>