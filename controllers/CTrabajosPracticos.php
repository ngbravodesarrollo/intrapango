<?php 
	require '../fw/fw.php';
	require '../models/MTrabajosPracticos.php';
	require '../models/MMaterias.php';
	require '../models/MCarreras.php';
	require '../models/MConsignas.php';
	require '../views/vtrabajospracticos.php';

	if (!isset($_SESSION["id"])) {
		header("location:login");
	}
	//obtengo usuario
	$userid= $_SESSION["id "];	

	if (isset($_GET["carrera"]) && isset($_GET["materia"])) {
		$mat= (is_numeric($_GET["materia"])? $_GET["materia"] : -1);
		$car= (is_numeric($_GET["carrera"])? $_GET["carrera"] : -1);
	}
	else{
		$mat=-1;
		$car=-1;
	}
	$view= new vtrabajospracticos;
	//busco carreras por usuario
	$view->carreras= (new MCarreras)->getByAlumno($userid);
	//busco materias por carreras
	$view->materias= (new MMaterias)->getByCarreras(array_column($view->carreras,'id'));
	//cargo materia y carrera pre seleccionada
	$view->carrera= $car;
	$view->materia= $mat;

	$view->render();
 ?>