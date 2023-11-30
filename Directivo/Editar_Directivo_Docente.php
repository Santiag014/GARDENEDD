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
                <button class="Botton-Act-Datos" onclick="btn_Salir()" >ACTUALIZAR DATOS</button>
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
                <button class="Button-Salir-Interfaz">SALIR</button>
            </div>
        </div>

        <div class="Contenido-interfaz">

            <div class="container_ingdocente">
                
                <div class="container__ingdocente-h3"><h3>USUARIO NRO 123456789</h3></div>
                <div class="container__ingdocente-h5"><h5>INFORMACIÓN USUARIO</h5></div>
                <div class="container__ingdocente-sub">
                    <div class="foto_docente">
                       <img src="../Imagenes/img-usuario.png" id="imagen_docente"> 
                    </div>
                    <div class="ventanas" id="ventanas_1">
                        <div class="ventanas-sub">
                            <label for="nombre">Nombres</label>
                            <input type="text" name="nombre" id="nombre" class="forms" required>
                        </div>
                        <div class="ventanas-sub">
                            <label for="tip_documento">Tipo de Documento</label>
                            <select name="tip_documento" id="tip_documento" required>
                                <option id="nodoc">
                                </option>
                                <option id="cedula">
                                    C.C
                                </option>
                                <option id="cedulaE">
                                    C.E
                                </option>
                                <option id="pep">
                                    P.E.P
                                </option>
                            </select>
                        </div>
                        <div class="ventanas-sub">
                            <label for="telefono">Teléfono</label>
                            <input type="text" name="telefono" id="telefono" required>
                        </div>
                        <div class="ventanas-sub">
                            <label for="barrio">Barrio</label>
                            <input type="text" name="barrio" id="barrio" >
                        </div>
                        <div class="ventanas-sub">
                            <label for="nombre" id="lab_fecha_nac">Fecha de Nacimiento</label>
                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
                        </div>
                        <div class="ventanas-sub">
                            <label for="eps">EPS
                            </label>
                            <select name="eps" id="eps" required>
                                <option>
                                </option>
                                <option>
                                    FAMISANAR
                                </option>
                                <option>
                                    SALUD TOTAL
                                </option>
                                <option>
                                    COMPENSAR
                                </option>
                                <option>
                                    CAPITAL SALUD
                                </option>
                                <option>
                                    SANITAS
                                </option>
                                <option>
                                    SISBEN
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="ventanas" id="ventanas_2">
                        <div class="ventanas-sub2">
                            <label for="apellido">Apellidos</label>
                            <input type="text" name="apellido" id="apellido" required>
                        </div>
                        <div class="ventanas-sub2">
                            <label for="numero_documento">Número de documento</label>
                            <input type="text" name="numero_documento" id="numero_documento" required>
                        </div>
                        <div class="ventanas-sub2">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" id="direccion" required>
                        </div>
                        
                        <div class="ventanas-sub2">
                            <label for="lugar_nacimiento" id="lab_lugar_nac">Lugar de Nacimiento</label>
                            <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" required>
                        </div>                     
                        <div class="ventanas-sub2">
                            <label for="rh">RH</label>
                            <input type="text" name="rh" id="rh" required>
                        </div>
                    </div>
                </div>
                <div class="container__ingdocente2-h5"><h5>INFORMACIÓN LABORAL</h5></div>
                <div class="container__ingdocente-sub-c">
                    <div class="ventanas2" id="ventanas2__1">
                        <div class="ventanas2__ubicacion">
                            <label for="titulo_profesional">Título profesional</label>
                            <input type="text" name="titulo_profesional" id="titulo_profesional" >
                        </div>
                        <div class="ventanas2__ubicacion">
                            <label for="jornada">Jornada</label>
                            <select name="jornada" id="jornada">
                                <option>
                                </option>
                                <option>Mañana</option>
                                <option>Tarde</option>
                                <option>Completa</option>
                            </select>
                        </div>
                    </div>
                    <div class="ventanas2" id="rolreduq">
                        <div class="ventanas2__ubicacion2"> 
                            <label for="rol">Rol</label>
                            <select name="rol" id="rol" required>
                                <option>
                                </option>
                                <option>
                                    Docente
                                </option>
                                <option>
                                    Directivo docente
                                </option>
                            </select>
                        </div>
                    </div>     
                </div>
                <div class="container__ingdocente2-u">Cursos asignados<small>(Seleccione una o más opciones)</small>:</div>
                <div class="container__ingdocente-sub-b">
                    <div class="tablas" id="parvulos">
                        <table border="1" class="bordertablas">
                            <tr>
                                <td class="bordertext">
                                    <strong>Párvulos</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext">
                                    <b>Párvulos 1</b><input type="checkbox" value="Párvulos" name="Párvulos">
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext">
                                    <b>Párvulos 2</b><input type="checkbox" value="Párvulos" name="Párvulos">
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext">
                                    <b>Párvulos 3</b><input type="checkbox" value="Párvulos" name="Párvulos">
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext__esp">
                                    <button type="button" name="add" class="addfilas">
                                        +
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="tablas" id="pre-jardin">
                        <table border="1" class="bordertablas" >
                            <tr>
                                <td class="bordertext">
                                    <strong>Pre-Jardín</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext">
                                    <b>Pre-Jardín 1</b><input type="checkbox" value="Párvulos" name="Párvulos">
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext">
                                    <b>Pre-Jardín 2</b><input type="checkbox" value="Párvulos" name="Párvulos">
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext">
                                    <b>Pre-Jardín 3</b><input type="checkbox" value="Párvulos" name="Párvulos">
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext__esp">
                                    <button type="button" name="add" class="addfilas">
                                        +
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="tablas" id="jardin">
                        <table border="1" class="bordertablas">
                            <tr>
                                <td class="bordertext">
                                    <strong>Jardín</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext">
                                    <b>Jardín 1</b><input type="checkbox" value="Párvulos" name="Párvulos">
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext">
                                    <b>Jardín 2</b><input type="checkbox" value="Párvulos" name="Párvulos">
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext">
                                    <b>Jardín 3</b><input type="checkbox" value="Párvulos" name="Párvulos">
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext__esp">
                                    <button type="button" name="add" class="addfilas">
                                        +
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="tablas" id="transicion">
                        <table border="1" class="bordertablas">
                            <tr>
                                <td class="bordertext" >
                                    <strong>Transición</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext">
                                    <b>Transición 1</b><input type="checkbox" value="Párvulos" name="Párvulos">
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext">
                                    <b>Transición 2</b><input type="checkbox" value="Párvulos" name="Párvulos">
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext">
                                    <b>Transición 3</b><input type="checkbox" value="Párvulos" name="Párvulos">
                                </td>
                            </tr>
                            <tr>
                                <td class="bordertext__esp">
                                    <button type="button" name="add" class="addfilas">
                                        +
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="container__ingdocente2-h5" id="infgar"><h5>INFORMACIÓN GARDENED</h5></div>
                <div class="container__ingdocente-sub-a">
                    <div class="ventanas3">
                        <div class="ventanas2__ubicacion">
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" id="usuario" disabled>
                        </div>
                        <div class="ventanas2__ubicacion">
                            <label for="password">Contraseña</label>
                             <input type="password" name="password" id="password" placeholder="Cree una contraseña inicial" required>
                        </div>
                    </div>
                    <div class="ventanas3">
                        <div class="ventanas2__ubicacion">
                            <label for="correoo">E-mail</label>
                            <input type="email" name="correoo" id="correoo" required>
                        </div>
                        <div class="ventanas2__ubicacion">
                            <label for="tutor">Tutor</label>
                             <input type="text" name="tutor" id="tutor">
                        </div>
                    </div>    
                </div>    
                <div class="separar">
                    <button type="submit" class="Button-save-AddStuden" onclick="save_EditarDirectivoDocente()"><img src="../Imagenes/Iconos-Menu-Docente/save.svg" alt="" style="margin-bottom: -3px; margin-right: 5px;" width="18px" ;>GUARDAR</button>
                    <button class="Button-cancel-AddStuden" onclick="btnCancel_EditarDirectivoDocente()"><img src="../Imagenes/Iconos-Menu-Docente/cancel.svg" alt="" style="margin-bottom: -3px; margin-right: 5px;" width="18px"; >CANCELAR</button>
                </div>
                <div class="footer-AddStudent addspace separar">
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