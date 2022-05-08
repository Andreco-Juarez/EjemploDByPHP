<?php

define("DBHOST","localhost");
define("DBUSER","root");
define("PASSWORD","");
define("DB","actividad");

function connect(){
    $conexion = mysqli_connect(DBHOST,DBUSER,PASSWORD,DB);
    if(!$conexion){
        mysqli_error();
        echo "no se pudo conectar a la base";
    }
    return $conexion;
}

$conexion = connect();
//var_dump($conexion);

?>