<?php


class inscripcionModel extends Model
{

	public function inscribir($catedra, $usuario){
		$this->db->query("INSERT INTO p_alumnos_catedras (id_alumno, id_catedra)
		VALUES ('$usuario', '$catedra' ");

	}
	public function catedra($materia){
		$this->db->query("select * from catedras where id_materia = '$materia'");
		return $this->db->fetchAll();
	}
}
//select * from catedras where id_materia = 1
//select * from catedras where id_materia = $materia
//"SELECT campo FROM preguntas WHERE campo = '$respuesta' ";
/*

*/
?>
