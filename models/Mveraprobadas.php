<?php


class Mveraprobadas extends Model{
  public function ver($usuario){
    $this->db->query("select * from catedras where id_materia = '$materia'");
		return $this->db->fetchAll();

	}

}
