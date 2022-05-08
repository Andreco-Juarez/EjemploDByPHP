<?php

//defino unas constantes que van a tener los valores necesarias para la conexion
define("DBHOST","localhost");//host o ip del servidor de la base de datos
define("DBUSER","root");//usuario para la base de datos
define("PASSWORD","");//contraseña del usuario
define("DB","actividad");//nombre de la Base de datos


//defino funcion para la conexion que me va a ayudar a usarla en los demas archivos
function connect(){
    //funcion que conecta php con mysql
    $conexion = mysqli_connect(DBHOST,DBUSER,PASSWORD,DB);
    //compruebo que haya conexion
    if(!$conexion){
        mysqli_error();
        echo "no se pudo conectar a la base";
    }
    //regreso la variable que tiene la conexion
    return $conexion;
}

?>