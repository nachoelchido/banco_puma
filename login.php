<?php 

	session_start();

	if(isset($_SESSION['usuario'])){ //Si hay una sesión de "usuario" iniciada
		header('Location: index.php'); //se abre el perfil del usuario
		die();
	}

	$errores = '';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$usuario = filter_var($_POST['usuario'],FILTER_SANITIZE_STRING);
		$password = $_POST['password'];

		try {
			$conexion = new PDO('mysql:host=localhost;dbname=bancopuma','root','');
			#conexion con la Base de Datos
		} catch (PDOException $e) {
			echo "Error:" . $e->getMessage();
		}

		$statement = $conexion->prepare('
			SELECT * FROM accesoCliente WHERE id_cliente = :usuario AND contra_cliente = :password'
		);
		$statement->execute(array(
			':usuario' => $usuario,
			':password' =>$password
		));
		$resultado = $statement->fetch();

		if ($resultado !== false) {
			$_SESSION['usuario'] = $usuario;
			header('Location: index.php');
		} else {
			$errores .= '<li>Datos Incorrectos</li>';
		}
	}
	require 'views/login.view.php';
?>