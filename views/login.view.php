<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Bancopuma</title>
</head>
<body>
	<header>
		<div class="izquierda">
			<img class="logo" src="img/logo.png" alt="">
			<p>Bancopuma</p>
		</div>
	</header>
	<div class="content">
		<div class="log-box">
			<h4>Iniciar Sesión</h4>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name="login">
				<input class="text" type="text" placeholder="Número de cliente" name="usuario">
				<input class="text"type="password" name="password" id="" placeholder="Contraseña">
				<input class="button" type="submit" value="Ingresar">
				<?php if (!empty($errores)):?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				<?php endif; ?>
				</div>
			</form>
		</div>
	</div>
	<footer>
		<p>Facultad de Ingeniería, UNAM</p>
	</footer>
</body>
</html>