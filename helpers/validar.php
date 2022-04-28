<?php
session_start ();

//$usuario = $_POST['usuario'];
//$clave = $_POST['clave'];

if($_POST['usuario'] == 'admin' && $_POST['clave'] == 'admin123') {
   $_SESSION['admin'] = $_POST['usuario'];
   header('location:../index.php');

}elseif($_POST['usuario'] == 'guest' && $_POST['clave'] == 'guest123') {
   $_SESSION['guest'] = $_POST['usuario'];
   header('location:../index.php');

}else{
header('location:../sesion.php?error');
}

?>