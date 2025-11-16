<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/pagina_agregar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="bo">
    <h1>Medic-hub</h1>
  </div>

<!-- barra lateral  --> 
     <div class="menG">
    <div class="menu">
          <div class="menuitem"> <ion-icon name="home-outline"></ion-icon> <a href="home_page.php"> Menu</a></div>
      <div class="menuitem"><ion-icon name="document-text-outline"></ion-icon><a href=""> Tus notas</a></div>
      <div class="menuitem"><ion-icon name="add-circle-outline"></ion-icon><a href="pagina_agregar.php"> Agregar notas</a></div>
      <div class="menuitem"><ion-icon name="person-outline"></ion-icon><a href=""> Perfil</a></div>
    </div>

    <div id="agregar_nota">
    <div class="container_datos" >
<input type="text" placeholder="Titulo" id="txtTitulo" name="titulo">
</div>
    <div class="container_datos" >
<input type="date" placeholder="Fecha" id="txtFecha" name="fecha">
</div>
    <div class="container_datos" >
<input type="number" step="0.01" placeholder="Peso" id="txtPeso" name="peso">
</div>
 <div class="container_datos" >
<input type="number" step="0.01" placeholder="Temperatura" id="txtTemperatura" name="temperatura">
</div>
 <div class="container_datos" >
<input type="number" step="0.01" placeholder="Altura" id="txtAltura" name="Altura">
</div>
<textarea class="textarea-diagnostico" placeholder="Escriba el diagnostico"></textarea>
<textarea class="textarea-diagnostico" placeholder="Tratamiento y recomendaciones"></textarea>
 <div class="container_datos" >
<input type="file" accept="image/*">
</div>
</div>
    <script src="js/script_home.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>