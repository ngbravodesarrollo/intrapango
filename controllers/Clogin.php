<?php
	// controllers/login.php

	// incluyo todo lo que esta en fw.php y lo que esta en Mlogin.php
	require '../fw/fw.php';
	require '../models/MPersonas.php';
	require '../views/vlogin.php';
	// creo un objeto a partir de la clase mlogin que cree en el archivo Mlogin.php

	if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "logout") {
		session_destroy();
	}
	$error;
	if(isset($_POST['user'],$_POST['pass'])){
		$usuario = (new MPersonas)->validarUsuario($_POST['user'],sha1($_POST['pass']."pangolin"));

		if($usuario == TRUE){
			if(!isset($_SESSION)){
				session_start();
			}
			$_SESSION['nombre'] = $usuario['usuario'];
			$_SESSION['id_rol'] = $usuario['id_rol'];
			$_SESSION['id'] = $usuario['id'];

			if($_SESSION['id_rol'] == 60){
				header("location:maestros");
			}
			if($_SESSION['id_rol'] == 50){
				header("location:alumnos");
			}
<<<<<<< HEAD
		}else{
			header("location:login");
=======
>>>>>>> fa976916c2f8423dbae6efb9bc5f035949edf528
		}
		else{
			$error="usuario invalido";
		}
	}
	$v = new vlogin;
	if (isset($error)) {
		$v->error= "no encontro usuario";
	}
	$v->render();
	

	function logout(){
		 session_destroy();
		 header("location:login");
	}

?>
