<?php>

include 'connect.php';

$entidad = $_POST['entidad'];

$SQL_READ = "SELECT * FROM ent_corp ORDER BY entidad ASC";


$RESULT = mysqli_query($connect, $SQL_READ);

?>