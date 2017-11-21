<?php 
require '../fw/fw.php';
require '../models/usuarios.php';
require '../views/login.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && isset($_POST['pass'])) {
    	try {
    		$name= $_POST['name'];
    		$pass= $_POST['pass'];

    		$user= (new Usuarios)->validate($name,$pass);

    		if ($user) {
    			//es valido
    			
				$_SESSION['nombre']=$user['nombre'];
				$_SESSION['mail']=$user['mail'];

				if (isset($_SESSION['errorLogin'])) {
					unset($_SESSION['errorLogin']);
				}

    			header('location:home');
    		}
    		else{
    			//usuario invalido
    			if (session_status() == PHP_SESSION_NONE) {
				    session_start();
				}
				$_SESSION['errorLogin']="Usuario invalido";
    			header('location:login"');
    		}


    	} catch (Exception $e) {
    		
    	}
    }
}
else{
	if (isset($_SESSION['errorLogin'])) {
		$error= $_SESSION['errorLogin'];
	}

    $view = new LoginView;
    $view->render();
}

?>