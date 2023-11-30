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
                <img src="../Imagenes/logo_san_angel.png" alt="" class="Logo-Institucion-Interfaz" >
            </div>
            <div class="Nombre-Institucion">
                <h3>GIMNASIO PSICOPEDAGÓGICO SAN ANGEL</h3>
            </div>
            <div class="button">
                <button class="Button-Salir-Interfaz" onclick="btn_Salir()" >SALIR</button>
            </div>
        </div>

        <div class="Contenido-interfaz">
            <div class="Container-Observar-rgistro-directivo">
                
                <div class="h3-observar-registro-directivo">
                    <h3>MATRÍCULA USUARIO</h3>
                </div>
                
                <div class="h4-observar-registro-directivo1">
                    <h4>INFORMACIÓN DEL ESTUDIANTE</h4>
                </div>

                <div class="Container-InfoUsuario">
                    
                    <div class="foto-InfoUsuario">
                        <img src="../Imagenes/img-usuario.png" alt="" class="Img-Obs-Est-">
                    </div>

                    <div class="Container-divs-infoUsuario">

                            <div class="InfoUsuario">
                              <h5>NOMBRES:</h5>
                              <p>Xxxxx Xxxxx</p>
                            </div>

                            <div class="InfoUsuario">
                                <h5>APELLIDOS:</h5>
                                <p>Xxxxx Xxxxx</p>
                            </div>
                              <div class="InfoUsuario">
                                <h5>TIPO DE DOCUMENTO:</h5>
                                <p>Xxxxx Xxxxx</p>
                            </div>

                            <div class="InfoUsuario">
                                <h5>NÚMERO DE DOCUMENTO:</h5>
                                <p>Xxxxx Xxxxx</p>
                            </div>

                            <div class="InfoUsuario">
                                <h5>TELÉFONO:</h5>
                                <p>Xxxxx Xxxxx</p>
                            </div>
          
                            <div class="InfoUsuario">
                               <h5>BARRIO:</h5>
                               <p>Xxxxx Xxxxx</p>
                            </div>

                            <div class="InfoUsuario">
                               <h5>DRECCIÓN:</h5>
                               <p>Xxxxx Xxxxx</p>
                            </div>

                            <div class="InfoUsuario">
                                <h5>LUGAR DE NACIMIENTO :</h5>
                                <p>Xxxxx Xxxxx</p>
                            </div>

                            <div class="InfoUsuario">
                                <h5>FECHA DE NACIMIENTO:</h5>
                                <p>Xxxxx Xxxxx</p>
                            </div>

                            <div class="InfoUsuario">
                                <h5>RH:</h5>
                                <p>Xxxxx Xxxxx</p>
                            </div>

                            <div class="InfoUsuario">
                                <h5>EPS:</h5>
                                <p>Xxxxx Xxxxx</p>
                            </div>
                    </div>

                </div>

                <div class="h4-observar-registro-directivo2">
                    <h4>INFORMACIÓN ACADÉMICA</h4>
                </div>

                <div class="Container-divs-infoUsuario-Laboral">
                    <div class="InfoUsuario1">
                        <h5>FECHA DE MATRÍCULA:</h5>
                        <p>XX/XX/XXXX</p>
                    </div>
                    <div class="InfoUsuario1">
                        <h5>ESTADO DE MATRÍCULA:</h5>
                        <p>Xxxxxxxx</p>
                    </div>
  
                    <div class="InfoUsuario1">
                        <h5>JORNADA:</h5>
                        <p>Xxxxxxx</p>
                    </div>
  
                    <div class="InfoUsuario1">
                        <h5>GRADO:</h5>
                        <p>Xxxxx Xxxxx</p>
                    </div>

                    <div class="InfoUsuario1">
                        <h5>CURSO:</h5>
                        <p>Xxxx</p>
                    </div>
                </div>
                
                <div class="h4-observar-registro-directivo2">
                    <h4>INFORMACIÓN DE ACUDIENTE</h4>
                </div>

                <div class="Container-divs-infoUsuario-Gardened">
                    <div class="InfoUsuario1">
                        <h5>NOMBRES:</h5>
                        <p>Xxxxx Xxxxx</p>
                     </div>
  
                       <div class="InfoUsuario1">
                          <h5>APELLIDOS:</h5>
                          <p>Xxxxxx Xxxxxx</p>
                      </div>
  
                      <div class="InfoUsuario1">
                          <h5>NÚMERO DE DOCUMENTO:</h5>
                          <p>XX</p>
                      </div>

                      <div class="InfoUsuario1">
                        <h5>TELÉFONO:</h5>
                        <p>XXXXXXXXXXX</p>
                    </div>

                    <div class="InfoUsuario1">
                        <h5>DIRECCIÓN:</h5>
                        <p>Xxxxxx Xxxxx Xxxx</p>
                    </div>

                    <div class="InfoUsuario1">
                        <h5>BARRIO:</h5>
                        <p>Xxxxx</p>
                    </div>

                    <div class="InfoUsuario1">
                        <h5>E-MAIL:</h5>
                        <p>xxxxxxxxxxxxxxxxxxxx</p>
                    </div>
                    <div class="InfoUsuario1">
                        <h5>PROFESIÓN:</h5>
                        <p>Xxxxxxx </p>
                    </div>

                    <div class="InfoUsuario1">
                        <h5>EMPRESA:</h5>
                        <p>Xxxxxxx</p>
                    </div>

                    <div class="InfoUsuario1">
                        <h5>CARGO:</h5>
                        <p>Xxxxxxx</p>
                    </div>

                    <div class="InfoUsuario1">
                        <h5>TELÉFONO DE EMPRESA:</h5>
                        <p>XXXXXXXXXX</p>
                    </div>

                </div>

                <div class="TableObservaciones-Obs-Est">
                    <table id="myTable" border="1">
                        <thead>
                            <tr>
                                <th>FECHA</th>
                                <th>OBSERVACIÓN</th>
                              </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                </td>
                              </tr>
                        </tbody>
                      </table>

                    <div class="btn-Observar-Matricula">
                        <button class="saveChangesTable" onclick="saveChangesTable()">GUARDAR</button>
                        <button class="Ingresar_Obs" onclick="openModal()" >INGRESAR OBSERVACIÓN</button>
                    </div>
                </div>

                <div class="Agg-Fila" id="myModal">
                    <div class="Agg-Fila-Content">
                        <span class="close" onclick="closeModal()">&times;</span>
                        <h3>AGREGAR NUEVA OBSERVACIÓN</h3>
                        <input type="date" id="inputData1" placeholder="Dato para Columna 1">
                        <input type="text" id="inputData2" placeholder="Ingrese la Observación">
                        <button onclick="addRow()" class="add-table">AGREGAR</button>
                      </div>
                </div>

                <div class="btn-back">
                    <button class="Regresar-ObservadorMatricula" onclick="toPage()"><img src="../Imagenes/Iconos-Menu-Docente/back.svg" alt="" width="10px" height="10px">REGRESAR</button>
                </div>


               <div class="footer-Observador-Matricula-Directivo">
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
<script src="JS-DIRECTIVO/Validacion.js"></script>
    
</body>
</html>