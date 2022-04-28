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
    <h1>Entidades corporativas</h1>

<?php
if (isset($_SESSION['admin'])){

?>
<p><h3>Ingrese cada entidad corporativa siguiendo los criterios de las Reglas Angloamericanas de Catalogación, para desarrollar un registro de autoridad confiable.</h2></p>
<hr>

<!--Formulario de ingreso de entidades corporativas. No autores personales-->

    <form action="helpers/create_corpo.php" method="POST">
        <label for="entidad">Entidad</label></br>
        <input type="text" id="entidad" name="entidad" size="100"></br>
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
         <th>Entidad corporativa</th>
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
         include 'helpers/read_entidad.php';

         while($row = mysqli_fetch_array($RESULT)){ ?>

		<tr>	
	                <td><?= $row['id']?></td>
			<td><?= $row['entidad']?></td>
<?php
if (isset($_SESSION['admin'])){

?>
                        <td><button onclick="location.href='helpers/update_entidad.php?id=<?=$row['id']?>'">Actualizar</button></td>
                        <td><button onclick="location.href='delete_corpo.php?id=<?=$row['id']?>'">Borrar</button></td>
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