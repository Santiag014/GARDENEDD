//CONTENEDOR USUARIO INTERFAZ RESPONSIVE

const menuDespegableResponsive = document.getElementById('Abrir-Menu-Desplegable');
const divInterfaz = document.querySelector('.Usuario-interfaz');
const divInterfazChange = document.querySelector('.Usuario-interfaz-activa');
const imgUsuario = document.querySelector('.Logo-Institucion-Interfaz');
const BtnActualzarDatos = document.querySelector('.Botton-Act-Datos');
const ImgUsuarioInterfaz = document.querySelector('.Img-Usuario-Interfaz');
const navlink = document.querySelector('.Menu-Interfaz-Docente');
const list = document.querySelector('.list');
const mediaQuery = window.matchMedia('(max-width: 767px)');
const imgSlider = document.querySelector('.img-slider');


menuDespegableResponsive.addEventListener('click', function() {
    if(divInterfaz.classList.contains('Usuario-interfaz')){
        divInterfaz.classList.toggle('Usuario-interfaz-activa');
    }
    else{
        divInterfaz.classList.toggle('Usuario-interfaz');
    }
});

menuDespegableResponsive.addEventListener('click', () =>{
    
    if(divInterfaz.classList.contains('Usuario-interfaz-activa')){
        BtnActualzarDatos.style.display = 'flex';
        ImgUsuarioInterfaz.style.display = 'block';
        navlink.style.display = 'block';
        list.style.display = 'block'; 
        imgUsuario.style.opacity = '0%';
        imgSlider.style.opacity = '50%';
    }

    else {
        BtnActualzarDatos.style.display = 'none';
        ImgUsuarioInterfaz.style.display = 'none';
        navlink.style.display = 'none';
        list.style.display = 'none'; 
        imgUsuario.style.display = 'block';
        imgUsuario.style.opacity = '100%';
        imgSlider.style.opacity = '100%';

    }
});

// CAMBIO DE FOTO DE PERFIL

const cambiarFoto = document.querySelector('.boton-cambio-perfil-1');
const MostrarDiv = document.querySelector('.seleccion-foto');
const cerrarDiv = document.querySelector('.boton-cerrar-cambiar-foto');
const divCambiarFoto1 = document.querySelector(".cambiar-foto");

cambiarFoto.addEventListener('click', () =>{
    if( MostrarDiv.style.display = 'none'){

        MostrarDiv.style.display = 'block';   
        //divCambiarFoto1.style.display = "none";
    }

    else{
        MostrarDiv.style.display = 'none';
        //divCambiarFoto1.style.display = "block";
    }
});

cerrarDiv.addEventListener('click', () =>{
    MostrarDiv.style.display = 'none';

});

//AGREGAR CELDAS PAGINA OBSERVADOR MATRICULA (DOCENTE)

function openModal() {
    document.getElementById('myModal').style.display = 'block';
   }
     
   function closeModal() {
       document.getElementById('myModal').style.display = 'none';
   }
     
   function addRow() {
    const table = document.getElementById('myTable');
    const input1 = document.getElementById('inputData1').value;
    const input2 = document.getElementById('inputData2').value;
     
       if (input1 && input2) {
         const newRow = table.insertRow(-1);
         const cell1 = newRow.insertCell(0);
         const cell2 = newRow.insertCell(1);
     
         cell1.innerHTML = input1;
         cell2.innerHTML = input2;
     
         closeModal(); // Cerrar la ventana emergente
       } 
   
       else 
       {
         alert('Por favor, ingresa datos para ambas columnas.');
       }
   }

// DIV BTN SALIR

function btn_Salir(){

    const divAbsolute = document.querySelector('.Div-Cerrar-Seccion');
    const divActive = document.querySelector('.Div-Cerrar-Seccion-active');
    const btn1 = document.getElementById('btnSi');
    const btn2 = document.getElementById('btnNo');

    if(divAbsolute.classList.contains('Div-Cerrar-Seccion')){
        divAbsolute.classList.remove('Div-Cerrar-Seccion');
        divAbsolute.classList.add('Div-Cerrar-Seccion-active')
    }

    else{
        divAbsolute.classList.contains('Div-Cerrar-Seccion');
    }

    btn1.addEventListener('click', ()=>{
        window.location.href = 'file:///c%3A/Users/SANTIAGO/Documents/GitHub/GARDENEDD/Index.php'
    });

    btn2.addEventListener('click', ()=>{
        window.location.href = '../Docente/Interfaz_Docente.php';
    });
    
}
