<!DOCTYPE html>
<html>

	<head>

		<title> Crear base de datos </title>

	</head>

	<body>

		<h1> Base de Datos </h1>

		<?php 

			$usuario = "root";
			$contraseña = "";
			$servidor = "localhost";
			$basededatos = "test";

			$conexion = mysqli_connect($servidor, $usuario, $contraseña) or die("Error al conectar con el sevidor.");

			$db = mysqli_select_db($conexion ,$basededatos) or die("No se pudo conectar con la base de datos.");

			$consulta = "CREATE DATABASE BD_A;";
			$EC = mysqli_query($conexion, $consulta) or die ("Error al crear la base de datos");

			if ($EC) {
				
				echo ("La Base de Datos se creo de forma satisfactoria. <br>");

			}else{

				echo ("Surgio un problema para crear la base de datos. <br>");
				echo ("El problema es: <br>");
				echo ("Codigo de error : <b>" . mysql_errno() . "</b> <br>");

			}

			$basededatos = "BD_A";

			$db = mysqli_select_db($conexion, $basededatos) or die("Ah habido un error al conectar con la base de datos.");

			$consulta = "CREATE TABLE IF NOT EXISTS TBA (ID int PRIMARY KEY AUTO_INCREMENT, Nm varchar(20), Dir varchar(50), E int)";

			$EC = mysqli_query($conexion, $consulta) or die ("Error al crear la tabla.");

			if ($EC) {
				
				echo ("La tabla fue creada. <br>");

			} else {

				echo("Surgio un problema al crear la tabla. <br>");
				echo("El problema es : <br>");
				echo("Codigo del error : <b>" . mysql_errno() . "</b> <br>");
				echo("Descripcion de error : <b>" . mysql_error() . "</b> <br>");

			}

			$consulta = "CREATE PROCEDURE InsA
			(

				IN `par_Nm` VARCHAR(50),
				IN `par_Dir` VARCHAR(50),
				IN `par_E` int

			)

			INSERT INTO TBA (Nm,Dir,E) values (par_Nm, par_Dir, par_E);

			";	

			$EC = mysqli_query($conexion, $consulta) or die ("Hubo un error al crear el procedimiento de insertar alumno.");

			if ($EC) {
			
				echo("El procedimiento fue creado de forma correcta. <br>");

			} else {

				echo("Surgio uun problema al crear el procedimiento. <br>");
				echo("El problema es : <br>");
				echo("Codigo de error : <b> " . mysql_errno() . "</b> <br>");
				echo("Descripcion : <b> " . mysql_error() . "</b><br>");

			}

			$consulta = "CREATE PROCEDURE UptA 
			(

				IN par_ID int,
				IN par_Nm VARCHAR(50),
				IN par_Dir VARCHAR(50),
				IN par_E int

			)

				UPDATE TBA set Nm = par_Nm, Dir = par_Dir, E = par_E where ID = par_ID;

			";

			$EC = mysqli_query($conexion, $consulta) or die ("Hubo un error al crear el procedimiento de modificar.");

			if ($EC) {
			
				echo("El procedimiento fue creado de forma correcta. <br>");

			} else {

				echo("Surgio uun problema al crear el procedimiento. <br>");
				echo("El problema es : <br>");
				echo("Codigo de error : <b> " . mysql_errno() . "</b> <br>");
				echo("Descripcion : <b> " . mysql_error() . "</b><br>");

			}

			$consulta = "CREATE PROCEDURE DelA
			(

				IN par_ID int
				
			) 

			DELETE FROM TBA where ID = par_ID;

			";

			$EC = mysqli_query($conexion, $consulta) or die ("Hubo un error al crear el procedimiento de eliminar alumno.");

			if ($EC) {
				
				echo("El procedimiento fue creado de forma correcta. <br>");

			} else {

				echo("Surgio uun problema al crear el procedimiento. <br>");
				echo("El problema es : <br>");
				echo("Codigo de error : <b> " . mysql_errno() . "</b> <br>");
				echo("Descripcion : <b> " . mysql_error() . "</b><br>");

			}

			$consulta = "CREATE PROCEDURE SelA
			(

			)

			SELECT * FROM TBA;

			";

			$EC = mysqli_query($conexion, $consulta) or die ("Hubo un error al crear el procedimiento de seleccionar alumno.");

			if ($EC) {
				
				echo("El procedimiento fue creado de forma correcta. <br>");

			} else {

				echo("Surgio uun problema al crear el procedimiento. <br>");
				echo("El problema es : <br>");
				echo("Codigo de error : <b> " . mysql_errno() . "</b> <br>");
				echo("Descripcion : <b> " . mysql_error() . "</b><br>");

			}

			$consulta = "CREATE PROCEDURE SelxID
			(

				IN par_ID int

			)
			
			SELECT * FROM TBA where ID = par_ID;

			";

			$EC = mysqli_query($conexion, $consulta) or die ("Hubo un error al crear el procedimiento de guardar cambios alumno.");

			if ($EC) {
				
				echo("El procedimiento fue creado de forma correcta. <br>");

			} else {

				echo("Surgio uun problema al crear el procedimiento. <br>");
				echo("El problema es : <br>");
				echo("Codigo de error : <b> " . mysql_errno() . "</b> <br>");
				echo("Descripcion : <b> " . mysql_error() . "</b><br>");

			}

		?>

		<hr>

		<a href="index.html"> Regresar al menu </a>

	</body>

</html>