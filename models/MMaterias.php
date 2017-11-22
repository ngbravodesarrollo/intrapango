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

	public function getByCarreras($carreras){
		$this->db->query("SELECT c.nombre as 'carrera', c.id as 'idcarrera', m.nombre, m.id FROM p_carreras_materias as cm INNER JOIN carreras as c on cm.id_carrera= c.id INNER JOIN materias as m on cm.id_materia= m.id WHERE c.id in ('$carreras')");
		return $this->db->fetchAll();
	}
}

?>
