<?php
class Users_model extends CI_Model {

	function save($data) {
		$this->db->set('username', $data['username']);
		$this->db->set('password', $data['password']);

		if($data['id'] == NULL) {
			$this->db->insert('users');
		} else {
			$this->db->where('id', $data['id']);
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
