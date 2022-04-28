<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="js/script_tab.js"></script>
    <title>Catálogo</title>
</head>
<body>
    <h1>Materia</h1>

<?php
if (isset($_SESSION['admin'])){

?>
<p><h3>Agregue al catálogo, las materias que considere necesario, siguiendo las pautas para la realización de listados de encabezamiento de materias. Puede utilizar como guía para su desarrollo el siguiente material: <a href="http://v.conabip.gob.ar/sites/default/files/lembp.pdf">Lista de Encabezamiento de materia</a></h2></p>
<hr>

<!--Formulario para el ingreso de materias-->

    <form action="helpers/create_materia.php" method="POST">
        <label for="materia">Materia</label><br>
        <input type="text" id="materia" name="materia" size="100"><br>

        <label for="sub_mat">Subencabezado</label><br>
        <input type="text" id="sub_mat" name="sub_mat" size="100"><br>
<hr>
        <input type="submit" value="Enviar">
    </form>
<?php
}else{
header('location:../index.php');
}
?>
<hr>

   <table border="2px">

      <thead>
         <th>Id</th>
         <th>Materia</th>
         <th>Subencabezamiento</th>
<?php
if (isset($_SESSION['admin'])){

?>
         <th colspan="2">Opciones</th>
<?php
}else{
header('location:../index.php');
}
?>
      </thead>

      <tbody>
         <?php
         include 'helpers/read_materia.php';

         while($row = mysqli_fetch_array($RESULT)){ ?>

		<tr>	
	                <td><?= $row['id']?></td>
			<td><?= $row['materia']?></td>
                        <td><?= $row['sub_mat']?></td>
<?php
if (isset($_SESSION['admin'])){

?>
                        <td><button onclick="location.href='helpers/update_materia.php?id=<?=$row['id']?>'">Actualizar</button></td>
                        <td><button onclick="location.href='helpers/delete_materia.php?id=<?=$row['id']?>'">Borrar</button></td>
<?php
}else{
header('location:../index.php');
}
?>

		</tr>


         <?php } ?>


      </tbody>
   </table>
</body>
</html>