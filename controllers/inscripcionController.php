<?php
require '../fw/fw.php';
require '../models/inscripcionModel.php';
require '../views/inscripcion.php';


if (isset($_materia)){

  
}



else{

$view = new inscripcionView;
$view->materias = (new inscripcionModel)->materias();
$view->render();
}
