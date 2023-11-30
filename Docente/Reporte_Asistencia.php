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
                <button class="Button-Salir-Interfaz" onclick="btn_Salir()">SALIR</button>
            </div>
        </div>

        <div class="Contenido-interfaz">
            <div class="Container-ReporteCalificaciones-Estudiante">
                <div class="h3-ReporteCalificaciones-Estudiante">
                   <h2>REPORTE ESTUDIANTE</h2>
               </div>
          
                <div class="col1-ReporteCalificaciones-Estudiante">
                  <div class="DatosEst-ReporteCalificaciones">
                     <div>
                         <img src="../Imagenes/img-usuario.png" alt=".." class="img-reporteCalificaciones-Estudiante">
                      </div>

                      <div class="div-DatosEst-ReporteCalificaciones">
                         <div class="datos-personales-resportecalificaiones">
                            <h4>NOMBRE ESTUDIANTE</h4>
                         </div>
                         <div class="datos-personales-resportecalificaiones">
                            <h4>CURSO</h4>
                         </div>
                         <div class="datos-personales-resportecalificaiones">
                            <h4>EDAD</h4>
                         </div>
                     </div>
                  </div>
                  <div class="EstadisticasEst-ReporteCalificaciones">
                    <div class="div-estadisticasCalificaciones">
                        <h5><b>TOTAL CLASES REALIZADAS:</b></h5>
                        <p> 00</p>
                    </div>
                    <div class="div-estadisticasCalificaciones">
                        <h5>TOTAL CLASES ASISTIDAS:</h5>
                        <p> 00</p>
                    </div>
                    <div class="div-estadisticasCalificaciones">
                        <h5>TOTAL CLASES NO ASISTIDAS:</h5>
                        <p> 00</p>
                    </div>
                    <div class="div-estadisticasCalificaciones">
                        <h5>TOTAL LLEGADAS TARDÍAS:</h5>
                        <p> 00</p>
                    </div>
                    <div class="div-estadisticasCalificaciones">
                        <h5>TOTAL JUSTIFICACIONES:</h5>
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

                <div class="Observaciones-ReporteCalificaciones-Estudiante">
                    <div>
                        <label for="valoracion-registroEst">VALORACIÓN</label>
                        <input type="text" name="valoracion-registroEst" id="valoracion-registroEst">
                    </div>
                </div>
          
                <div class="Observaciones-ReporteCalificaciones-Estudiante">
                    <div>
                        <label for="valoracion-registroEst">OBSERVACIONES</label>
                        <input type="text" name="valoracion-registroEst">
                    </div>
                </div>

                <div class="btn-registro">
                    <button class="regresar-reporte-cal" onclick="backReporteAsistencia()"><img src="../Imagenes/Iconos-Menu-Docente/back.svg" alt=""width="15px" class="img-btn">REGRESAR</button>
                    <button class="guardar-reporte-cal" onclick="saveDatosReporteAsistencia()"><img src="../Imagenes/Iconos-Menu-Docente/save.svg" alt="" width="15px" class="img-btn">GUARDAR</button>
                </div>
          
                <div class="Footer-RegistroCalificaciones-Estudiante">
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
                        <button class="btn-Salir1" id="btnSi" >SÍ, CERRAR</button>
                        <button class="btn-Salir1" id="btnNo">NO, CANCELAR</button>
                    </div>
                </div>
            </div>   
        </div>
    </div>

 <script src="JS/Script.js"></script>
 <script src="JS/main.js"></script>
 <script src="JS/Validacion.js"></script>
 <script src="JS/Redireccion.js"></script>

  <script>
     var btnReporteAsistenciaSave = document.getElementById('guardar-reporte');
     var btnReporteCalificacionesBack = document.getElementById  ('regresar-reporte');
     const inputObservacionesRepAsistencia = document.getElementById('input_Observaciones_ReporteAsistencia');


      btnReporteCalificacionesBack.addEventListener('click', ()=>{
        window.location.href= '../Docente/Planilla_Asistencia.php';
    });

    btnReporteAsistenciaSave.addEventListener('click', ()=> {
    if(inputObservacionesRepAsistencia === ""){
       alert("Este Campo No Puede Estar Vacio")
    }
    else{
        alert("Se cargo con exito la observacion")
    }
    });

</script>

</body>
</html>