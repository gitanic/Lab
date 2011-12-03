<?php

class Press_release_model extends CI_Model {

	function save($data) {
		
		$this->db->set('logo', $data['logo']);
		$this->db->set('link', $data['link']);
		$this->db->set('alt', $data['alt']);

		if($data['id'] == NULL) {
			$this->db->set('created_at', date('Y-m-d h:i:s',time()));
			$this->db->insert('press_release');
		} else {
			$this->db->where('id', $data['id']);
			$this->db->set('updated_at', date('Y-m-d h:i:s',time()));
			$this->db->update('press_release');
		}

		return $this->db->affected_rows();
	}

	function find($id = NULL) {
		if($id != NULL) {
			$this->db->where('id', $id);
			return $this->db->get('press_release')->row();
		} else {
			return $this->db->get('press_release')->result();
		}
	}

	function destroy($id) {
		$this->db->where('id', $id);
		$this->db->delete('press_release');

		return $this->db->affected_rows();
	}

}
