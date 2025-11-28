<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar nota médica</title>
<!--Se cambio-->
  <link rel="stylesheet" href="css/cssglobal.css">
  <!--<link rel="stylesheet" href="css/pagina_agregar.css"> -->
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
      </ul>
    </div>

    <div class="menuitem"><ion-icon name="person-outline"></ion-icon><a href="#">Perfil</a></div>
  </div>

  <div class="form-container">

      <h2>Agregar nota médica</h2>

      <div class="input-box">
        <label for="txtTitulo">Título</label>
        <input type="text" id="txtTitulo">
      </div>

      <div class="input-box">
        <label for="txtFecha">Fecha</label>
        <input type="date" id="txtFecha">
      </div>

      <div class="input-box">
        <label for="txtPeso">Peso (kg)</label>
        <input type="number" step="0.01" id="txtPeso">
      </div>

      <div class="input-box">
        <label for="txtTemperatura">Temperatura (°C)</label>
        <input type="number" step="0.01" id="txtTemperatura">
      </div>

      <div class="input-box">
        <label for="txtAltura">Altura (cm)</label>
        <input type="number" step="0.01" id="txtAltura">
      </div>

      <div class="textarea-box">
        <label for="diagnostico">Diagnóstico</label>
        <textarea id="diagnostico"></textarea>
      </div>

      <div class="textarea-box">
        <label for="tratamiento">Tratamiento y recomendaciones</label>
        <textarea id="tratamiento"></textarea>
      </div>

      <div class="upload-box">
        <label for="file-upload" class="upload-btn">
          <ion-icon name="arrow-up-circle-outline"></ion-icon>
          Subir imágenes
        </label>
        <input id="file-upload" type="file" accept="image/*" multiple>
      </div>

      <div id="preview" class="preview"></div>

      <button class="save-btn">Guardar nota</button>
    
  </div>
</div> 
  <!--Overlay-->
  <div class="menu-overlay" id="menu-overlay"></div>

  <script src="js/pagina_agregar.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="js/menu_toggle.js"></script>
</body>
</html>
