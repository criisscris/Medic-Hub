<?php

function conectar_bd()
{
    $servidor = "localhost";
    $nombrebd = "historial";
    $usuario = "root";
    $contrasena = "";


$conexion = new mysqli("localhost","root","","historial");
$conexion -> set_charset("utf8");

mysqli_select_db($conexion,$nombrebd);
return $conexion;

}

?>