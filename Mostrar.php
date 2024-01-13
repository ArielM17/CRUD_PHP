<!DOCTYPE html>
<html>

	<head>

		<title> Mostrar </title>

	</head>

	<body>

		<h1> Mostrar </h1>

		<?php  

			include('include/config.inc');

			$conexion = mysqli_connect($servidor, $usuario, $contraseña, $basededatos);
			mysqli_set_charset($conexion ,"utf8");

			$query = "call SelA();";

			$resultado = mysqli_query($conexion, $query) or die ("No se pueden mostrar los registros.");

			echo "<table width='100%' border='1' aling='center'>";
			echo "<tr>";
			echo "<th> ID </th> 
				 <th> Nombre </th> 
				 <th> Direccion </th> 
				 <th> Edad </th> 
				 <th></th>
				 <th></th>";
			echo "</tr>";

			while ($row = mysqli_fetch_array($resultado)) {
				
				echo "<tr>";
				echo "<td>",$row['ID'],"</td>";
				echo "<td>",$row['Nm'],"</td>";
				echo "<td>",$row['Dir'],"</td>";
				echo "<td>",$row['E'],"</td>";
				echo "<td>"."<a href='El.php?ID=".$row['ID']."'>Eliminar</a>"."</td>";
				echo "<td>"."<a href='Mod.php?ID=".$row['ID']."'>Modificar</a>"."</td>";				
				echo "</tr>";

			}

			echo "</table>";

			mysqli_close($conexion);

		?>

		<hr>

		<a href="index.html"> Regresar al menu </a>


	</body>

</html>