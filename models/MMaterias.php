<?php


class MMaterias extends Model
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

}

?>
