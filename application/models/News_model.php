<?php

class News_model extends CI_Model {

function __construct()

{

parent::__construct();


}

public function get_all_news()

{

$query = $this->db->get('news');

return $query->result();

}


public function insert_new_to_db($data)

{

return $this->db->insert('news', $data);

}


}

?>