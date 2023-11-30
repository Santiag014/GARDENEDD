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
                <button class="Button-Salir-Interfaz">SALIR</button>
            </div>
        </div>

        <div class="Contenido-interfaz">
            <div class="contenedor-text">
                <b class="title">Registro de calificaciones:</b>
            </div>
            
            <div class="contenedor-int" id="interno">
                <div class="contenedor-textabla">
                    <div class="contenedor-textabla__curso">
                        <strong>Curso:</strong>
                    </div>
                    <div class="contenedor-textabla__periodo">
                        <strong>Periodo:</strong>
                    </div>     
                </div>
                <div class="contenedor-tabla">
                    <table border="1" id="registro_calif" class="table bordertablas">
                        <thead>
                            <tr class="color">
                                <td></td>
                                <td class="textosecundario"><b>SABER</b></td>
                                <td class="textosecundario"><b>HACER</b></td>
                                <td class="textosecundario"><b>SER</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="textoterciario alineacion"><strong>ESTUDIANTE</strong></th>
                                <td>
                                    <table border="1" class="subtables">
                                        <tr>
                                            <td class="celdas">
                                                <input type="button" value="1" class="borderbotons textoterciario">
                                                <img src="../Imagenes/Iconos-Menu-Docente/seleccion.png" width="10px" height="10px" class="seleccion" id="saber1"> 
                                            </td>
                                            <td class="celdas">
                                                <input type="button" value="2" class="borderbotons textoterciario">
                                                <img src="../Imagenes/Iconos-Menu-Docente/seleccion.png" width="10px" height="10px" class="seleccion" id="saber2"> 
                                            </td>
                                            <td class="celdas">
                                                <input type="button" value="3" class="borderbotons textoterciario">
                                                <img src="../Imagenes/Iconos-Menu-Docente/seleccion.png" width="10px" height="10px" class="seleccion" id="saber3"> 
                                            </td>
                                        </tr>
                                    </table>                                                        
                                </td>
                                <td>
                                    <table border="1" class="subtables">
                                        <tr>
                                            <td class="celdas" >
                                                <input type="button" value="1" class="borderbotons textoterciario">
                                                <img src="../Imagenes/Iconos-Menu-Docente/seleccion.png" width="10px" height="10px" class="seleccion" id="hacer1"> 
                                            </td>
                                            <td class="celdas">
                                                <input type="button" value="2" class="borderbotons textoterciario">
                                                <img src="../Imagenes/Iconos-Menu-Docente/seleccion.png" width="10px" height="10px" class="seleccion" id="hacer2"> 
                                            </td>
                                            <td class="celdas">
                                                <input type="button" value="3" class="borderbotons textoterciario">
                                                <img src="../Imagenes/Iconos-Menu-Docente/seleccion.png" width="10px" height="10px" class="seleccion" id="hacer3"> 
                                            </td>
                                        </tr>
                                    </table>                                                  
                                </td>
                                <td>
                                    <table border="1" class="subtables">
                                        <tr>
                                            <td class="celdas">
                                                <input type="button" value="1" class="borderbotons textoterciario">
                                                <img src="../Imagenes/Iconos-Menu-Docente/seleccion.png" width="10px" height="10px" class="seleccion" id="ser1"> 
                                            </td>
                                            <td class="celdas">
                                                <input type="button" value="2" class="borderbotons textoterciario">
                                                <img src="../Imagenes/Iconos-Menu-Docente/seleccion.png" width="10px" height="10px" class="seleccion" id="ser2"> 
                                            </td>
                                        </tr>
                                    </table>                                                 
                                </td>
                            </tr>
                            <tr>
                                <td class="textocuaternario">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</td>
                                <td>
                                    <table border="1" class="subtables">
                                        <tr>
                                            <td>
                                                <select name="saber1estudiante1" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="saber2estudiante1" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="saber3estudiante1" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>                                                 
                                </td>
                                <td>
                                    <table border="1" class="subtables">
                                        <tr>
                                            <td>
                                                <select name="hacer1estudiante1" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="hacer2estudiante1" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="hacer3estudiante1" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>                                                 
                                </td>
                                <td>
                                    <table border="1" class="subtables">
                                        <tr>
                                            <td>
                                                <select name="ser1estudiante1" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="ser2estudiante1" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>                                                 
                                </td>
                            </tr>
                            <tr>
                                <td class="textocuaternario">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</td>
                                <td>
                                    <table border="1" class="subtables">
                                        <tr>
                                            <td>
                                                <select name="saber1estudiante2" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="saber2estudiante2" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="saber3estudiante2" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>                                                
                                </td>
                                <td>
                                    <table border="1" class="subtables">
                                        <tr>
                                            <td>
                                                <select name="hacer1estudiante2" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="hacer2estudiante2" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="hacer3estudiante2" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>                                                 
                                </td>
                                <td>
                                    <table border="1" class="subtables">
                                        <tr>
                                            <td>
                                                <select name="ser1estudiante2" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="ser2estudiante2" class="borderbotons textoterciario">
                                                    <option value="SINSELECCION"></option>
                                                    <option value="APROBADO">AP</option>
                                                    <option value="PENDIENTE">PD</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>                                                
                                </td>
                            </tr>
                        </tbody>
                </table>
                </div>  
                <div class="botones">
                    <div class="botones__retorno">
                        <button type="button" name="botonregresar" class="retorno">
                            <img src="../Imagenes/Iconos-Menu-Docente/retornar.png" alt="Imágenes" width="20" height="20" class="retorno">
                        </button>
                        <a href="Curso1_Gestion_Directivo.php" class="botones__retorno-regreso">REGRESAR</a>
                    </div>
                    <div class="botones__guardar">
                        <button type="submit" value="REGISTRAR" class="registro">
                            <a href="Emergente_Registro_Calificaciones.php" class="lemerge">REGISTRAR</a>
                        </button>   
                    </div>
                </div>
                <div class="emergente_interno" id="emergente">
                    <b>NOMBRE DE LA ACTIVIDAD</b>
                    <input type="text" name="nom_actividad" class="form_actividad">
                    <b class="alineacion form_actividad">Descripción:</b>
                    <textarea class="form_actividad" rows="4" placeholder="Haga una breve descripción de la actividad"></textarea>
                    <button type="submit" id="boton_actividad" class="registro">GUARDAR</button>
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
    <script src="JS-DIRECTIVO/Script.js"></script>


</body>
</html>