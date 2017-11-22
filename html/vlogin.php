<!DOCTYPE html>
<html>
<head>
	<title>Intrapango-Login</title>
	<link rel="stylesheet" type="text/css" href="estilo-login">
</head>
<body>
<!-- En este form decido a donde voy despues del login 
en este caso estoy redireccionando a mi mismo -->
<?php if (isset($this->error)) { ?>
	<div class="error"> No se encontro usuario </div>
<?php } ?>

<form action="" method="POST">
	<input type="text" name="user" id="user" placeholder="Usuario">
	<input type="password" name="pass" id="pass" placeholder="Contraseña">
	<input type="submit" name="enviar" value="Entrar" id="ingresa">
</form>
</body>
</html>