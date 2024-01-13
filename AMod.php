<?php

	include('include/config.inc');

	$misql = mysqli_connect($servidor, $usuario,$contraseña, $basededatos);
	mysqli_set_charset($misql,"utf8");

	$ID = $_POST["idA"];
	$Nm = $_POST["N"];
    $Dir = $_POST["D"];
	$E = $_POST["E"];
	
	$query = "call UptA ('$ID','$Nm','$Dir','$E');";

	echo $query;
	$consulta = $misql->query($query);

	if ($consulta) {
		
		echo "Registro Actualizado.";
		header("Location: Mostrar.php");

	} else {

		echo "ERROR : No se pudo editar.";

	}

?>