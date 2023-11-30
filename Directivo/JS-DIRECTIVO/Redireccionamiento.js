
//INTERFAZ DOCENTE

function redireccionarIntefazDirectivo(){
    window.location.href = '../Directivo/Actualizar_Datos_Directivo.php';
}

//ACTUALIZAR DATOS

function redireccionarCambiarContraseña(){
    window.location.href = '../Directivo/Cambiar_Contraseña_Directivo.php';
}

function redireccionarCambiarFoto(){
    window.location.href = '../Directivo/Cambio_Foto_Directivo.php';
}

function redireccionarRegresar_Pag_ActualizarDatos(){
    window.location.href = '../Directivo/Interfaz_Directivo.php';
}


//CAMBIAR CONTRASEÑA

function redireccionar_Regresar_CambiarContraseña(){
    window.location.href = '../Directivo/Actualizar_Datos_Directivo.php';
}



//CAMBIO DE FOTO DE PERFIL

function EliminarFoto_PagCambiarFoto(){
    alert("Su Foto Ha Sido Eliminada");
}

function redireccionarRegresar_PagCambiarFoto(){
    window.location.href = '../Directivo/Actualizar_Datos_Directivo.php';
}

//INGRESAR ESTUDIANTE DIRECTIVO

function redireccionarCancel_AddStudentPage(){
    window.location.href = '../Directivo/Registro_Matricula_Directivo.php';
}


// OBSERVAR REGISTRO MATRICULA DIRECTIVO

function btn_back_ObservarRegistro (){
    window.location.href = '../Directivo/Seleccion_Curso_Directivo.php';
}

//SELECCION DE CURSO DIRECTIVO

function btn_back_SeleccionCurso(){
    window.location.href = '../Directivo/GestionEstudinate_Cursos_Directivo.php';
}

// EDITAR REGISTRO MATRICULA DIRECTIVO

function btnBack_EditarRegistroMatricula(){
    window.location.href = '../Directivo/Seleccion_Curso_Directivo.php';
}

function BtnEliminar_EditarRegistroMatricula() {
    alert("El Registro Ha Sido Eliminado Exitosamente")
}

//REPORTE ASISTENCIA 

function redireccionamientoBack_ReporteAsistencia (){
    window.location.href = '../Directivo/Planilla_Asistencia_Directivo.php';
}

//REPORTE CALIFICACIONES

function redireccionamientoBack_ReporteCalificaciones(){
    window.location.href = '../Directivo/Planilla_Asistencia_Directivo.php'
}

//OBSERVAR MATRICULA DIRECTIVO

function saveChangesTable(){
    alert("Sus Cambio se han Guardado Corecctamente")

}
function toPage(){
    window.location.href = '../Directivo/Observador_Estudiante_Directivo.php';
}

//GESTIONAR TABLA DIRECTIVO DIRECTIVO

function backTableDirectivoDirectivo(){
    window.location.href = '../Directivo/Gestionar_Usuarios_Directivo.php';
}

// OBSERVAR DIRECTIVO DIRECTIVO

function backObservarDirectivoDirectivo(){
    window.location.href = '../Directivo/Gestionar_Table_Directivo_Directivo.php';
}

//INGRESAR DOCENTE DIRECTIVO

function save_IngresarDocenteDirectivo(){
    alert("los Datos se Han Guardado con Exíto")
}

function btnCancel_IngresarDocenteDirectivo(){
    window.location.href = '../Directivo/Registro_Docente_Directivo.php';
}

//EDITAR DIRECTIVO DOCENTE 

function save_EditarDirectivoDocente(){
    alert("los Datos se Han Guardado con Exíto")
}

function btnCancel_EditarDirectivoDocente(){
    window.location.href = '../Directivo/Gestionar_Table_Directivo_Directivo.php';
}
