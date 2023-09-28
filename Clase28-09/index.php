<?php 

    include("conexion.php")

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clase 1 php</title>
</head>
<body>

    <?php

        $consulta = "SELECT * FROM alumnos";
        $respuesta = mysqli_query($conexion, $consulta);

        while($row=mysqli_fetch_assoc($respuesta)){
            echo "<h1>El id es: ".$row["id_alumno"]."</h1>";
            echo "<br>";
            echo "<h1>El nombre es: ".$row["nombre"]."</h1>";
            echo "<br>";
            echo "<h1>El apellido es: ".$row["apellido"]."</h1>";
            echo "<br>";
            echo "<h1>El correo es: ".$row["correo"]."</h1>";
            echo "<br>";
        }
    ?>
    
</body>
</html>