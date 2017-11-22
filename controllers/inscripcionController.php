<?php
require '../fw/fw.php';
require '../models/inscripcionModel.php';
require '../models/MMaterias.php';
require '../views/inscripcion.php';

if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "logout") {
  session_destroy();
}

if(!isset($_POST["carrerita"])){
$valor;
$view = new inscripcionView;

if (isset($_POST["catedra"])){
  $aux = $_POST["catedra"];

  $valor = (new inscripcionModel)->catedra($aux);
  $view->valor=$valor;

}
$view->materias = (new MMaterias)->materias();
$view->render();
}

else{
  $catedra = $_POST["inscripcion"];
  $sesion = $_SESSION["id"];
  $lel = (new inscripcionModel)->inscribir($catedra,$sesion);
}

/*
public function inscribir($catedra, $usuario){
  $this->db->query("INSERT INTO p_alumnos_catedras (id_alumno, id_catedra)
  VALUES ('$usuario', '$catedra' ");
*/
