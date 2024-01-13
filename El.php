<!DOCTYPE html>
<html>

	<head>

		<title> Eliminar </title>

	</head>

	<body>

		<?php  

			include('include/config.inc');
			$conexion = mysqli_connect($servidor, $usuario,$contraseña, $basededatos);
			mysqli_set_charset($conexion,"utf8");

			$ID = $_REQUEST['ID'];

			$consulta = "call DelA ('$ID');";
			echo ($consulta);

			$resultado = mysqli_query($conexion ,$consulta) or die ("No se puede eliminar el registro.");
			if ($resultado) {
				
				echo "El registro fue elimininado de forma satisfactoria. <br>";
				header("Location: Mostrar.php");

			} else {

				echo ("Surgio un problema al momento de eliminar el registro. <br>");
				echo ("El problema es: . <br>");
				echo ("Codigo del error. <br>". mysql_errno()."<br><br>");
				echo ("Descripcion del error. <br>".mysql_error()."<br><br>");

			}	

			mysqli_close($conexion);

		?>

	</body>

</html>