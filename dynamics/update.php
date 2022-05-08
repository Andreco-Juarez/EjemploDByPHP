<?php
//incluye la configuracion de mysql
include("./config.php");
$conexion = connect();

//recibe los valores del formulario
$col = $_POST["col"];
$val = $_POST["val"];
$busqueda = $_POST["busq"];
$colBusq = $_POST["colBusq"];

//creo una peticion para la base de datos
$peticion = "UPDATE tablaPrueba
            SET $col='$val'
            WHERE $colBusq='$busqueda'";


//hago la peticion a la DB
$query = mysqli_query($conexion,$peticion);

//compruebo que la query me regrese un booleano true para verificar que se hizo correctamenta la peticion
if($query === true){
    echo "<h1>Los Datos se Actualizaron Correctamente</h1>";
}else{
    echo "<h1>Fallo al actualizar los datos</h1>";
}

?>