<?php 
/**
* 
*/
class MTrabajosPracticos extends Model
{
	private $table;

	public function __construct(){
		parent::__construct();
		$table= "trabajos_practicos";
	}

	public function getTPsByCatedra($idcatedra){
		try {
			$this->db->query("SELECT id, titulo, descripcion FROM '$this->table' WHERE id_catedra= '$idcatedra'");

			if ($this->db->numRows()>0) {
				return $this->db->fetchAll();
			}			

		} catch (Exception $e) {
			
		}
	}

	public function getTPByID($id){
		try {
			$this->db->query("SELECT id, titulo, descripcion FROM '$this->table' WHERE id= '$id'");

			if ($this->db->numRows()>0) {
				return $this->db->fetch();
			}			

		} catch (Exception $e) {
			
		}
	}
}

