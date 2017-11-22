<?php
require '../fw/fw.php';

require '../models/mveraprobadas.php';
require '../views/veraprobadas.php';

if (!isset($_SESSION["id"])) {
	//header("location:controllers/Clogin.php");
  header("location:login");
}
else{
	$userid= $_SESSION["id"];
}


$view= new veraprobadasView;
$view->aprobadas=(new Mveraprobadas)->ver($userid);



$view->render();
