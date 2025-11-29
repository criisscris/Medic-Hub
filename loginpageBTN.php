<?php
session_start(); // siempre al inicio
include("basedatos.php");
$conexion = conectar_bd();

/* si se da click al boton de iniciar sesion la condicion sigue */
if (!empty($_POST["btnIniciar_sesion"])) {

    if (!empty($_POST["txtuser"]) && !empty($_POST["txtpsw"])) {
        $usuario = $_POST["txtuser"];
        $psw = $_POST["txtpsw"];

        // selecciona los datos
        $sql = $conexion->query("SELECT * FROM usuario WHERE user='$usuario' AND pass='$psw' ");

        if ($datos = $sql->fetch_object()) {
            // ✅ guardar usuario en la sesión
            $_SESSION['user'] = $usuario;

            // redirigir
            header("Location: home_page.php");
            exit();
        } else {
            echo '<span style="color: red;">Usuario o contraseña erróneos</span>';
        }
    } else {
        echo '<span style="color: red;">Debe ingresar usuario y contraseña</span>';
    }
}
?>