
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudios de imagen</title>
<!--Se cambio-->
  <link rel="stylesheet" href="css/cssglobal.css">
  <!--<link rel="stylesheet" href="css/estudios_imagen.css"> -->
</head>

<body>
 <!-- esto sirve para no dejar ingresar datos a menos que se tenga una sesion iniciada -->
  <?php 
  session_start();
include 'basedatos.php';

if (!isset($_SESSION['user'])) {
    header("Location: loginpage.php");
    exit();
}
  ?>
  <!-- HEADER -->
  <div class="bo">
    <h1>Medic-hub</h1>
    <div class="hamburger" onclick="toggleMenu()">☰</div>
    <button id="dark-toggle">🌙</button>
  </div>

  <!-- MENÚ LATERAL -->
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
  <!-- CONTENIDO -->
  <div class="form-container">
  

      <h2>Registrar estudio</h2>

      <div class="input-box">
        <label for="txtFecha">Fecha del estudio</label>
        <input type="date" id="txtFecha" name="txtFecha">
      </div>

      <div class="input-box">
        <label for="tipo-estudio">Tipo de estudio</label>
        <select id="tipo-estudio" name="tipo-estudio">
          <option value="sangre">Análisis de sangre</option>
          <option value="orina">Examen de orina</option>
          <option value="rayos-x">Rayos X</option>
          <option value="ultrasonido">Ultrasonido</option>
          <option value="resonancia">Resonancia magnética</option>
          <option value="otro">Otro</option>
        </select>
      </div>

      <div class="upload-box">
        <label for="file-upload" class="upload-btn">
          <ion-icon name="arrow-up-circle-outline"></ion-icon>
          Subir archivos
        </label>
        <input id="file-upload" type="file" accept="image/*,.pdf,.doc,.docx" multiple>
      </div>

      <div id="preview" class="preview"></div>

      <button class="save-btn">Guardar estudio</button>

  </div>
</div>  
     <!--Overlay-->
    <div class="menu-overlay" id="menu-overlay"></div>
<!--Scripts-->
  <script src="js/estudios_imagen.js"></script>
  <script src="js/tema_toggle.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="js/menu_toggle.js"></script>
</body>
</html>