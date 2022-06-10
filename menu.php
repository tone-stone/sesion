<?php
	session_start();

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

	} else {
   		echo "Esta p&aacute;gina es solo para usuarios registrados.<br>";
   		header('Location: index3.html');
		exit;
	}

	$now = time();

	if($now > $_SESSION['expire']) {
		session_destroy();
		echo "Su sesion a terminado";
		header('Location: index4.html');
		exit;
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manual de Inicio de Sesión - General</title>
<meta charset="utf-8">

</head>
<body>

	<center>  
    <table width="90%" border="0">
    <tr>
    	<td width="10%"><img src="img/logo.png" width="250" height="87" alt="CESUN" /></td>
        <td width="70%"><H1><center>
       	    Manual de Inicio de Sesión<br> <br />
        	CESUN UNIVERSIDAD
        	</center></H1></td>
 		<td width="10%"><center><H2>Bienvenidos </H2><a href=logout.php>Cerrar Sesion</a></center></td>
 	</table>
	<br /><br />		
    <div>Copyright © CESUN	</div>
	</center>
</body>
</html>
