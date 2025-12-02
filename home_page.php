<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home – Medic-hub</title>
    <!--Se cambio-->
  <link rel="stylesheet" href="css/home_page.css">
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
    <div class="menuitem"><ion-icon name="document-text-outline"></ion-icon><a href="tus_notas.php">Tus notas</a></div>

    <div class="menuitem submenu">
      <ion-icon name="add-circle-outline"></ion-icon>
      <a href="#">Agregar notas</a>
      <ul class="submenu-list">
        <li><a href="pagina_agregar.php">Notas médicas</a></li>
        <li><a href="estudios_imagen.php">Estudios de imagen</a></li>
            <li><a href="informe_especialista.php">Informe de especialista</a></li>
      </ul>
    </div>
<div id="togglePerfil" class="menuitem">
  <ion-icon name="person-outline"></ion-icon>
  <span>Perfil</span>
</div>
  </div>
</div>   
 <!-- CONTENIDO -->
   <!-- tajeta de usuario -->
<div class="carta-perfil">
  <div class="header"></div>
  <div class="avatar"></div>
 <!-- por el usuario manda a traer los datos generales -->
  <?php
  session_start();
include("basedatos.php");
$conexion = conectar_bd();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    $sql = "SELECT * FROM datos_generales WHERE user = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $resultado = $stmt->get_result();

    while ($fila = $resultado->fetch_assoc()) {
        echo "Usuario: " . $fila['user'] . "<br>". "<br>";
        echo "Fecha de nacimiento: " . $fila['fechNacimiento'] . "<br>". "<br>";
        echo "Género: " . $fila['genero'] . "<br>". "<br>";
        echo "Tipo de sangre: " . $fila['tipo_sangre'] . "<br>". "<br>";
    }
} else {
    echo '<div class="alert alert-warning">No hay sesión activa</div>';
}
?>
  <div class="buttons">
    <button id="BTNcerrar_sesion">Cerrar sesion</button>
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