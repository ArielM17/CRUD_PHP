<!DOCTYPE html>
<html>

	<head>

		<title> Modificar </title>

	</head>

	<body>

		<h1> Modificar </h1>

		<?php  

			$ID = $_REQUEST['ID'];

			include('include/config.inc');

			$conexion = mysqli_connect($servidor, $usuario, $contraseña, $basededatos);
			mysqli_set_charset($conexion ,"utf8");

			$query = "call SelxID ('$ID');";
			$consulta = $conexion->query($query);

			$row = $consulta->fetch_assoc();

			mysqli_close($conexion);

		?>

		<h2> Informacion Seleccionada </h2>

		<form method="post" name="FmV" action="AMod.php">

			idalumno : <input type="text" name="idA2" value="<?php echo $row['ID'];?>"><br><br>
			<input type="text" name="idA" style="visibility: hidden" value="<?php echo $row['ID'];?>">
			nombre :  <input type="text" name="N" value="<?php echo $row['Nm'];?>"><br><br>
			direccion :  <input type="text" name="D" value="<?php echo $row['Dir'];?>"><br><br>
			edad:<input type="text" name="E" value="<?php echo $row['E'];?>"><br><br>

			<hr>

			<input type="submit" name="btnModificar" value="Modificar">

		</form>

	</body>

</html>