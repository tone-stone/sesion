<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include("conexion.php");
        $tbl_name = "users";
        $nombre = $_POST['usuario'];
        $contra = $_POST['contra'];

        $sql = "INSERT INTO $tbl_name (nombre,contra) VALUES ('$nombre','$contra')";
        if(mysqli_query($conexion, $sql)){
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
        //Cerrar Base de Datos
        mysqli_close($conexion); 
    ?>
    <a href="index.html">Regresar a Login</a></br>  
</body>
</html>