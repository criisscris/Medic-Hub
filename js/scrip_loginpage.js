const container = document.querySelector('.container');
const btnRegistrarse = document.querySelector('.registro-btn');
const btnIniciar_sesion = document.querySelector('.inicio-btn');



btnRegistrarse.addEventListener("click",()=>{
container.classList.add("activado");
});

btnIniciar_sesion.addEventListener("click",()=>{
container.classList.remove("activado");
});


