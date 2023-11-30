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

            <div class="Container-AddStudent">
                
                <div class="h3_Matricula_AddStudent"><h3>MATRÍCULA #123456789s</h3></div>
                <div class="h5_Matricula_AddStudent"><h5>INFORMACIÓN ESTUDIANTE</h5></div>

                <div class="Informacion_Est_AddStudent">

                    <div class="Foto-Perfil-AddStudent">
                        <img src="../Imagenes/img-usuario.png" alt=""  class="img-perfil">

                    </div>

                    <div class="Informacion_AddStudent">

                        <div class="Caja_Informacion_AddStudent">
                            <label for="nombre">Nombre</label>
                             <input type="text" name="nombre" id="nombre" >
                        </div>

                        <div class="Caja_Informacion_AddStudent">
                            <label for="apellido">Apellido</label>
                             <input type="text" name="apellido" id="apellido" >
                        </div>

                        <div class="Caja_Informacion_AddStudent">
                            <label for="tip_documento">Tipo de Documento
                            </label>
                             <input type="text" name="tip_documento" id="tip_documento" >
                        </div>

                        <div class="Caja_Informacion_AddStudent">
                            <label for="numero_documento">Número de Documento</label>
                             <input type="text" name="numero_documento" id="numero_documento" >
                        </div>

                        <div class="Caja_Informacion_AddStudent">
                            <label for="telefono">Teléfono</label>
                             <input type="text" name="telefono" id="telefono" >
                        </div>

                        <div class="Caja_Informacion_AddStudent">
                            <label for="direccion">Dirección</label>
                             <input type="text" name="direccion" id="direccion" >
                        </div>

                        <div class="Caja_Informacion_AddStudent">
                            <label for="barrio">Barrio</label>
                             <input type="text" name="barrio" id="barrio" >
                        </div>

                        <div class="Caja_Informacion_AddStudent">
                            <label for="nombre">Fecha de Nacimiento</label>
                             <input type="date" name="nombre" id="nombre" >
                        </div>

                        <div class="Caja_Informacion_AddStudent">
                            <label for="lugar_nacimiento">Lugar de Nacimiento</label>
                             <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" >
                        </div>

                        <div class="Caja_Informacion_AddStudent">
                            <label for="eps">EPS
                            </label>
                             <input type="text" name="eps" id="eps" >
                        </div>

                        <div class="Caja_Informacion_AddStudent">
                            <label for="rh">RH</label>
                             <input type="text" name="rh" id="rh" >
                        </div>
                    </div>
                </div>

                <div class="h5_Matricula_AddStudent">
                        <h5>INFORMACIÓN ACADÉMICA</h5>
                </div>

                <div class="Informacion_Acad_AddStudent">
                    <div class="Caja_Informacion_AddStudent">
                        <label for="fecha_matricula">Fecha de Matrícula</label>
                         <input type="text" name="fecha_matricula" id="fecha_matricula" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="estado_matricula">Estado de Matrícula</label>
                         <input type="text" name="aestado_matricula" id="estado_matricula" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="Jornada">Jornada
                        </label>
                         <input type="text" name="Jornada" id="Jornada" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="grado">Grado</label>
                         <input type="text" name="grado" id="grado" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">   
                        <label for="curso">Curso</label>
                         <input type="text" name="curso" id="curso" >
                    </div>

                </div>

                <div class="h5_Matricula_AddStudent">
                    <h5>INFORMACIÓN ACUDIENTE</h5>
              </div>

                <div class="Informacion_Acud_AddStudent">
                    <div class="Caja_Informacion_AddStudent">
                        <label for="nombre">Nombre de Acudiente</label>
                         <input type="text" name="nombre" id="nombre" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="apellido">Apellido de Acudiente</label>
                         <input type="text" name="apellido" id="apellido" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="tip_documento">Tipo de Documento
                        </label>
                         <input type="text" name="tip_documento" id="tip_documento" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="numero_documento">Número de Documento</label>
                         <input type="text" name="numero_documento" id="numero_documento" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="telefono">Teléfono</label>
                         <input type="text" name="telefono" id="telefono" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="direccion">Dirección</label>
                         <input type="text" name="direccion" id="direccion" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="barrio">Barrio</label>
                         <input type="text" name="barrio" id="barrio" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="nombre">E-mail</label>
                         <input type="date" name="nombre" id="nombre" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="lugar_nacimiento">Profesión</label>
                         <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="eps">Empresa
                        </label>
                         <input type="text" name="eps" id="eps" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="rh">Cargo</label>
                         <input type="text" name="rh" id="rh" >
                    </div>

                    <div class="Caja_Informacion_AddStudent">
                        <label for="rh">Teléfono de Empresa</label>
                         <input type="text" name="rh" id="rh" >
                    </div>
                </div>

                <div class="Botones_AddStudent">
                    <button class="Button-save-AddStuden" onclick="Guardar_btn()"><img src="../Imagenes/Iconos-Menu-Docente/save.svg" alt="" style="margin-bottom: -3px; margin-right: 5px;" width="18px" ;>GUARDAR</button>
                    <button class="Button-cancel-AddStuden" onclick="redireccionarCancel_AddStudentPage()"><img src="../Imagenes/Iconos-Menu-Docente/cancel.svg" alt="" style="margin-bottom: -3px; margin-right: 5px;" width="18px"; >CANCELAR</button>
                </div>

                <div class="footer-AddStudent">
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

    <script src="JS-DIRECTIVO/Script.js"></script>
    <script src="JS-DIRECTIVO/Redireccionamiento.js"></script>
    
</body>
</html>