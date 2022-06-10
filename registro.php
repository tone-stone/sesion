<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">REGISTRO DE USUARIOS</h1>
    <table border="" width="400" cellspacing="2" cellpadding="15" align="center" bgcolor="#E0FFFF">
    <tbody>
        <tr><td align="center">
        <form action="registrar.php" method="post">
            <p><strong>USUARIO:  <input maxlength="10" name="usuario" type="text" value="" placeholder="USUARIO" /></strong></p>
            <p><strong>CLAVE:       <input maxlength="8" name="contra" type="password" value="" placeholder="CONTRASEÑA" /></strong></p>
            <p><button name="submit" type="submit"><strong>REGISTRAR</strong> </button></p>
        </form></td>
        </tr>
    </tbody>
    </table>
    <table border="2" width="400" cellspacing="2" cellpadding="15" align="center">
        <tbody>
            <tr bgcolor="#BBFFFF">
                <td align="center"><a href="index.html">SALIR</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>