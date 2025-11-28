<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home – Medic-hub</title>
    <!--Se cambio-->
  <link rel="stylesheet" href="css/cssglobal.css">
  <!--<link rel="stylesheet" href="css/home_page.css">-->
</head>

<body>

  <div class="bo">
    <h1>Medic-hub</h1>
    <div class="hamburger" onclick="toggleMenu()">☰</div>
  </div>
<!-- MENU -->
<div class="page">
  <div class="menu" id="menu">
    <div class="menuitem"><ion-icon name="home-outline"></ion-icon><a href="home_page.php">Menu</a></div>
    <div class="menuitem"><ion-icon name="document-text-outline"></ion-icon><a href="#">Tus notas</a></div>

    <div class="menuitem submenu">
      <ion-icon name="add-circle-outline"></ion-icon>
      <a href="#">Agregar notas</a>
      <ul class="submenu-list">
        <li><a href="pagina_agregar.php">Notas médicas</a></li>
        <li><a href="estudios_imagen.php">Estudios de imagen</a></li>
            <li><a href="informe_especialista.php">Informe de especialista</a></li>
      </ul>
    </div>

    <div class="menuitem"><ion-icon name="person-outline"></ion-icon><a href="#">Perfil</a></div>
  </div>
</div>   
    <!--Overlay-->
  <div class="menu-overlay" id="menu-overlay"></div>

  <script src="js/script_home.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="js/menu_toggle.js"></script>
</body>
</html>