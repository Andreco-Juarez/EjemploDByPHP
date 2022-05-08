<?php
include("./config.php");
$conexion = connect();


$busqueda = $_POST["busq"];
$colBusq = $_POST["colBusq"];

$peticion = "DELETE FROM tablaPrueba WHERE
            $colBusq='$busqueda'";


$query = mysqli_query($conexion,$peticion);
if($query === true){
    echo "<h1>Los Datos se Borraron Correctamente</h1>";
}else{
    echo "<h1>Fallo al Borrar los datos</h1>";
}

?>