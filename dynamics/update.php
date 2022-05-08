<?php
include("./config.php");
$conexion = connect();

$col = $_POST["col"];
$val = $_POST["val"];
$busqueda = $_POST["busq"];
$colBusq = $_POST["colBusq"];

$peticion = "UPDATE tablaPrueba
            SET $col='$val'
            WHERE $colBusq='$busqueda'";

//var_dump($peticion);

$query = mysqli_query($conexion,$peticion);
if($query === true){
    echo "<h1>Los Datos se Actualizaron Correctamente</h1>";
}else{
    echo "<h1>Fallo al actualizar los datos</h1>";
}

?>