<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if (isset($_SESSION['usuario'])) {
	$usuario = $_SESSION['usuario'];
	try {
		#conexion con la Base de Datos
		$conexion = new PDO('mysql:host=localhost;dbname=bancopuma','root','');
		#se hace una consulta de los datos del cliente y se almacenan los resultados
		$resultados = $conexion->query("SELECT * FROM datosCliente WHERE id_cliente = $usuario");
		foreach ($resultados as $fila) {
			$nombre_usuario = $fila['nombre_cliente'];
		}

	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
		require 'views/cliente.view.php';
} else {
	header('Location: login.php');
	die();
}


?>