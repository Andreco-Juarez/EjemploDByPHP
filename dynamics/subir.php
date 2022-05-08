<?php

include ("./config.php");
$conexion = connect();
//var_dump($conexion);

$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$valor3 = $_POST["valor3"];
$valor4 = $_POST["valor4"];

$peticion = "INSERT INTO tablaPrueba VALUES ('$valor1', '$valor2', $valor3, '$valor4')";

$query = mysqli_query($conexion,$peticion);

if($query === true){
    echo "<h1>Los Datos se Subieron Correctamente</h1>";
}else{
    echo "<h1>Fallo al Subir los datos</h1>";
}



?>