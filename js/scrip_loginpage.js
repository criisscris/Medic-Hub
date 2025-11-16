const container = document.querySelector(".container");
const btnIniciar_sesion = document.getElementById("btnIniciar_sesion");
const btnRegistrarse = document.getElementById("btnRegistrarse");


btnRegistrarse.addEventListener("click",()=>{
container.classList.remove("toggle");
});

btnIniciar_sesion.addEventListener("click",()=>{
container.classList.add("toggle");
});


