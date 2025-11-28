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

//pal Css
function toggleMenu() {
  const menu = document.getElementById("menu");
  const overlay = document.getElementById("menu-overlay");

  menu.classList.toggle("show");

  if (menu.classList.contains("show")) {
    overlay.style.display = "block";
  } else {
    overlay.style.display = "none";
  }
}

document.getElementById("menu-overlay").onclick = () => {
  document.getElementById("menu").classList.remove("show");
  document.getElementById("menu-overlay").style.display = "none";
};