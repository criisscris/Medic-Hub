function imagenLogo(){
const divImagen=document.querySelector('#imagen')
const img=document.createElement('img')
divImagen.innerHTML = ""; 

img.src="img/logo_medic.jpg";
img.alt="logo de mysql";
img.width=250;
img.height=200;
divImagen.appendChild(img);
}

//funcion para que se vea y deje de ver la carta del perfil
const btnToggle = document.getElementById("togglePerfil");
const perfil = document.querySelector(".carta-perfil")

btnToggle.addEventListener("click", () => {
  perfil.style.display = (perfil.style.display === "none" || perfil.style.display === "") ? "block" : "none";
});

//funcion para cerrar la sesion
document.addEventListener("DOMContentLoaded", () => {
  const btnCerrar = document.getElementById("BTNcerrar_sesion");

  if (btnCerrar) {
    btnCerrar.addEventListener("click", () => {
      window.location.href = "cerrar_sesion.php"; // redirige al archivo que destruye la sesión
    });
  }
});