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

        <div class="Usuario-interfaz" >

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
                <button class="Botton-Act-Datos">ACTUALIZAR DATOS</button>
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

            <div class="Container-Reporte-Estudiante">
                <div class="h3-Reporte-Estudiante">
                   <h3>REPORTE DE ESTUDIANTE</h3>
               </div>
          
                <div class="col1-Reporte-Estudiante">
                  <div class="DatosEst-Resporte-Estudiante">
                     <div>
                         <img src="../Imagenes/img-usuario.png" alt=".." class="img-Reporte-Estudiante">
                     </div>
                     <div class="datos-personales-est">
                         <div class="div-datos-personales-est">
                            <h4>NOMBRE DE ESTUDIANTE</h4>
                         </div>
                         <div class="div-datos-personales-est">
                            <h4>CURSO</h4>
                         </div>
                         <div class="div-datos-personales-est">
                            <h4>EDAD</h4>
                         </div>
                     </div>
                  </div>
                  <div class="EstadisticasEst-reporte-Estudiante">
                    <div class="div-estadisticas">
                        <h5>TOTAL DE CLASES REALIZADAS:</h5>
                        <p> 00</p>
                    </div>
                    <div class="div-estadisticas">
                        <h5>TOTAL DE CLASES ASISTIDAS:</h5>
                        <p> 00</p>
                    </div>
                    <div class="div-estadisticas">
                        <h5>TOTAL DE CLASES NO ASISTIDAS:</h5>
                        <p> 00</p>
                    </div>
                    <div class="div-estadisticas">
                        <h5>TOTAL DE LLEGADAS TARDIAS:</h5>
                        <p> 00</p>
                    </div>
                    <div class="div-estadisticas">
                        <h5>TOTAL DE JUSTIFICACIONES:</h5>
                        <p> 00</p>
                    </div>
          
                  </div>
                </div>
          
                <div class="col2-Reporte-Estudiante">
                    <div>
                        <h4>ESTADÍSTICAS DE ASISTENCIA</h4>
                        <p>Automático</p>
                    </div>
          
                </div>
          
                <div class="Valoracion-Reporte-Estudiante">
                    <div>
                        <label for="valoracion-registroEst">VALORACIÓN</label>
                        <input type="text" name="valoracion-registroEst" id="valoracion-registroEst">
                    </div>
                </div>
          
                <div class="Observaciones-Reporte-Estudiante">
                    <div>
                        <form action="" id="Obs-Reporte-Est">
                            <label for="valoracion-registroEst">OBSERVACIONES</label>
                            <input type="text" name="valoracion-registroEst" id="input_Observaciones_ReporteAsistencia">
                        </form>
                    </div>
                </div>

                <div class="btn-registro">
                    <button class="regresar-reporte" onclick="redireccionamientoBack_ReporteAsistencia()"><img src="../Imagenes/Iconos-Menu-Docente/back.svg" alt=""width="15px" class="img-btn">REGRESAR</button>
                    <button class="guardar-reporte" onclick="Save_ReporteAsistencia()"><img src="../Imagenes/Iconos-Menu-Docente/save.svg" alt="" width="15px" class="img-btn">GUARDAR</button>
                </div>
          
                <div class="Footer-Registro-Estudiante">
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

 <script src="JS-DIRECTIVO/Redireccionamiento.js"></script>
 <script src="JS-DIRECTIVO/Script.js"></script>
 <script src="JS-DIRECTIVO/Validacion.js"></script>

</body>
</html>
