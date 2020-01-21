<?php
class Queries extends CI_Model{

	public function getRoles(){

		$rolesQuery = $this->db->query('SELECT * FROM roles');

		return $rolesQuery->result();

	}


	public function registerAll($data){

	}


}
