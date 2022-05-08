<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <thead>
            <tr>
                <th>Valor1</th>
                <th>Valor2</th>
                <th>Valor3</th>
                <th>Valor4</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("./config.php");
            $conexion = connect();

            $peticion = "SELECT * FROM tablaPrueba";

            $query = mysqli_query($conexion, $peticion);

            while($row = mysqli_fetch_array($query,MYSQLI_NUM)){
                echo "<tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                </tr>";
            }


            ?>
        </tbody>
    </table>
</body>
</html>