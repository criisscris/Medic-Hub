const input = document.getElementById("file-upload");
const preview = document.getElementById("preview");
const LIMITE = 4;

// ✅ Función para validar cantidad de imágenes
function validarCantidad(files) {
  const imagenes = [...files].filter(f => f.type.startsWith("image/"));
  if (imagenes.length > LIMITE) {
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

// ✅ Función para crear contenedor de archivo PDF/Word
function crearContenedorArchivo(file) {
  const container = document.createElement("div");
  container.classList.add("file-box");

  const icon = document.createElement("span");
  icon.classList.add("file-icon");

  if (file.name.toLowerCase().endsWith(".pdf")) {
    icon.classList.add("file-pdf");
    icon.textContent = "📄"; // Ícono PDF
  } else {
    icon.classList.add("file-word");
    icon.textContent = "📝"; // Ícono Word
  }

  const name = document.createElement("span");
  name.classList.add("file-name");
  name.textContent = file.name;

  const btn = document.createElement("button");
  btn.textContent = "X";
  btn.classList.add("delete-btn");
  btn.addEventListener("click", () => {
    container.remove();
  });

  // 👉 Hacer clic en el contenedor abre el archivo
  const fileURL = URL.createObjectURL(file);
  container.addEventListener("click", (e) => {
    // Evitar que el botón eliminar dispare el evento
    if (e.target !== btn) {
      window.open(fileURL, "_blank");
    }
  });

  container.appendChild(icon);
  container.appendChild(name);
  container.appendChild(btn);
  return container;
}

// ✅ Función para mostrar preview
function mostrarPreview(files) {
  let actuales = preview.querySelectorAll(".img-container").length;

  [...files].forEach(file => {
    if (file.type.startsWith("image/")) {
      // Validar límite de imágenes
      if (actuales >= LIMITE) {
        alert("Solo puedes subir un máximo de 4 imágenes.");
        return;
      }

      const reader = new FileReader();
      reader.onload = e => {
        const contenedor = crearContenedorImagen(e.target.result);
        preview.appendChild(contenedor);
      };
      reader.readAsDataURL(file);

      actuales++;
    } else if (
      file.name.toLowerCase().endsWith(".pdf") ||
      file.name.toLowerCase().endsWith(".doc") ||
      file.name.toLowerCase().endsWith(".docx")
    ) {
      const contenedor = crearContenedorArchivo(file);
      preview.appendChild(contenedor);
    }
  });
}

// ✅ Evento principal
input.addEventListener("change", () => {
  if (validarCantidad(input.files)) {
    mostrarPreview(input.files);
  }
  input.value = ""; // limpia el input para poder volver a seleccionar
});