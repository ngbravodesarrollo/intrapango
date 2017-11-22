<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
<header></header>
<?php
			$y = count($this->aprobadas);
		 for ($i=0;$i<$y;$i++){
			 if ($this->aprobadas[$i]["nota"]<=4){
			 ?>
			 <p> <?=$this->aprobadas[$i]["nota"]?> <?=$this->aprobadas[$i]["nombre"]?></p>
			 
	 <?php }} ?>

<footer></footer>
</body>
</html>
