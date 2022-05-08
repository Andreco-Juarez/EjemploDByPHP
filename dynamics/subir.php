<?php

//incluye la configuracion de mysql
include ("./config.php");
$conexion = connect();

//recibe los valores del formulario
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$valor3 = $_POST["valor3"];
$valor4 = $_POST["valor4"];

//creo una peticion para la base de datos
$peticion = "INSERT INTO tablaPrueba VALUES ('$valor1', '$valor2', $valor3, '$valor4')";

//realizo la peticion a la base de datos
$query = mysqli_query($conexion,$peticion);


//compruebo que la query me regrese un booleano true para verificar que se hizo correctamenta la peticion
if($query === true){
    //Muestro en la pagina que se realizo de forma correcta la peticion
    echo "<h1>Los Datos se Subieron Correctamente</h1>";
}else{
    //Muestro en la pagina que se realizo de forma Incorrecta la peticion
    echo "<h1>Fallo al Subir los datos</h1>";
}



?>