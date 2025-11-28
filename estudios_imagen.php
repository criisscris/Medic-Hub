<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/estudios_imagen.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="bo">
  <h1>Medic-hub</h1>
  <!-- Botón hamburguesa. chupala -->
  <div class="hamburger" onclick="toggleMenu()">☰</div>
</div>

<!-- barra de navegacion lateral  --> 
<div class="menu" id="menu">
  <div class="menuitem">
    <ion-icon name="home-outline"></ion-icon>
    <a href="home_page.php">Menu</a>
  </div>

  <div class="menuitem">
    <ion-icon name="document-text-outline"></ion-icon>
    <a href="#">Tus notas</a>
  </div>

  <div class="menuitem submenu">
    <ion-icon name="add-circle-outline"></ion-icon>
    <a href="#">Agregar notas</a>
    <ul class="submenu-list">
      <li><a href="pagina_agregar.php">Notas médicas</a></li>
      <li><a href="estudios_imagen.php">Estudios de imagen</a></li>
        <li><a href="informe_especialista.php">Informe de especialista</a></li>
    </ul>
  </div>

  <div class="menuitem">
    <ion-icon name="person-outline"></ion-icon>
    <a href="#">Perfil</a>
  </div>
</div>

<!-- pide todos los datos que se enviaran a base de datos  --> 
    <div id="agregar_nota">

  <div class="container_datos" >
<input type="date" placeholder="fecha" id="txtFecha" name="txtFecha" >
</div>
<!-- option  --> 
  <label for="tipo-estudio">Tipo de estudio:</label>
    <select id="tipo-estudio" name="tipo-estudio" class="select-estudio">
      <option value="sangre">Análisis de sangre</option>
      <option value="orina">Examen de orina</option>
      <option value="rayos-x">Rayos X</option>
      <option value="ultrasonido">Ultrasonido</option>
      <option value="resonancia">Resonancia magnética</option>
       <option value="Otro">Otro</option>
    </select>
    <br>
<!-- boton para subir las imagenes  --> 
 <label for="file-upload" class="upload-btn">
 <ion-icon name="arrow-up-circle-outline"></ion-icon>   
  Subir Imagenes</label>
  <input id="file-upload" type="file"  accept="image/*,.pdf,.doc,.docx"  multiple>
<!-- aqui se veran todas las imagenes  --> 
  <div  id="preview" class="preview"></div>
 <input name="BTNagregar" type="submit"  id="BTNagregar" value="Guardar nota" ></input>
</div>


    <script src="js/estudios_imagen.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>