<?php 
/*El index es lo primero que se ejecuta al abrir la aplicación web
*/

session_start();

if(isset($_SESSION['usuario'])){ //Si hay una sesión de "usuario" iniciada
	header('Location: cliente.php'); //se abre el perfil del usuario
	die();
}	else{
	header('Location: login.php'); //si no, se redirige a la página de login
}
?>