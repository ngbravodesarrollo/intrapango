<!DOCTYPE html>
<html>
<head>
	<title>Trabajos Practicos</title>
</head>
<body>
<header></header>
<main>
<div class="row">
	<form method="get" action=""> 
		<label for="carrera">Carrera</label>
		<select name="carrera">
			<?php foreach ($this->carreras as $key => $value) { ?>
				<?php if($this->carrera == $value['id']){?>
			<option selected value=<?= $value['id'] ?>><?= $value['nombre'] ?></option>		
				<?php } else{ ?>
			<option value=<?= $value['id'] ?>><?= $value['nombre'] ?></option>
				<?php }
			} ?>
		</select>
		<label for="materia">Materia</label>
		<select name="materia">
			<?php foreach ($this->materias as $key => $value) { ?>
			<option class=<?= $value['carrera'] ?> value=<?= $value['id'] ?>><?= $value['nombre'] ?></option>

			<?php if($this->materia == $value['id']){?>
			<option selected class=<?= $value['carrera'] ?> value=<?= $value['id'] ?>><?= $value['nombre'] ?></option>
				<?php } else{ ?>
			<option class=<?= $value['carrera'] ?> value=<?= $value['id'] ?>><?= $value['nombre'] ?></option>
				<?php }
			} ?>

			<?php } ?>
		</select>
	</form>
</div>
<?php 
if (isset($this->tps)) { ?>
<div class="row">
	<table>
		<thead>
			<th>
				<td>Id</td>
				<td>Nombre</td>
				<td>Descripción</td>
				<td>Opciones</td>
			</th>
		</thead>
		<tbody>
			<?php foreach ($this->tps as $key => $value) {
			?>
			<tr>
				<td>$value["id"]</td>
				<td>$value["titulo"]</td>
				<td>$value["descripcion"]</td>
				<td><input type="buttom" value="Hacer"></td>
			</tr>
			<?php	
			} ?>
		</tbody>
	</table>
</div>
<?php }  ?>
</main>
<footer></footer>
</body>
</html>