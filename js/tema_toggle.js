// Botón de modo oscuro
const darkToggle = document.getElementById("dark-toggle");

if (darkToggle) {
  darkToggle.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");

    // Guardar preferencia en localStorage
    if (document.body.classList.contains("dark-mode")) {
      localStorage.setItem("theme", "dark");
      darkToggle.textContent = "☀️"; // cambia el icono
    } else {
      localStorage.setItem("theme", "light");
      darkToggle.textContent = "🌙";
    }
  });
}

// Al cargar la página, aplicar preferencia guardada
window.addEventListener("DOMContentLoaded", () => {
  const theme = localStorage.getItem("theme");
  if (theme === "dark") {
    document.body.classList.add("dark-mode");
    darkToggle.textContent = "☀️";
  }
});