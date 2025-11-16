<?php
 $conexion = conectar_bd();
if(!empty($_POST["btnRegistrarse"])){
    
if (!empty($_POST["txtuser"]) and !empty($_POST["txtpsw"]) and !empty($_POST["txtNombre"]) and !empty($_POST["txtApaterno"]) and !empty($_POST["txtAmaterno"]) and !empty($_POST["txtFecha_nacimiento"]) and !empty($_POST["value_sangre"]) and !empty($_POST["value_genero"]) ) {
$usuario = $_POST["txtuser"];
$psw = $_POST["txtpsw"];
$nombre = $_POST["txtNombre"];
$apellido_paterno = $_POST["txtApaterno"];
$apellido_materno = $_POST["txtAmaterno"];
$fecha_nacimiento = $_POST["txtFecha_nacimiento"];
$tipo_sangre = $_POST["value_sangre"];
$genero = $_POST["value_genero"];

$sql = $conexion->query(" insert into usuario(user, pass)values('$usuario','$psw')");
$sql2 = $conexion->query(" insert into datos_generales(nombre, Apaterno, Amaterno, tipo_sangre, fechNacimiento, user, genero)values('$nombre','$apellido_paterno','$apellido_materno','$fecha_nacimiento','$tipo_sangre','$genero')");
if ($sql == 1) {
 echo '<div class="alert alert-sucess" >Cuenta creado correctamente</div>';
} else {
echo '<div class="alert alert-danger" >Error al crear la cuenta</div>';
}
} else {
 echo '<div class="alert alert-warning">Favor de llenar todos los campos</div>';
}
}
?>