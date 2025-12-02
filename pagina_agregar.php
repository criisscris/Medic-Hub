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
<?php
session_start();
include 'basedatos.php';

if (!isset($_SESSION['user'])) {
    header("Location: loginpage.php");
    exit();
}

// Configuración de Cloudinary

$cloud_name = 'ds5ye1wog';
$api_key = '869649266473638';
$api_secret = 'osHIkLNNHp9h2M2fBuZdteb3uAY';
$upload_preset = 'medic_hub'; // Crea este preset en Cloudinary

if (isset($_POST['BTNagregar'])) {
    $conexion = conectar_bd();
    $titulo = $_POST['titulo'];
    $fecha = $_POST['fecha'];
    $peso = $_POST['peso'];
    $temperatura = $_POST['temperatura'];
    $altura = $_POST['altura'];
    $diagnostico = $_POST['diagnostico'];
    $tratamiento = $_POST['tratamiento'];
    $id_user = 'prueba1';

    // Subir imágenes a Cloudinary
    $imagenes_urls = [];
    if (!empty($_FILES['imagenes']['name'][0])) {
        foreach ($_FILES['imagenes']['tmp_name'] as $key => $tmp_name) {
            if (is_uploaded_file($tmp_name)) {
                $url = "https://api.cloudinary.com/v1_1/$cloud_name/image/upload";
                $post = array(
                    'file' => new CURLFile($tmp_name),
                    'upload_preset' => $upload_preset
                );
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
                $data = json_decode($response, true);
                if (isset($data['secure_url'])) {
                    $imagenes_urls[] = $data['secure_url'];
                }
            }
        }
    }
    $imagenes_str = implode(',', $imagenes_urls);
    $id_user = $_SESSION['user'];

    $stmt = $conexion->prepare("INSERT INTO datos (titulo, fecha, peso, temperatura, altura, diagnostico, tratamiento, imagenes, ID_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssddddsss", $titulo, $fecha, $peso, $temperatura, $altura, $diagnostico, $tratamiento, $imagenes_str, $id_user);
    if ($stmt->execute()) {
        echo "<script>alert('Nota guardada correctamente');</script>";
    } else {
        echo "<script>alert('Error al guardar: " . $stmt->error . "');</script>";
    }
    $stmt->close();
    $conexion->close();
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

      <h2>Agregar nota médica</h2>
 <form method="post" enctype="multipart/form-data">
    <div class="input-box">
      <label for="txtTitulo"></label>
      <input type="text" id="txtTitulo" name="titulo" placeholder="Titulo o motivo">
    </div>

    <div class="input-box">
      <label for="txtFecha"></label>
      <input type="date" id="txtFecha" name="fecha" placeholder="Fecha">
    </div>

    <div class="input-box">
      <label for="txtPeso"></label>
      <input type="number" step="0.01" id="txtPeso" name="peso" placeholder="Peso (kg)">
    </div>

    <div class="input-box">
      <label for="txtTemperatura"></label>
      <input type="number" step="0.01" id="txtTemperatura" name="temperatura" placeholder="Temperatura (°C)">
    </div>

    <div class="input-box">
      <label for="txtAltura"></label>
      <input type="number" step="0.01" id="txtAltura" name="altura" placeholder="Altura (cm)">
    </div>

    <div class="textarea-box">
      <label for="diagnostico">Diagnóstico</label>
      <textarea id="diagnostico" name="diagnostico"></textarea>
    </div>

    <div class="textarea-box">
      <label for="tratamiento">Tratamiento y recomendaciones</label>
      <textarea id="tratamiento" name="tratamiento"></textarea>
    </div>

    <div class="upload-box">
      <label for="file-upload" class="upload-btn">
        <ion-icon name="arrow-up-circle-outline"></ion-icon>
        Subir imágenes
      </label>
      <input id="file-upload" type="file" accept="image/*,.pdf,.doc,.docx" multiple>
    </div>

    <div id="preview" class="preview"></div>

    <!-- Botón de envío -->
    <button type="submit" name="BTNagregar" class="save-btn">Guardar nota</button>
  </form>
</div>
  <!--Overlay-->
  <div class="menu-overlay" id="menu-overlay"></div>

  <script src="js/pagina_agregar.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="js/menu_toggle.js"></script>
</body>
</html>
