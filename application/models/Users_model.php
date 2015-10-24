<?php

class Users_model extends CI_Model {

function __construct()

{

parent::__construct();

$this->load->database("ci");

}

public function get_all_users()

{

$query = $this->db->get('users');

return $query->result();

}

//methode insertion
	public function insert_users_to_db($data)
 

	{
	 
	return $this->db->insert('users', $data);
	}




}

?>
