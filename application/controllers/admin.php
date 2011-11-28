<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); session_start();

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['content'] = 'admin/index';
			$this->load->view('includes/admin/template', $data);
		} else {
			redirect('/login', 'refresh');
		}
	}

	function logout() {
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('/admin/index', 'refresh');
	}
}

?>
