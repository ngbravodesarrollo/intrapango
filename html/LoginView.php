<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<header>
	
</header>
<main>
	<div class="conteiner">
		<?php 
			if (isset($error)) { ?>
		<div class="error"><?= $error ?> </div>
		
		<?php 
			} ?>
		<form method="post" action="">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre">
			<label for="pass">Password</label>
			<input type="password" name="pass">
			<input type="submit" value="Loing">
		</form>
	</div>
</main>
<footer>
	
</footer>
</body>
</html>