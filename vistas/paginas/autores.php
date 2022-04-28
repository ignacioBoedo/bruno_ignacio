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
    <h1>Autores</h1>

<?php
if (isset($_SESSION['admin'])){

?>
             <p><h3>Ingrese el nombre y el apellido de los autores siguiendo los criterios de las Reglas Angloamericanas de Catalogación, para desarrollar un registro de autoridad confiable.</h2></p>
<hr>

<!--Formulario de ingreso de autorías personales. Personas, no entidades-->           

            <form action="helpers/create.php" method="POST">
                <label for="nombre">Nombre</label><br>
                <input type="text" id="nombre" name="nombre" size="100"></br>
                <label for="apellido">Apellido</label><br>
                <input type="text" id="apellido" name="apellido" size="100"></br>
<hr>
                <input type="submit" value="Enviar">
             </form>

<?php
}else{
header('location:../index.php');
}
?>
<hr>
<!--Tabla de autores. Lista todos los autores y da las opciones de actualizar o borrar-->

             <table border="2px">
                <thead>
                   <th>Id</th>
                   <th>Apellido</th>
                   <th>Nombre</th>
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
         include 'helpers/read.php';

         while($row = mysqli_fetch_array($RESULT)){ ?>

		<tr>	
	           <td><?= $row['id']?></td>
	           <td><?= $row['apellido']?></td>
                   <td><?= $row['nombre']?></td>
<?php
if (isset($_SESSION['admin'])){

?>
                   <td><button onclick="location.href='helpers/update.php?id=<?=$row['id']?>'">Actualizar</button></td>
                   <td><button onclick="location.href='helpers/delete.php?id=<?=$row['id']?>'">Borrar</button></td>
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