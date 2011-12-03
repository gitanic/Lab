<?php

class Users_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->helper('security');
	}

	function save($data) {
		
		$this->db->set('username', $data['username']);
		$this->db->set('password', do_hash($data['password']), 'md5');

		if($data['id'] == NULL) {
			$this->db->set('created_at', date('Y-m-d h:i:s',time()));
			$this->db->insert('users');
		} else {
			$this->db->where('id', $data['id']);
			$this->db->set('updated_at', date('Y-m-d h:i:s',time()));
			$this->db->update('users');
		}

		return $this->db->affected_rows();
	}

	function find($id = NULL) {
		if($id != NULL) {
			$this->db->where('id', $id);
			return $this->db->get('users')->row();
		} else {
			return $this->db->get('users')->result();
		}
	}

	function destroy($id) {
		$this->db->where('id', $id);
		$this->db->delete('users');

		return $this->db->affected_rows();
	}

}
