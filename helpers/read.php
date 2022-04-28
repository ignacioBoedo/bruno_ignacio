<?php>

include 'connect.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$SQL_READ = "SELECT * FROM resp_personal ORDER BY apellido ASC";


$RESULT = mysqli_query($connect, $SQL_READ);

?>