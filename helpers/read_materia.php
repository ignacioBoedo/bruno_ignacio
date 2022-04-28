<?php>

include 'connect.php';

$materia = $_POST['materia'];
$sub_mat = $_POST['sub_mat'];

$SQL_READ = "SELECT * FROM materia ORDER BY materia ASC";

$RESULT = mysqli_query($connect, $SQL_READ);

header('location:../index.php');
?>