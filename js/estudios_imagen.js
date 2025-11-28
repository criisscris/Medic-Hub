const input = document.getElementById("file-upload");
const preview = document.getElementById("preview");
const LIMITE = 4;

// ✅ Función para validar cantidad de archivos
function validarCantidad(files) {
  if (files.length > LIMITE) {
    alert("Solo puedes subir un máximo de 4 archivos.");
    input.value = ""; 
    preview.innerHTML = "";
    return false;
  }
  return true;
}

// ✅ Función para crear contenedor de imagen o archivo
function crearContenedorArchivo(file, src) {
  const container = document.createElement("div");
  container.classList.add("img-container");

  if (file.type.startsWith("image/")) {
    // ✅ Si es imagen, mostrar preview
    const img = document.createElement("img");
    img.src = src;
    container.appendChild(img);
  } else {
    // ✅ Si es PDF o Word, mostrar enlace
    const link = document.createElement("a");
    link.href = src;
    link.textContent = file.name;
    link.target = "_blank";
    container.appendChild(link);
  }

  const btn = document.createElement("button");
  btn.textContent = "X";
  btn.classList.add("delete-btn");
  btn.addEventListener("click", () => container.remove());

  container.appendChild(btn);
  return container;
}

// ✅ Función para mostrar preview
function mostrarPreview(files) {
  if (!validarCantidad(files)) return;

  let actuales = preview.querySelectorAll(".img-container").length;

  [...files].forEach(file => {
    if (actuales >= LIMITE) {
      alert("Solo puedes subir un máximo de 4 archivos.");
      return;
    }

    const reader = new FileReader();
    reader.onload = e => {
      const contenedor = crearContenedorArchivo(file, e.target.result);
      preview.appendChild(contenedor);
    };

    // Para imágenes y también PDF/Word (se mostrarán como enlace)
    reader.readAsDataURL(file);

    actuales++;
  });
}

// ✅ Evento principal
input.addEventListener("change", () => {
  mostrarPreview(input.files);
  input.value = ""; // limpia el input para poder volver a seleccionar
});

//para tomar en automatico la fecha
 const hoy = new Date();

// Obtener partes de la fecha local
const year = hoy.getFullYear();
const month = String(hoy.getMonth() + 1).padStart(2, '0'); // meses empiezan en 0
const day = String(hoy.getDate()).padStart(2, '0');

// Formato YYYY-MM-DD
const fechaFormateada = `${year}-${month}-${day}`;

// Asignar al input
document.getElementById("txtFecha").value = fechaFormateada;

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