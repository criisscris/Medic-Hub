<?php

function conectar_bd()
{
    $servidor = "sql100.infinityfree.com";
    $nombrebd = "if0_40531531_historial";
    $usuario = "if0_40531531";
    $contrasena = "WDRWG9JxAa";


$conexion = new mysqli("localhost","root","","historial");
$conexion -> set_charset("utf8");

mysqli_select_db($conexion,$nombrebd);
return $conexion;

}

?>