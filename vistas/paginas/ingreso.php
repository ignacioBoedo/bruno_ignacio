<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Catálogo</title>
</head>
<body>
</br></br>     
<label>Iniciar sesión</label></br></br>
<p>Para solicitar un item deberá iniciar sesión</p>                
<hr>
                    <form action="helpers/validar.php" method="POST">
                        <label for="usuario">Usuario</label></br>
                        <input type="text" id="usuario" name="usuario" style="width : 500px"></input></br> 
                        <label for="password">Contraseña</label></br>
                        <input type="password" id="password" name="clave" style="width : 500px"></input></br>
<p>¿No tenés usuario? Solicitalo haciendo click <a href='index.php?ruta=registro'>aquí</a></p>
                        <input type="submit" class="enviar" value="Ingresar"></input></br>

                    </form>


<?php
if (isset($_GET['error'])) {
   echo "<h3>Datos incorrectos</h3>";
}
?>

                <hr>

<hr>

</div>

</body>
</html>