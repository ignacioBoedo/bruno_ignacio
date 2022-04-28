<?php>

include 'connect.php';

$titulo = $_POST['titulo'];
$edicion = $_POST['edicion'];
$det_material = $_POST['det_material'];
$publi_distrib = $_POST['publi_distrib'];
$descr_fisica = $_POST['descr_fisica'];
$serie = $_POST['serie'];
$notas = $_POST['notas'];
$n_norm = $_POST['n_norm'];

$SQL_READ = "SELECT * FROM items ORDER BY titulo ASC";


$RESULT = mysqli_query($connect, $SQL_READ);

?>