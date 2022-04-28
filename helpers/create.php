<?php

//Creación de autores de manifestaciones personales

include 'connect.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$SQL_CREATE = "INSERT INTO resp_personal(apellido, nombre) VALUES('$apellido', '$nombre')";

mysqli_query($connect, $SQL_CREATE);

header('location:../index.php');

?>