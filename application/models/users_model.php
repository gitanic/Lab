<?php
class Users_model extends CI_Model {

	function login($username, $password) {
		$this->db-> select('id, username, password');
		$this->db-> from('users');
		$this->db-> where('username = ' . "'" . $username . "'"); 
		$this->db-> where('password = ' . "'" . MD5($password) . "'"); 
		$this->db-> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}

	}

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
		$query = $this->db->get('users');

		return $query;
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
