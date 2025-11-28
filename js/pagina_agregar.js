const input = document.getElementById("file-upload");
const preview = document.getElementById("preview");
const LIMITE = 4;

// ✅ Función para validar cantidad de imágenes
function validarCantidad(files) {
  if (files.length > 4) {
    alert("Solo puedes subir un máximo de 4 imágenes.");
    input.value = ""; 
    preview.innerHTML = "";
    return false;
  }
  return true;
}

// ✅ Función para crear contenedor de imagen con botón eliminar
function crearContenedorImagen(src) {
  const container = document.createElement("div");
  container.classList.add("img-container");

  const img = document.createElement("img");
  img.src = src;

  const btn = document.createElement("button");
  btn.textContent = "X";
  btn.classList.add("delete-btn");

  btn.addEventListener("click", () => {
    container.remove();
  });

  container.appendChild(img);
  container.appendChild(btn);
  return container;
}

// ✅ Función para mostrar preview
function mostrarPreview(files) {
 // Contar cuántas imágenes ya hay en el preview
  let actuales = preview.querySelectorAll(".img-container").length;

  [...files].forEach(file => {
    if (actuales >= LIMITE) {
      alert("Solo puedes subir un máximo de 4 imágenes.");
      return; // no agrega más
    }

    const reader = new FileReader();
    reader.onload = e => {
      const contenedor = crearContenedorImagen(e.target.result);
      preview.appendChild(contenedor);
    };
    reader.readAsDataURL(file);

    actuales++; // aumentar contador
  });
}

// ✅ Evento principal
input.addEventListener("change", () => {
  mostrarPreview(input.files);
  input.value = ""; // limpia el input para poder volver a seleccionar
});
