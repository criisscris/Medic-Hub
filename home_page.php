<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home – Medic-hub</title>
  <link rel="stylesheet" href="css/cssglobal.css">
  <link rel="stylesheet" href="css/home_page.css">
</head>

<body>

  <!-- HEADER -->
<div class="bo">
  <h1>Medic-hub</h1>
  <div class="hamburger" onclick="toggleMenu()">☰</div>
  <button id="dark-toggle">🌙</button>
</div>

  <!-- MENU + CONTENIDO -->
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

    <!-- BLOQUE EXTRA -->
      <div class="menu-extra">
        <h4>Accesos rápidos</h4>
        <ul>
          <li><a href="pagina_agregar.php">➕ Agregar nota</a></li>
          <li><a href="estudios_imagen.php">📂 Ver estudios</a></li>
          <li><a href="#">👤 Perfil</a></li>
        </ul>
      </div>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="main-content">
      <!-- Hero(Header2) -->
      <section class="hero">
        <h1>Tu espacio digital para organizar tu salud</h1>
        <p>Medic-hub te ayuda a guardar, consultar y gestionar tus notas médicas y estudios de imagen.</p>
        <button class="cta-btn">Empieza ahora</button>
      </section>

      <!-- Acerca de -->
      <section class="AcercaDe">
        <h2>¿Qué es Medic-hub?</h2>
        <p>Una plataforma pensada para pacientes y profesionales que necesitan tener sus registros médicos organizados y accesibles en cualquier momento.</p>
      </section>

      <!-- Beneficios -->
<section class="Beneficios">
  <h2>¿Por qué usar Medic-hub?</h2>
  <div class="Beneficio-grid">
    <div class="Beneficio">
      <div class="beneficio-titulo">📂 Organización fácil</div>
      <div class="beneficio-info">
        <img src="img/archivadoraMed.jpg" alt="Organización" />
        <p>Guarda todas tus notas y estudios en un solo lugar.</p>
      </div>
    </div>

    <div class="Beneficio">
      <div class="beneficio-titulo">🔍 Acceso rápido</div>
      <div class="beneficio-info">
        <img src="img/AccesoRap.avif" alt="Acceso rápido" />
        <p>Consulta tu historial médico desde cualquier dispositivo en segundos.</p>
      </div>
    </div>

    <div class="Beneficio">
      <div class="beneficio-titulo">🛡️ Seguridad</div>
      <div class="beneficio-info">
        <img src="img/seguridad.avif" alt="Seguridad" />
        <p>Tus datos están protegidos con cifrado y acceso seguro.</p>
      </div>
    </div>

    <div class="Beneficio">
      <div class="beneficio-titulo">📱 Diseño Responsivo</div>
      <div class="beneficio-info">
        <img src="img/responsive.jpg" alt="Responsive" />
        <p>Funciona perfecto en móvil, tablet y PC.</p>
      </div>
    </div>
  </div>
</section>

      <!-- Seccion de Como funciona -->
      <section class="ComoFunciona">
        <h2>Cómo funciona</h2>
        <div class="Pasos">
          <div class="Paso">1️⃣ Registra tu nota médica</div>
          <div class="Paso">2️⃣ Sube tus estudios de imagen</div>
          <div class="Paso">3️⃣ Consulta tu historial</div>
          <div class="Paso">4️⃣ Mantén todo organizado y seguro</div>
        </div>
      </section>

      <!-- Footer(Lo de abajo) -->
      <footer class="footer">
        <div class="footer-content">
          <div class="footer-section">
            <h3>Medic-hub</h3>
            <p>Tu espacio digital para organizar tu salud.</p>
          </div>

          <div class="footer-section">
            <h4>Enlaces útiles</h4>
            <ul>
              <li><a href="home_page.php">Inicio</a></li>
              <li><a href="pagina_agregar.php">Agregar notas</a></li>
              <li><a href="estudios_imagen.php">Estudios de imagen</a></li>
              <li><a href="#">Perfil</a></li>
            </ul>
          </div>

          <div class="footer-section">
            <h4>Contacto</h4>
            <p>Email: medic.hub12345@gmail.com</p>
            <p>Tel: +52 744 123 4567</p>
          </div>

          <div class="footer-section">
            <h4>Síguenos</h4>
            <div class="social-icons">
              <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
              <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
              <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
          </div>
        </div>

        <div class="footer-bottom">
          <p>&copy; 2025 Medic-hub. Todos los derechos reservados.</p>
        </div>
      </footer>
    </div>

  </div>

  <!-- Overlay -->
  <div class="menu-overlay" id="menu-overlay"></div>

  <!-- Scripts -->
  <script src="js/menu_toggle.js"></script>
  <script src="js/tema_toggle.js"></script>
  <!--<script src="js/script_home.js"></script> -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
