<?php 
/**
* 
*/
class MConsignas extends Model
{
	private $table;

	public function __construct(){
		parent::__construct();
		$table= "consignas";
	}

	public function getByTp($idTp){
		try {
			$this->db->query("SELECT id, titulo, descripcion FROM '$this->table' WHERE id= '$id'");

			if ($this->db->numRows()>0) {
				return $this->db->fetchAll();
			}	
		} catch (Exception $e) {
			
		}
	}

}
 ?>