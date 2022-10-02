<?php 
/* funcion para que la sesion se destruya y se cierre la sesion de la pagina */
    require_once("../../config/conexion.php");
    session_destroy();
    header("Location:" .Conectar::ruta()."index.php");
    exit();    
?>