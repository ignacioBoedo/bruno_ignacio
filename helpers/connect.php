<?php

$servername = "localhost";
$database = "c2030171_c_casla";
$username = "c2030171_c_casla";
$password = "su87TEmavu";

$connect = mysqli_connect($servername, $username, $password, $database);

if(!$connect){

    echo 'No se pudo conectar';
}

?>