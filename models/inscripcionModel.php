<?php


class inscripcionModel extends Model
{
	public function materias(){
		$this->db->query('SELECT id,nombre from Materias' );
		return $this->db->fetchAll();
	}

	public function agregarmaterias($nombre){
		$this->db->query('INSERT INTO materias (nombre)
		VALUES ($materias	);');
		return $this->db->fetchAll();
	}

	public function inscribir($idmaderia, $usuario){
		$this->db->query('');

	}
	public function catedra($materia){
		$this->db->query("select * from catedras where id_materia = '$materia'");
		return $this->db->fetchAll();
	}
}
//select * from catedras where id_materia = 1
//select * from catedras where id_materia = $materia
//"SELECT campo FROM preguntas WHERE campo = '$respuesta' ";

?>
