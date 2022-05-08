<?php
//incluye la configuracion de mysql
include("./config.php");
$conexion = connect();

//recibe los valores del formulario
$busqueda = $_POST["busq"];
$colBusq = $_POST["colBusq"];

//creo una peticion para la base de datos
$peticion = "DELETE FROM tablaPrueba WHERE
            $colBusq='$busqueda'";

//hago la peticion a la DB
$query = mysqli_query($conexion,$peticion);

//compruebo que la query me regrese un booleano true para verificar que se hizo correctamenta la peticion

if($query === true){
    echo "<h1>Los Datos se Borraron Correctamente</h1>";
}else{
    echo "<h1>Fallo al Borrar los datos</h1>";
}

?>