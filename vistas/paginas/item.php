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
    <h1>Items</h1>

<?php
if (isset($_SESSION['admin'])){

?>
<p><h3>Complete cada parte o sección de descripción del item a catalogar, siguiendo las pautas de las Reglas Angloamericanas de Catalogación.</h2></p>
<hr>

<!--Formulario para la creación de items-->

    <form action="helpers/create_item.php" method="POST">
        
        <label for="titulo">Titulo</label>
        <p><h5>Título propiamente dicho = título paralelo : otra información sobre el título / primera mención de responsabilidad ; subsiguientes menciones de responsabilidad</h5></p>
        <input type="text" id="titulo" name="titulo" size="100"> </br></br>
<hr>
        <label for="edicion">Edición</label>
        <p><h5>Mención de edición / Primera mención de responsabilidad en relación con la edición.</h5></p></br>
        <input type="text" id="edicion" name="edicion" size="100"></br></br>
<hr>
        <label for="det_material">Material</label>
        <p><h5></h5></p>
        <input type="text" id="det_material" name="det_material" size="100"></br></br>
<hr>
        <label for="publi_distrib">Publicación, distribución, etc</label>
        <p><h5>Primer lugar de publicación : Primer editor, fecha de publicación.</h5></p>
        <input type="text" id="publi_distrib" name="publi_distrib" size="100"></br></br>
<hr>
        <label for="descr_fisica">Descripción física</label>
        <p><h5>Extensión del item : otros detalles físicos ; dimensiones.</h5></p>
        <input type="text" id="descr_fisica" name="descr_fisica" size="100"></br></br>
<hr>
        <label for="serie">Serie</label><br>
        <p><h5>Numeración de la serie. Título de subserie, issn de la subserie; numeración de la subserie.</h5></p>
        <input type="text" id="serie" name="serie" size="100"></br></br>
<hr>
        <label for="notas">Notas</label>
        <p><h5></h5></p>
        <input type="text" id="notas" name="notas" size="100"></br></br>
<hr>
        <label for="n_norm">Número normalizado</label>
        <p><h5></h5></p>
        <input type="text" id="n_norm" name="n_norm" size="100"></br></br>
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
         <th>Título</th>
         <th>Edición</th>
         <th>Material</th>
         <th>Publicación, distribución, etc.</th>
         <th>Descripción física</th>
         <th>Serie</th>
         <th>Notas</th>
         <th>Número normalizado</th>
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
         include 'helpers/read_item.php';

         while($row = mysqli_fetch_array($RESULT)){ ?>

		<tr>	
	                <td><?= $row['id']?></td>
			<td><?= $row['titulo']?></td>
                        <td><?= $row['edicion']?></td>
                        <td><?= $row['det_material']?></td>
                        <td><?= $row['publi_distrib']?></td>
                        <td><?= $row['descr_fisica']?></td>
                        <td><?= $row['serie']?></td>
                        <td><?= $row['notas']?></td>
                        <td><?= $row['n_norm']?></td>
<?php
if (isset($_SESSION['admin'])){

?>
                        <td><button onclick="location.href='helpers/update_item.php?id=<?=$row['id']?>'">Actualizar</button></td>
                        <td><button onclick="location.href='helpers/delete_item.php?id=<?=$row['id']?>'">Borrar</button></td>
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