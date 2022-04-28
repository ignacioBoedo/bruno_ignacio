<?php
// Iniciar una sesión
session_start();
//Cerrar la sesión
session_destroy();
//Devuelve al index
header('location:../'index.php');
?>