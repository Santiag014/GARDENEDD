
function ValidarObservacion(){
    const inputObservacionesRepAsistencia = document.getElementById('input_Observaciones_ReporteAsistencia');

    if(inputObservacionesRepAsistencia === ""){
        alert("Este Campo No Puede Estar Vacio")
    }

    else(
        alert("El valor ingresado es: " + valorInput)
    )
}

//VALIDACION ACTUALIZAR DATOS


function ValidacionGuardarDatos_ActDatospag(){

    const nombre_ActDatos = document.getElementById('Nombre-');
    const apellido_ActDatos = document.getElementById('Apellido-');
    const doc_ActDatos = document.getElementById('NumeroDoc-');
    const typeDoc_ActDatos = document.getElementById('TipoDoc-');
    const fecha_ActDatos = document.getElementById('FechaNac-');
    const lugarNac_ActDatos = document.getElementById('LugarNac-');
    const direccion_ActDatos = document.getElementById('Direccion-');
    const barrio_ActDatos = document.getElementById('Barrio-');
    const telefono_ActDatos = document.getElementById('Telefono-')
    const typeSangre_ActDatos = document.getElementById('TipoSangre-');
    const rH_ActDatos = document.getElementById('RH-');
    const profesion_ActDatos = document.getElementById('TituloProf-');
    const fechaIngreso_ActDatos = document.getElementById('FechaIng-');
    const jornada_ActDatos = document.getElementById('Jornada-');
    const Eps_ActDatos = document.getElementById('Eps-');


    const nombre = nombre_ActDatos.value.trim();
    const apellido = apellido_ActDatos.value.trim();
    const nroDoc = doc_ActDatos.value.trim();
    const tipo = typeDoc_ActDatos.value.trim();
    const fechaNacimiento = fecha_ActDatos.value.trim();
    const lugarNac = lugarNac_ActDatos.value.trim();
    const direccion = direccion_ActDatos.value.trim();
    const barrio = barrio_ActDatos.value.trim();
    const telefono = telefono_ActDatos.value.trim();
    const typesangre = typeSangre_ActDatos.value.trim();
    const rh = rH_ActDatos.value.trim();
    const profesion = profesion_ActDatos.value.trim();
    const ingreso = fechaIngreso_ActDatos.value.trim();
    const jornada = jornada_ActDatos.value.trim();
    const EpsAct = Eps_ActDatos.value.trim();

    let errores = '';

    if (nombre === ''){
        errores += 'Por Favor Ingresa tu Nombre.\n'
        nombre_ActDatos.style.borderColor = 'red'
    }

    if (apellido === ''){
        errores += 'Por Favor Ingresa tu Apellido.\n'
        apellido_ActDatos.style.borderColor = 'red'
    }

    if (nroDoc === ''){
        errores += 'Por Favor Ingresa tu Numero de Documento.\n'
        doc_ActDatos.style.borderColor = 'red'
    }

    if (tipo === ''){
        errores += 'Por Favor Ingresa tu Tipo de Documento.\n'
        typeDoc_ActDatos.style.borderColor = 'red'
    }

    if (fechaNacimiento === ''){
        errores += 'Por Favor Ingresa tu fecha de Nacimiento.\n'
        fecha_ActDatos.style.borderColor = 'red'
    }

    if (lugarNac === ''){
        errores += 'Por Favor Ingresa tu lugar de Nacimiento.\n'
        lugarNac_ActDatos.style.borderColor = 'red'
    }
    if (direccion === ''){
        errores += 'Por Favor Ingresa tu Direccion.\n'
        direccion_ActDatos.style.borderColor = 'red'
    }
    if (barrio === ''){
        errores += 'Por Favor Ingresa tu Barrio.\n'
        barrio_ActDatos.style.borderColor = 'red'
    }

    if (telefono === ''){
        errores += 'Por Favor Ingresa tu Telefono.\n'
        telefono_ActDatos .style.borderColor = 'red'
    }

    if (typesangre === ''){
        errores += 'Por Favor Ingresa tu Tipo de Sangre.\n'
        typeSangre_ActDatos.style.borderColor = 'red'
    }

    if (rh === ''){
        errores += 'Por Favor Ingresa tu RH.\n'
        rH_ActDatos.style.borderColor = 'red'
    }

    if (profesion === ''){
        errores += 'Por Favor Ingresa tu Título Profesional.\n'
        profesion_ActDatos.style.borderColor = 'red'
    }

    if (ingreso === ''){
        errores += 'Por Favor Ingresa tu Fecha de Ingreso.\n'
        fechaIngreso_ActDatos.style.borderColor = 'red'
    }

    if (jornada === ''){
        errores += 'Por Favor Ingresa tu Jornada.\n'
        jornada_ActDatos.style.borderColor = 'red'
    }

    if (EpsAct === ''){
        errores += 'Por Favor Ingresa tu Jornada.\n'
        Eps_ActDatos.style.borderColor = 'red'
    }


    
    if(errores !== ''){
        alert(errores);
    }

    else{
        alert("Datos Guardados con Éxito");
    }

}

 // VALIDACION CAMBIO DE CONTRASEÑA

 
function redireccionar_ConfirmarContraseña(){

    const ContraseñaActua = document.getElementById('ContraActual-');
    const ContraseñaNew = document.getElementById('ContraNew-');
    const confirmarContra = document.getElementById('ConfirmarContra-');

    const CActual = ContraseñaActua.value.trim();
    const CNew = ContraseñaNew.value.trim();
    const ConfirmC = confirmarContra.value.trim();

    let errores = '';

    if (CActual === ''){
        errores += 'Por Favor Ingresa una la Contraseña Actual.\n'
        ContraseñaActua.style.borderColor = 'red'
    }

    if (CNew === ''){
        errores += 'Por Favor Ingresa una Nueva Contraseña.\n'
        ContraseñaNew.style.borderColor = 'red'
    }

    if(ConfirmC === ''){
        errores += 'Por Favor Confirme la Contraseña Nueva.\n'
        confirmarContra.style.borderColor = 'red'
    }

    if(errores !== ''){
        alert(errores);
    }

    else{
        alert("Contraseña Cambiada con Éxito");
    }
}

//VALIDACION REPORTE ASISTENCIA

function saveDatosReporteAsistencia(){

    const ValidacionRA = document.getElementById('valoracion-registroEs');

    const validacionR = ValidacionRA.value.trim();
  
    let errores = '';
    
    if(validacionR === ''){
        errores += 'Por Favor Confirme la Contraseña Nueva.\n'
        ValidacionRA.style.borderColor = 'red'
    }

    if(errores !== ''){
        alert(errores);
    }

    else{
        alert("Contraseña Cambiada con Éxito");
    }  
}