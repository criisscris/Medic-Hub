function toggleMenu() {
  const menu = document.getElementById("menu");
  const overlay = document.getElementById("menu-overlay");

  menu.classList.toggle("show");
  overlay.classList.toggle("show");
}

// 🔥 expón la función al ámbito global
window.toggleMenu = toggleMenu;

// Cerrar al hacer clic en el overlay
document.getElementById("menu-overlay").addEventListener("click", () => {
  document.getElementById("menu").classList.remove("show");
  document.getElementById("menu-overlay").classList.remove("show");
});

// Cerrar al hacer clic en cualquier enlace del menú
document.querySelectorAll("#menu a").forEach(link => {
  link.addEventListener("click", () => {
    document.getElementById("menu").classList.remove("show");
    document.getElementById("menu-overlay").classList.remove("show");
  });
});

// Cerrar al hacer clic fuera del menú y del botón hamburguesa
document.addEventListener("click", (event) => {
  const menu = document.getElementById("menu");
  const overlay = document.getElementById("menu-overlay");
  const hamburger = document.querySelector(".hamburger");

  if (menu.classList.contains("show")) {
    if (!menu.contains(event.target) && !hamburger.contains(event.target)) {
      menu.classList.remove("show");
      overlay.classList.remove("show");
    }
  }
});