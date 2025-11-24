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
//media, pruebas
function toggleMenu() {
  document.getElementById("menu").classList.toggle("show");
}
