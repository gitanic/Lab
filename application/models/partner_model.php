<?php

class Partner_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function all() {
		return $this->db->get('posts')->result();
	}

	function find($id) {

	}

	function save($model) {

	}

	function destroy($id) {

	}

}
?>
