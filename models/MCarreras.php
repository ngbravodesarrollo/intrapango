<?php 
/**
* 
*/
class MCarreras extends Model
{
	private $table;

	public function __construct(){
		parent::__construct();
		$table= "carreras";
	}

	public function getByAlumno($idusuario){
		$this->db->query("SELECT c.id, c.nombre, c.plan_anio FROM '$this->table' as c INNER JOIN p_carreras_alumnos as ca on ca.id_alumno= '$idusuario");
		return $this->db->fetchAll();
	}
}
 ?>