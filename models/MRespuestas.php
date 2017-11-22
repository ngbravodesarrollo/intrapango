<?php 
/**
* 
*/
class MRespuestas extends Model
{
	private $table;
	public function __construct(){
		parent::__construct();
		$table="respuestas";
	}

	public function salvar($respuestas,$idalumno,$idconsignas){
		try {
			for ($i=0; $i < count($idconsignas) ; $i++) { 
				$this->db->query("INSERT INTO '$table' (id_consigna,id_alumno,respuesta) values('$idconsignas[i]','$idalumno','$respuestas[i]',)");
			}	
		} catch (Exception $e) {
			
		}
	}
}
?>