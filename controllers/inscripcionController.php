<?php
require '../fw/fw.php';
require '../models/inscripcionModel.php';
require '../views/inscripcion.php';

$valor;
$view = new inscripcionView;

if (isset($_POST["catedra"])){
  $aux = $_POST["catedra"];
  echo $aux;
  $valor = (new inscripcionModel)->catedra($aux);
  $view->valor=$valor;
  var_dump($valor);
}





$view->materias = (new inscripcionModel)->materias();
$view->render();
