<?php


class Mveraprobadas extends Model{
  public function ver($usuario){
    $this->db->query("select * from parciales p
    left join catedras c on p.id_catedra = c.id
    left join materias m on c.id_materia = m.id where id_alumno='$usuario'");

		return $this->db->fetchAll();

	}

}
