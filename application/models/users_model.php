<?php
class Users_model extends CI_Model {

	function save($data) {
		$this->db->set('username', $data['username']);
		$this->db->set('password', $data['password']);
		$this->db->insert('users');

		return $this->db->affected_rows();
	}

	function find($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('users');

		return $query;
	}

	function findAll() {
		 return $this->db->get('users')->result();
	}

	function update($id, $data) {
		$this->db->where('id', $data['id']);
		$this->db->set('username', $data['username']);
		$this->db->set('password', $data['password']);
		$this->db->update('users');

		return $this->db->affected_rows();
	}

	function destroy($id) {
		$this->db->where('id', $id);
		$this->db->delete('users');

		return $this->db->affected_rows();
	}

}
