<?php
session_start();
?>

<?php
    include("conexion.php");
    $username = $_POST['nombre'];
    $compara = $_POST['nombre'];
    $password = $_POST['clave'];
 
    // Consulta de la base de datos
    $sql = "SELECT * FROM $tbl_name WHERE nombre = '$username'";

    // Resultado de la BD
    $result = $conexion->query($sql);

    //Traer el renglón encontrado 
    $row = $result->fetch_array(MYSQLI_ASSOC);
    
    if ($row['contra'] == $password && $row['nombre'] == $username){
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (5 * 200);
        echo "Bienvenido! " . $_SESSION['username'];
        header('Location: menu.php');
        if ($compara ==  ''){
            unset ($SESSION['username']);
            session_destroy();
	        header('Location: index.html');
        }
        }else{
            echo "Username o Password estan incorrectos.";
            header('Location: index2.html');
        }
 
    mysqli_close($conexion); 
?>
