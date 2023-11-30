
const saber1 = document.getElementById("saber1");
const saber2 = document.getElementById("saber2");
const saber3 = document.getElementById("saber3");
const hacer1 = document.getElementById("hacer1");
const hacer2 = document.getElementById("hacer2");
const hacer3 = document.getElementById("hacer3");
const ser1 = document.getElementById("ser1");
const ser2 = document.getElementById("ser2");
const emergente = document.getElementById("emergente");
const boton_actividad = document.getElementById("boton_actividad");
const interno = document.getElementById("interno");

saber1.addEventListener("click", ()=>{
    emergente.style.display = "flex";
});
saber2.addEventListener("click", ()=>{
    emergente.style.display = "flex";
});
saber3.addEventListener("click", ()=>{
    emergente.style.display = "flex";
});
hacer1.addEventListener("click", ()=>{
    emergente.style.display = "flex";
});
hacer2.addEventListener("click", ()=>{
    emergente.style.display = "flex";
});
hacer3.addEventListener("click", ()=>{
    emergente.style.display = "flex";
});
ser1.addEventListener("click", ()=>{
    emergente.style.display = "flex";
});
ser2.addEventListener("click", ()=>{
    emergente.style.display = "flex";
});
boton_actividad.addEventListener("click", ()=>{
    emergente.style.display = "none";
});

