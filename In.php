<!DOCTYPE html>
<html>

	<head>
	
		<title> Insertando Datos </title>

	</head>

	<body>

		<h1> Insertando </h1>

		<?php  

			include('include/config.inc');
			$conexion = mysqli_connect($servidor,$usuario,$contraseña,$basededatos);
			mysqli_set_charset($conexion,"utf8");

			$N = $_POST["N"];
			$D = $_POST["D"];
			$E = $_POST["E"];

			$consulta = "call InsA('$N','$D','$E');";
			echo ($consulta);
			$resultado = mysqli_query( $conexion, $consulta) or die ("No se pudo insertar el registro.");

			if ($resultado) {
				
				echo ("El registro fue insertado de forma satisfactoria");
				header("Location:mostrar.php");

			}else {
				
				echo ("Surgio problema para insertar el registro.<br>");
				echo ("El problema es: .<br>");
				echo ("Codigo de error: .<b>".mysql_errno ()."</b><br>");
				echo ("Descripcion de error: <b>".mysql_error ()."</b><br>");
			}			

			mysqli_close($conexion);

		?>

		<hr>

		<br>

		<a href="Mostrar.php"> Mostrar Registros </a>

	</body>

</html>