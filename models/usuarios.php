<?php 


class Usuarios extends Model
{	
	public function validate($name,$pass){
		$this->db->query('SELECT id from usuario WHERE name=$name AND pass=$pass');
		return $this->db->fetch();
	}

}
?>