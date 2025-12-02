<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tus Notas - Medic-Hub</title>
  <link rel="stylesheet" href="css/tus_notas.css">
</head>
<body>
<?php
session_start();
include 'basedatos.php';

if (!isset($_SESSION['user'])) {
    header("Location: loginpage.php");
    exit();
}

$conexion = conectar_bd();
$id_user = $_SESSION['user'];
$sql = "SELECT * FROM datos WHERE ID_user = ? ORDER BY id DESC";
$stmt = $conexion->prepare($sql);

if (!$stmt) {
    die("❌ Error al preparar la consulta: " . $conexion->error);
}

$stmt->bind_param("s", $id_user);
$stmt->execute();
$result = $stmt->get_result();
$notas = $result->fetch_all(MYSQLI_ASSOC);

$stmt->close();
$conexion->close();
?>

<!-- Encabezado -->
<div class="bo">
  <h1>Medic-hub</h1>
  <div class="hamburger" onclick="toggleMenu()">☰</div>
</div>

<!-- Layout principal -->
<div class="page">
  <!-- Menú lateral -->
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

  <!-- Contenido principal -->
  <div class="container-page">
    <div class="form-box">
      <h2>Tus Notas Médicas</h2>
      <?php if (empty($notas)): ?>
        <p>No tienes notas registradas.</p>
      <?php else: ?>
        <?php foreach ($notas as $nota): ?>
          <div class="nota">
            <div class="nota-text">
              <h3><?php echo htmlspecialchars($nota['titulo']); ?></h3>
              <p><strong>Fecha:</strong> <?php echo htmlspecialchars($nota['fecha']); ?></p>
              <p><strong>Peso:</strong> <?php echo htmlspecialchars($nota['peso']); ?> kg</p>
              <p><strong>Temperatura:</strong> <?php echo htmlspecialchars($nota['temperatura']); ?> °C</p>
              <p><strong>Altura:</strong> <?php echo htmlspecialchars($nota['altura']); ?> m</p>
              <p><strong>Diagnóstico:</strong> <?php echo htmlspecialchars($nota['diagnostico']); ?></p>
              <p><strong>Tratamiento:</strong> <?php echo htmlspecialchars($nota['tratamiento']); ?></p>
            </div>
            <div class="nota-images">
              <?php if (!empty($nota['imagenes'])): ?>
                <?php $imagenes = explode(',', $nota['imagenes']); ?>
                <?php foreach ($imagenes as $img): ?>
                  <img src="<?php echo htmlspecialchars($img); ?>" alt="Imagen">
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="js/pagina_agregar.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
