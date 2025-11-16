
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="css/estilo_loginpage.css">
</head>
<body>
<!-- El div que contiene todos los formularios -->
<div class="container" >

<div class="form">
<!-- formulario de inicio de sesion  -->
    <form method="post"  class="inicio_sesion">
<h2>Iniciar sesion</h2>
<span>Use su usuario y contraseña</span>
<div class="container_datos" >
<ion-icon name="person-outline"></ion-icon>
<input type="text" placeholder="Nombre de usuario" name="txtuser" id="txtuser">
</div>
<div class="container_datos" >
<ion-icon name="lock-closed-outline"></ion-icon>
<input type="password" placeholder="Contraseña" name="txtpsw" id="txtpws">
</div>
<?php 
include ("loginpageBTN.php");
 ?>
<input type="submit" name="btnIniciar_sesion" class="boton" value="Iniciar sesion" >
    </form>
</div>
<!-- formulario de registro -->
<div class="form">
<form method="post" class="registrarse">
    <h2>Registrarse</h2>
    <span>Cree un usuario y contraseña e ingrese sus datos</span>
    <div class="container_datos" >
<ion-icon name="person-outline"></ion-icon>
<input type="text" placeholder="Nombre de usuario" id="txtUser" name="txtuser">
</div>
<div class="container_datos" >
<ion-icon name="lock-closed-outline"></ion-icon>
<input type="password" placeholder="Contraseña" id="txtPass" name="txtpsw">
</div>
<div class="container_datos" >
    <input type="password" placeholder="Confirmacion de la contraseña">
</div>
<div class="container_datos">
    <input type="text" placeholder="Nombres" id="txtNombre" name="txtNombre">
</div>
<div class="container_datos" >
 <input type="text" placeholder="Apellido Paterno" id="txtMaterno" name="txtApaterno" > 
</div>
<div class="container_datos" >
 <input type="text" placeholder="Apellido Materno" id="txtPaterno" name="txtAmaterno" >
</div>
<div class="container_datos" >
<input type="date" placeholder="Fecha de nacimiento" id="txtFecha_nacimiento" name="txtFecha_nacimiento" >
</div>
<p>Tipo de sangre:</p>
<div class="radio-input">
  <label>
  <input value="A+" name="value_sangre" id="value-1" type="radio" checked="">
  <span>A+</span>
  </label>
  <label>
    <input value="A-" name="value_sangre" id="value-2" type="radio">
  <span>A-</span>
  </label>
  <label>
    <input value="B+" name="value_sangre" id="value-3" type="radio">
  <span>B+</span>
  </label>
  <label>
    <input value="B-" name="value_sangre" id="value-3" type="radio">
  <span>B-</span>
  </label>
  <label>
    <input value="AB+" name="value_sangre" id="value-3" type="radio">
  <span>AB+</span>
  </label>
   <label>
    <input value="AB-" name="value_sangre" id="value-3" type="radio">
  <span>AB-</span>
  </label>
     <label>
    <input value="O+" name="value_sangre" id="value-3" type="radio">
  <span>O+</span>
  </label>
  <label>
    <input value="O-" name="value_sangre" id="value-3" type="radio">
  <span>O-</span>
  </label>
  <span class="selection"></span>
</div><br>
<p>Seleccione su genero:</p>
<div class="genero" >
 <label>
  <input value="hombre" name="value_genero" id="hombre" type="radio" checked="">
  <span>Hombre</span>
  </label>
   <label>
  <input value="mujer" name="value_genero" id="mujer" type="radio">
  <span>Mujer</span>
  </label>
    <span class="selection_genero"></span>
</div>
<input name="btnRegistrarse" type="submit" class="boton" style="background-color: #3AA8AD;" value="Registrarse" ></input>
 <?php 
include 
"btn_registrarse.php";?>
</form>
</div>
<!-- Botones y h3 para cambiar entre el formulario de registro e inicio de sesion -->
<div class="container_bienvenida" >
<div class="bienvenida_iniciar bienvenida">
<h3>Medic-Note</h3>
<p>Ingrese sus datos para Registrarse</p>
<button class="boton" id="btnRegistrarse" >Iniciar sesion</button>
</div>
<div class="bienvenida_registro bienvenida">
<h3>Medic-Note</h3>
<p>Ingrese sus datos para Iniciar sesion</p>
<button class="boton" id="btnIniciar_sesion">Registrarse</button>
</div>
</div>
</div>


<!-- relacion con el java script -->
    <script src="js/scrip_loginpage.js" ></script>
    <!-- libreria para los iconos -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>