<?php
include("basedatos.php");
  $conexion = conectar_bd();
/* si se da click al boton de iniciar sesion la condicion sigure*/
if(!empty($_POST["btnIniciar_sesion"])){
  
    /* si txtuser y txtpws tienen datos se ejecuta el codigo */
if (!empty($_POST["txtuser"]) and !empty($_POST["txtpsw"])  ) {
   $usuario = $_POST["txtuser"];
    $psw = $_POST["txtpsw"];
 /* selecciona los datos */
    $sql = $conexion->query("select * FROM usuario where user='$usuario' and pass='$psw' ");
    /* si el usuario y la contraseña coinciden permite ingresar a el formulario */
    if($datos=$sql->fetch_object()){
        /* envia al usuario a la siguiente pagina */ 
        header("Location: home_page.php");
    }else{
        /* mensaje de error al*/ 
        echo '<span style="color: red;">Usuario o contraseña erroneo</span>';
    }
} 
/* si el usuario no ingreso nada se manda un mensaje */
else {
 echo '<span style="color: red;">No inserto ningun dato uno de los datos</span>';
}
}
?>