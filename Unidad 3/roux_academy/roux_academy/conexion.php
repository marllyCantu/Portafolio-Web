<?php
	$bd='rouxacademy';
	$servidor='localhost';
	$usuario='admin';
	$contraseña='50921a9d00165ad1e22c59cc77eab59b10f61e9dd23e881e';
	
	function conectar($servidor, $usuario, $contraseña, $bd){
		//Conexion a la base de datos
		$conexion=mysqli_connect($servidor, $usuario, $contraseña, $bd);

		if(!$conexion){
			die('Conexion con base de datos '. $bd . ' fallida: '. mysql_connect_error());
			echo "<script>console.log('No se pudo conectar a la bd')</script>";
		}else{
			echo "<script>console.log('Conectado a la bd')</script>";
			//echo "Conectado a la base de datos $bd <br/>";
		}

	/*$nombre='nuevo';
	$consulta="INSERT INTO usuarios(ID_Usuario, nombre, contra) VALUES(5, '$nombre', MD5('otro'))";
	if(mysqli_query($conexion,$consulta)){
	echo "Jaló el asunto";
	}else{
		echo "Falló el asunto";
	}

	$nombre='nuevo';
	$consulta="INSERT INTO asistentes(ID_Asistente, nombre, company, email, tipo, comentario, referencia) VALUES(null, 'uno', 'upv', '1930@gmail.com', 'comentario', 'va el coment', 'amigos')";
	if(mysqli_query($conexion,$consulta)){
	echo "Jaló el asunto";
	}else{
		echo "Falló el asunto";
	}

$consulta="SELECT * FROM `usuarios` ";

	$registros=mysqli_query($conexion,$consulta);
	if ($registros->num_rows>0) {
		# code...
		while ($fila = $registros->fetch_assoc()) {
			# code...
			echo "ID: ". $fila["ID_Usuario"]. "<br>";
			echo "Nombre: ". $fila["nombre"]. "<br>";
			echo "Contra: ". $fila["contra"]. "<br>";
		}
	}
	else{
		echo "Error al hacer la consulta";
	}*/
		return $conexion;
	}

	$conexion=conectar($servidor, $usuario, $contraseña, $bd);
	function validar_usuario_bd($usuario, $contraseña, $conexion){
		$query="SELECT 1 FROM `usuarios` WHERE nombre='$usuario' and contra=MD5('$contraseña')";
		//echo $query . '<br/>';

		$resultado=mysqli_query($conexion,$query) or die("Error al ejecutar la consulta");
		if(mysqli_num_rows($resultado)==0){
			return false;
		}else{
			return true;
		}		
	}

	
	function desconectar($conexion){
		mysqli_close($conexion);
	}
?>
