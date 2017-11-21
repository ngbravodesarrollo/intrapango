<?php
	// MODELS/Mlogin.php

	// incluyo el archivo Vlogin correspondiente a la vista
	// creo clase mlogin y digo que se incluya lo que esta en fw/models
	class MPersonas extends Model {
		// creo una funcion para obtener el usuario(despues la llamo desde otro archivo)
		public function validarUsuario($usuario,$clave){
				$this->db->query("SELECT id, usuario, id_rol FROM usuarios WHERE usuario ='".$usuario."' and password='".$clave."'");
				if($this->db->numRows($this->db) == 1){
					// si tuve registros retorno el array que consegui
					return $this->db->fetch();
				}
		}
	
		public function getPersonaById($id){
			$this->db->query("SELECT usuario FROM usuarios WHERE id =".$id);
				if($this->db->numRows($this->db) == 1){
					// si tuve registros retorno el array que consegui
					return $this->db->fetch();
				}
		}

		public function getCategoriaPersona($id){
			$this->db->query("SELECT pe.fk_categoria, cat.nombre_categoria
							FROM personas pe
							left join categorias cat ON cat.id_categorias = pe.fk_categoria 
							WHERE id_personas =".$id);
		}
	}


?>