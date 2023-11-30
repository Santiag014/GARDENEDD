
//REDIRECCIONAMIENTO BOTONES PAGINA ACTUALIZACION DE DATOS DOCENTE

var btnCambiarContraseña_ACTDD = document.getElementById('Cambiar-Contraseña-ActDatos');
var btnModificarFto_ACTDD = document.querySelector('.Cambiar-FotoPerfil-ActDatos');
var btnRegresar_ACTDD = document.querySelector('.Regresar-ActDatos');

btnCambiarContraseña_ACTDD.addEventListener('click', ()=>{
    window.location.href = '../Docente/Cambiar_Contraseña.php'
});

btnModificarFto_ACTDD.addEventListener('click', ()=>{
    window.location.href = '../Docente/Cambio_Foto.php'
});

btnRegresar_ACTDD.addEventListener('click', ()=>{
    window.location.href = '../Docente/Interfaz_Docente.php'
});

//REDIRECCIONAMIENTO BOTONES PAGINA ACTUALIZACION CONTRASEÑA

var btnRegresarCamContraDocente = document.querySelector('.Regresar_Buttom_Contraseña');
var btnConfirmarCamContraDocente = document.querySelector('.Confirmar_Buttom_Contraseña');

btnRegresarCamContraDocente.addEventListener('click', ()=> {
    window.location.href = '../Docente/Actualizar_Datos.php'
});

btnCambiarContraseña_ACTDD.addEventListener('click', ()=> {
    window.location.href = '../Docente/Actualizar_Datos.php'
});


// REDIRECCIONAMIENTO BOTONES PAGINA REPORTE ASISTENCIA
var btnReporteAsistenciaSave = document.getElementById('guardar-reporte');
var btnReporteCalificacionesBack = document.getElementById  ('regresar-reporte');

btnReporteCalificacionesBack.addEventListener('click', ()=>{
    window.location.href= ''
});


// INTERFAZ DOCENTE

function ActualizarDatos(){
    window.location.href = '../Docente/Actualizar_Datos.php';
};

//ACTUALIZAR DATOS

function CambiarContraseña(){
    window.location.href = '../Docente/Cambiar_Contraseña.php';
}

function CambiarFotoPerfil(){
    window.location.href = '../Docente/Cambio_Foto';
}

function Back_ActualizarDatos(){
    window.location.href = '../Docente/Interfaz_Docente';
}

//CAMBIAR CONTRASEÑA 

function back_CambiarContraseña(){
    window.location.href = '../Docente/Actualizar_Datos.php';
}

function savechanges_CambiarContraseña(){

}

//CAMBIO DE FOTO DE PERFIL

function eliminarFoto(){
    alert("Su foto se ha eliminado exitosamente")
}

function backCambiarFoto(){
    window.location.href = '../Docente/Actualizar_Datos.php';
}


// OBSERVADOR ESTUDIANTE

function backObservarEstudiante(){
    window.location.href = '../Docente/Observador_Estudiante.php';
}

function saveChangesTable(){
    alert("Se Guardaron los Cambios Correctamente")
}

//REPORTE ASISTENCIA

function backReporteAsistencia(){
    window.location.href = '../Docente/Planilla_Asistencia.php';
}

function saveDatosReporteAsistencia(){

}
