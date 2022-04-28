<?php
// Iniciar una sesión
session_start();
?>

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
        
<header class='contenedor'>
       <nav id="botonera_principal">
            <ul>
                <li><a href='index.php?ruta=inicio'>Inicio</a></li>
                <li><a href='#'>Usuarios</a>
            <ul>
                <li><a href='index.php?ruta=registro'>Registro</a></li>
                <li><a href='index.php?ruta=ingreso'>Ingreso</a></li>
            </ul>
                </li>
                <li><a href='#'>Opciones</a>
            <ul>
                <li><a href='index.php?ruta=autores'>Autores</a></li>
                <li><a href='index.php?ruta=corpo'>Entidades corporativas</a></li>
                <li><a href='index.php?ruta=item'>Items</a></li>
                <li><a href='index.php?ruta=materia'>Materia</a></li>
            </ul>
                </li>
                <li><a href='index.php?ruta=salir'>Salir</a></li>
            </ul>
        </nav></br></br>

<section id='contenido'>
            <?php

                if (isset($_GET['ruta'])){
                    if (
                        $_GET['ruta'] == "registro" ||
                        $_GET['ruta'] == "ingreso" ||
                        $_GET['ruta'] == "inicio" ||
                        $_GET['ruta'] == "autores" ||
                        $_GET['ruta'] == "corpo" ||
                        $_GET['ruta'] == "item" ||
                        $_GET['ruta'] == "materia" ||
                        $_GET['ruta'] == "salir"
                    ){
                        include 'paginas/' . $_GET['ruta'] . '.php';
                    } else {
                        include 'paginas/error404.php';
                    }


                } else {
                    include 'paginas/bienvenidx.php';
                }
            ?>
        </section>

</header>

<div id='contenedor2'>

        
</div>

</body>

</html>
</pre>