function toggleMenu() {
  const menu = document.getElementById("menu");
  menu.classList.toggle("show");
}

document.getElementById("menu-overlay").onclick = () => {
  document.getElementById("menu").classList.remove("show");
};