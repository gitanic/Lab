<?php

class Home_model extends CI_Model {
  
	function __construct() { 
		parent::__construct();
	}

	function get_all() {
		return $this->db->get('data')->result();
	}

	function put($data = array()) {
		$this->db->insert('data', $data);
		return $this->db->effected_rows();
	}
}
