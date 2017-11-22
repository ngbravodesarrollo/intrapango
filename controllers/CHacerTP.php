<?php 
	require '../fw/fw.php';
	require '../models/MConsignas.php';
	require '../models/MRespuestas.php';
	require '../views/vhacertp.php';
	require '../views/vtpfinalizado.php';


	if (!isset($_SESSION["userid"])) {
		//vista login
		header('location:login');
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$respuestas= $_POST["respuestas"];
		$consignas= $_POST["consignas"];

		$idAlumno= $_SESSION["userid"];

		$objModel= new MRespuestas;

		$objModel->salvar($respuestas,$consignas,$idAlumno);
	}
	if (!isset($_GET["tp"])) {
		//vista error
		die('Accedio mal');
	}

	if (!is_numeric($_GET["tp"])) {
		//vista error
		die('Ingreso mal tp');
	}
	//get tp
	$idTp=$_GET["tp"];

	$objTP = (new MTrabajosPracticos)->getByID($idTp);
	
	$view = new vhacertp;

	$view->consignas = (new MConsignas)->getByTp($idTp);

	$view->titulo = $objTP["titulo"];

	$view->render();
?>