<!DOCTYPE html>
<html>
<head>
	<title>Hacer TP</title>
</head>
<body>
<header></header>
<main>
	<div class="content">
		<div class="panel">
			<div class="title">
				<h3>Trabajo practico <?= $this->titulo ?></h3>
			</div>
		</div>
		<div class="panel">
			<form method="post" action="">
		<?php foreach ($this->consignas as $key => $value) { ?>
				<div class="row">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title"><?= $value["pregunta"] ?></h4>
							<input type="hidden" name="consigna[]" value="<?= $value["id"] ?>">
							<textarea required name="respuestas[]" rows="4" cols="50">
								
							</textarea>
						</div>
					</div>
				</div>		
		<?php } ?>	
				<div class="row">
					<div class="form-group">
						<input class="buttom" type="submit" >
					</div>
				</div>
			</form>
		</div>
	</div> 
</main>
<footer></footer>
</body>
</html>