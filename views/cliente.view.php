<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/perfil.css">
	<title>Bancopuma</title>
</head>
<body>
	<header>
		<a class="izquierda" href="#">
			<img class="logo" src="img/logo.png" alt="">
			<p>Bancopuma</p>
		</a>
		<div class="cerrar">
			<a href="logout.php">Cierra Sesión</a>
		</div>
	</header>
	<div class="content">
		<div class="consulta-box">
			<div class="barra-info">
				<img src="img/user.png" alt="">
				<?php if (!empty($nombre_usuario)):?>
					<h4>
						<?php echo $nombre_usuario; ?>
					</h4>
				<?php endif; ?>
			</div>
			<div class="opciones-box">
				<div class="filtros-box">
					<a href="" class="filtro">Información personal</a>
					<a href="" class="filtro">Cuenta</a>
					<a href="" class="filtro">Ver préstamos</a>
				</div>
				<div class="resultados-box">
					<h5>Resultados</h5>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<p>Facultad de Ingeniería, UNAM</p>
	</footer>
</body>
</html>