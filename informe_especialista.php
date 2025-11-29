<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/cssglobal.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

  <div class="form-container">

      <h2>Informe de especialista</h2>
       <div class="input-box" >
<input type="date" placeholder="fecha" id="txtFecha" name="txtFecha" >
</div>
<!-- option  --> 
 <div class="input-box">
  <label for="tipo-especialista">Tipo de estudio:</label>
    <select id="tipo-especialista" name="tipo-especialista" class="select-especialista">
      <option value="neurologo">Neurologo</option>
      <option value="traumatologo">Traumatólogo</option>
      <option value="cardiologo">Cardiólogo</option>
      <option value="endocrinologo">Endocrinólogo</option>
      <option value="psicologo">Psicologo</option>
       <option value="Otro">Otro</option>
    </select>
    </div>
    <br>
<!-- boton para subir las imagenes  --> 
 <label for="file-upload" class="upload-btn">
 <ion-icon name="arrow-up-circle-outline"></ion-icon>   
  Subir Imagenes</label>
  <input id="file-upload" type="file" accept="image/*" multiple>
<!-- aqui se veran todas las imagenes  --> 
  <div  id="preview" class="preview"></div>
  <button class="save-btn">Guardar nota</button>
</div>


     
    
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