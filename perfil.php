<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/cssglobal.css">
<!--<link rel="stylesheet" href="css/pagina_agregar.css">-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Medic-Hub</title>
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
$user = $_SESSION['user'];

$sql = "SELECT * FROM datos_generales WHERE user = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();
$datos = $result->fetch_assoc();
$stmt->close();
// $conexion->close(); // Move to end
?>
    <div class="bo">
    <h1>Medic-hub</h1>
    <div class="hamburger" onclick="toggleMenu()">☰</div>
     <button id="dark-toggle">🌙</button>
    </div>

<!-- barra de navegacion lateral -->
<div class="menG">
    <div class="menu" id="menu">
           <div class="menuitem"> <ion-icon name="home-outline"></ion-icon> <a href="home_page.php"> Menu</a></div>
       <div class="menuitem"><ion-icon name="document-text-outline"></ion-icon><a href="tus_notas.php"> Tus notas</a></div>
       <div class="menuitem"><ion-icon name="add-circle-outline"></ion-icon><a href="pagina_agregar.php"> Agregar notas</a></div>
       <div class="menuitem"><ion-icon name="person-outline"></ion-icon><a href="perfil.php"> Perfil</a></div>
    </div>
</div>

<!-- Mostrar perfil -->
<div id="agregar_nota">
    <h2>Mi Perfil</h2>
    <?php if ($datos): ?>
        <div class="profile-container">
            <div class="profile-header">
                <div class="profile-picture">
                    <img src="img/logo.png" alt="Foto de perfil" style="width: 100px; height: 100px; border-radius: 50%; border: 3px solid #1e90ff;">
                </div>
                <div class="profile-info">
                    <h3><?php echo htmlspecialchars($datos['nombre'] . ' ' . $datos['Apaterno'] . ' ' . $datos['Amaterno']); ?></h3>
                    <p><strong>Usuario:</strong> <?php echo htmlspecialchars($user); ?></p>
                    <p><strong>Género:</strong> <?php echo htmlspecialchars($datos['genero']); ?></p>
                </div>
            </div>

            <div class="profile-stats">
                <div class="stat-card">
                    <h4>Notas Creadas</h4>
                    <p class="stat-number">
                        <?php
                        $sql_count = "SELECT COUNT(*) as total FROM datos WHERE ID_user = ?";
                        $stmt_count = $conexion->prepare($sql_count);
                        $stmt_count->bind_param("s", $user);
                        $stmt_count->execute();
                        $result_count = $stmt_count->get_result();
                        $count = $result_count->fetch_assoc()['total'];
                        echo $count;
                        $stmt_count->close();
                        ?>
                    </p>
                </div>
                <div class="stat-card">
                    <h4>Edad</h4>
                    <p class="stat-number">
                        <?php
                        $birthdate = new DateTime($datos['fechNacimiento']);
                        $today = new DateTime();
                        $age = $today->diff($birthdate)->y;
                        echo $age . ' años';
                        ?>
                    </p>
                </div>
                <div class="stat-card">
                    <h4>Tipo de Sangre</h4>
                    <p class="stat-number"><?php echo htmlspecialchars($datos['tipo_sangre']); ?></p>
                </div>
            </div>

            <div class="profile-details">
                <h3>Información Detallada</h3>
                <div class="detail-item">
                    <strong>Fecha de Nacimiento:</strong> <?php echo htmlspecialchars($datos['fechNacimiento']); ?>
                </div>
                <div class="detail-item">
                    <strong>Citas Programadas:</strong> No hay citas programadas
                </div>
                <div class="detail-item">
                    <strong>Última Nota:</strong>
                    <?php
                    $sql_last = "SELECT titulo, fecha FROM datos WHERE ID_user = ? ORDER BY id DESC LIMIT 1";
                    $stmt_last = $conexion->prepare($sql_last);
                    $stmt_last->bind_param("s", $user);
                    $stmt_last->execute();
                    $result_last = $stmt_last->get_result();
                    $last_note = $result_last->fetch_assoc();
                    if ($last_note) {
                        echo htmlspecialchars($last_note['titulo']) . ' (' . htmlspecialchars($last_note['fecha']) . ')';
                    } else {
                        echo 'Ninguna';
                    }
                    $stmt_last->close();
                    ?>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p>No se encontraron datos del perfil.</p>
    <?php endif; ?>
</div>
<?php $conexion->close(); ?>
<div class="menu-overlay" id="menu-overlay"></div>
<!--Scripts-->
  <script src="js/estudios_imagen.js"></script>
  <script src="js/tema_toggle.js"></script>
  <script src="js/menu_toggle.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>